<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lifebox M&E DHIS2 GeoJSON</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

    <!-- MapLibre GL CSS -->
    <link href="https://unpkg.com/maplibre-gl@latest/dist/maplibre-gl.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #map {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <div id="map"></div>

    <!-- MapLibre GL JS -->
    <script src="https://unpkg.com/maplibre-gl@latest/dist/maplibre-gl.js"></script>

    <script>
        const map = new maplibregl.Map({
            container: 'map',
            style: {
                "version": 8,
                "sources": {
                    "dark-tiles": {
                        "type": "raster",
                        "tiles": [
                            "https://basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png"
                        ],
                        "tileSize": 256,
                        "attribution": "MIKEINTOSH © OpenStreetMap contributors © CARTO"
                    }
                },
                "layers": [{
                    "id": "dark-layer",
                    "type": "raster",
                    "source": "dark-tiles"
                }]
            },
            center: [38.7913, 9.0777],
            zoom: 6,
            projection: "globe"
        });

        map.addControl(new maplibregl.NavigationControl());

        map.on('load', function() {

            // Add GeoJSON source
            map.addSource('lifeboxme', {
                type: 'geojson',
                data: 'lb_organisationUnits_level4.geojson'
            });

            // Add circle layer
            map.addLayer({
                id: 'lifeboxme-layer',
                type: 'circle',
                source: 'lifeboxme',
                paint: {
                    'circle-radius': 14,
                    'circle-color': '#00D9FF',
                    'circle-stroke-width': 2,
                    'circle-stroke-color': '#FFFFFF',
                    'circle-blur': 0.2
                }
            });

            // =========================
            // Hover Popup (Name Only)
            // =========================

            const hoverPopup = new maplibregl.Popup({
                closeButton: false,
                closeOnClick: false
            });

            map.on('mouseenter', 'lifeboxme-layer', function() {
                map.getCanvas().style.cursor = 'pointer';
            });

            map.on('mousemove', 'lifeboxme-layer', function(e) {

                const coordinates = e.features[0].geometry.coordinates.slice();
                const name = e.features[0].properties.name;

                hoverPopup
                    .setLngLat(coordinates)
                    .setHTML("<strong>" + name + "</strong>")
                    .addTo(map);
            });

            map.on('mouseleave', 'lifeboxme-layer', function() {
                map.getCanvas().style.cursor = '';
                hoverPopup.remove();
            });

            // =========================
            // Click Popup (Detailed)
            // =========================

            map.on('click', 'lifeboxme-layer', function(e) {

                const props = e.features[0].properties;

                new maplibregl.Popup()
                    .setLngLat(e.lngLat)
                    .setHTML(
                        "<h3>" + props.name + "</h3>" +
                        "<p><strong>Level:</strong> " + props.level + "</p>" +
                        "<p><strong>Parent ID:</strong> " + props.parent + "</p>"
                    )
                    .addTo(map);
            });

        });
    </script>

</body>

</html>