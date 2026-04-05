
Runner.pages.PageSettings.addPageEvent( 
	"public.lbpmi_data_values", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
						// ** MIKEINTOSH-SYSTEMS ** //
        // 🔴 hide default save button
        $('#saveButton1').hide();
//        $('#value_deleted_1').hide();
//        $('#edit1_deleted_0').hide();
//        $('#type_deleted_1').hide();

        console.log("Page loaded - starting batch entry setup");

        // ============================================
        // PART 1: PERIOD VISIBILITY CODE (UPDATED - More Reliable)
        // ============================================

        var dataSourceCtrl = Runner.getControl(pageid, "period_type");

        // Helper: hide all period fields using DOM manipulation (more reliable)
        function hideAllPeriods() {
            console.log("Hiding all period fields");
            try {
                pageObj.hideField("period_year");
                pageObj.hideField("period_quarter");
                pageObj.hideField("period_month");
                pageObj.hideField("period_week");
                pageObj.hideField("period_day");
            } catch (e) {
                console.log("pageObj.hideField error:", e);
            }

            $('[name*="period_year"], [id*="period_year"]').closest('.form-group, .field-group, tr, .row').hide();
            $('[name*="period_quarter"], [id*="period_quarter"]').closest('.form-group, .field-group, tr, .row').hide();
            $('[name*="period_month"], [id*="period_month"]').closest('.form-group, .field-group, tr, .row').hide();
            $('[name*="period_week"], [id*="period_week"]').closest('.form-group, .field-group, tr, .row').hide();
            $('[name*="period_day"], [id*="period_day"]').closest('.form-group, .field-group, tr, .row').hide();
        }

        function showPeriodField(fieldName) {
            console.log("Showing field:", fieldName);
            try {
                pageObj.showField(fieldName);
            } catch (e) {
                console.log("pageObj.showField error for", fieldName, ":", e);
            }
            $('[name*="' + fieldName + '"], [id*="' + fieldName + '"]').closest('.form-group, .field-group, tr, .row').show();
        }

        function updatePeriodVisibility(periodType) {
            console.log("Updating visibility for period type:", periodType);
            hideAllPeriods();

            if (periodType === "Yearly") {
                showPeriodField("period_year");
            } else if (periodType === "Quarterly") {
                showPeriodField("period_year");
                showPeriodField("period_quarter");
            } else if (periodType === "Monthly") {
                showPeriodField("period_year");
                showPeriodField("period_month");
            } else if (periodType === "Weekly") {
                showPeriodField("period_year");
                showPeriodField("period_week");
            } else if (periodType === "Daily") {
                showPeriodField("period_day");
            } else {
                console.log("No valid period type selected - keeping all hidden");
            }
        }

        setTimeout(function () {
            if (dataSourceCtrl) {
                var initialValue = dataSourceCtrl.getValue();
                console.log("Initial period type value:", initialValue);

                if (initialValue && initialValue !== "" && initialValue !== "Please select") {
                    updatePeriodVisibility(initialValue);
                } else {
                    hideAllPeriods();
                }

                dataSourceCtrl.on("change", function () {
                    var newValue = this.getValue();
                    console.log("Period type changed to:", newValue);
                    if (newValue && newValue !== "" && newValue !== "Please select") {
                        updatePeriodVisibility(newValue);
                    } else {
                        hideAllPeriods();
                    }
                });
            } else {
                console.log("Warning: period_type control not found via Runner.getControl");
                var periodTypeSelect = $('select[name*="period_type"], select[id*="period_type"]').first();
                if (periodTypeSelect.length) {
                    console.log("Found period_type via selector:", periodTypeSelect.attr('id'));
                    function handlePeriodTypeChange() {
                        var value = periodTypeSelect.val();
                        console.log("Period type changed (DOM fallback):", value);
                        if (value && value !== "" && value !== "Please select") {
                            updatePeriodVisibility(value);
                        } else {
                            hideAllPeriods();
                        }
                    }
                    handlePeriodTypeChange();
                    periodTypeSelect.on('change', handlePeriodTypeChange);
                }
            }
        }, 500);

        $(document).on('change', 'select[name*="period_type"], select[id*="period_type"]', function () {
            var value = $(this).val();
            console.log("Document-level period type change detected:", value);
            if (value && value !== "" && value !== "Please select") {
                updatePeriodVisibility(value);
            } else {
                hideAllPeriods();
            }
        });

        // ============================================
        // PART 2: HIDE ORIGINAL FIELDS (UNCHANGED)
        // ============================================

        pageObj.hideField("data_element_id");
        pageObj.hideField("value");
        pageObj.hideField("value_type");
        pageObj.hideField("data_source");
        pageObj.hideField("source_detail");

        // ============================================
        // PART 3: NEW SCOPE VISIBILITY CODE (UPDATED)
        // ============================================

        var scopeLevelCtrl = Runner.getControl(pageid, "scope_level");

        // Helper: hide all scope fields
        function hideAllScopes() {
            try {
                pageObj.hideField("region_id");
                pageObj.hideField("country_id");
                pageObj.hideField("facility_id");
            } catch (e) {
                console.log("Error hiding scope fields:", e);
            }

            $('[name*="region_id"], [id*="region_id"]').closest('.form-group, .field-group, tr, .row').hide();
            $('[name*="country_id"], [id*="country_id"]').closest('.form-group, .field-group, tr, .row').hide();
            $('[name*="facility_id"], [id*="facility_id"]').closest('.form-group, .field-group, tr, .row').hide();
        }

        function showScopeField(fieldName) {
            try {
                pageObj.showField(fieldName);
            } catch (e) {
                console.log("Error showing scope field:", fieldName, e);
            }
            $('[name*="' + fieldName + '"], [id*="' + fieldName + '"]').closest('.form-group, .field-group, tr, .row').show();
        }

        // Initial state - hide all scope fields first
        hideAllScopes();

        // Show appropriate fields based on initial scope value
        if (scopeLevelCtrl) {
            var initialScope = scopeLevelCtrl.getValue();
            console.log("Initial scope level value:", initialScope);

            switch (initialScope) {
                case "Regional":
                    showScopeField("region_id");
                    break;
                case "Country":
                    showScopeField("region_id");
                    showScopeField("country_id");
                    break;
                case "Facility":
                    showScopeField("region_id");
                    showScopeField("country_id");
                    showScopeField("facility_id");
                    break;
                default:
                    console.log("No valid scope selected - keeping all hidden");
            }

            // One change handler for scope level
            scopeLevelCtrl.on("change", function () {
                hideAllScopes();
                var newScope = this.getValue();
                console.log("Scope level changed to:", newScope);

                switch (newScope) {
                    case "Regional":
                        showScopeField("region_id");
                        // Clear country and facility when switching to Regional
                        try {
                            pageObj.setValue("country_id", "");
                            pageObj.setValue("facility_id", "");
                        } catch (e) { console.log("Error clearing fields:", e); }
                        break;
                    case "Country":
                        showScopeField("region_id");
                        showScopeField("country_id");
                        // Clear facility when switching to Country
                        try {
                            pageObj.setValue("facility_id", "");
                        } catch (e) { console.log("Error clearing facility:", e); }
                        break;
                    case "Facility":
                        showScopeField("region_id");
                        showScopeField("country_id");
                        showScopeField("facility_id");
                        break;
                    default:
                        console.log("No valid scope selected - keeping all hidden");
                }
            });
        } else {
            console.log("Warning: scope_level control not found via Runner.getControl");
            // Fallback to DOM manipulation if needed
            var scopeSelect = $('select[name*="scope_level"], select[id*="scope_level"]').first();
            if (scopeSelect.length) {
                function handleScopeChange() {
                    hideAllScopes();
                    var value = scopeSelect.val();
                    console.log("Scope changed (DOM fallback):", value);

                    switch (value) {
                        case "Regional":
                            showScopeField("region_id");
                            break;
                        case "Country":
                            showScopeField("region_id");
                            showScopeField("country_id");
                            break;
                        case "Facility":
                            showScopeField("region_id");
                            showScopeField("country_id");
                            showScopeField("facility_id");
                            break;
                    }
                }
                handleScopeChange();
                scopeSelect.on('change', handleScopeChange);
            }
        }

        // ============================================
        // PART 4: ADD BATCH ENTRY SECTION (UPDATED WITH SCOPE)
        // ============================================

        // SweetAlert CSS and JS if not already included
        if (typeof Swal === 'undefined') {
            $('<link>')
                .attr('rel', 'stylesheet')
                .attr('href', 'https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css')
                .appendTo('head');

            $.getScript('https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js');
        }

        // Add custom styles for the new design
        $('<style>')
            .prop('type', 'text/css')
            .html(`
                /* Batch Entry Panel Styling */
                .batch-panel {
                    border: none;
                    border-radius: 12px;
                    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
                    margin: 25px 0;
                    overflow: hidden;
                }
                
                .batch-panel-heading {
                    background: linear-gradient(135deg, #17a2b9 0%, #138496 100%);
                    color: white;
                    padding: 20px 25px;
                    border-bottom: none;
                }
                
                .batch-panel-heading h4 {
                    margin: 0;
                    font-size: 18px;
                    font-weight: 600;
                }
                
                .batch-panel-heading h4 i {
                    margin-right: 10px;
                }
                
                .batch-panel-body {
                    background: #f8f9fa;
                    padding: 25px;
                }
                
                .batch-info-card {
                    background: white;
                    border-left: 4px solid #17a2b9;
                    padding: 15px 20px;
                    margin-bottom: 20px;
                    border-radius: 8px;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
                }
                
                .batch-info-card strong {
                    color: #17a2b9;
                    font-size: 16px;
                }
                
                .batch-info-card ul {
                    margin: 10px 0 0 0;
                    padding-left: 20px;
                }
                
                .batch-info-card li {
                    margin: 5px 0;
                    color: #555;
                }
                
                .scope-container {
                    background: white;
                    padding: 15px;
                    border-radius: 8px;
                    margin-bottom: 20px;
                    border: 1px solid #e0e0e0;
                }
                
                .scope-label {
                    font-weight: 600;
                    margin-bottom: 10px;
                    display: block;
                    color: #555;
                }
                
                .scope-select {
                    width: 200px;
                    display: inline-block;
                    margin-right: 10px;
                }
                
                .filter-hint {
                    color: #666;
                    font-size: 12px;
                }
                
                .btn-batch-primary {
                    background: linear-gradient(135deg, #17a2b9 0%, #138496 100%);
                    border: none;
                    color: white;
                    padding: 10px 25px;
                    border-radius: 6px;
                    font-weight: 500;
                    transition: all 0.3s ease;
                }
                
                .btn-batch-primary:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 4px 12px rgba(23,162,185,0.3);
                    background: linear-gradient(135deg, #138496 0%, #0f6b7a 100%);
                    color: white;
                }
                
                .btn-batch-success {
                    background: linear-gradient(135deg, #28a745 0%, #218838 100%);
                    border: none;
                    color: white;
                    padding: 10px 25px;
                    border-radius: 6px;
                    font-weight: 500;
                    transition: all 0.3s ease;
                }
                
                .btn-batch-success:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 4px 12px rgba(40,167,69,0.3);
                    background: linear-gradient(135deg, #218838 0%, #1e7e34 100%);
                    color: white;
                }
                
                .batch-table-container {
                    background: white;
                    border-radius: 10px;
                    overflow: hidden;
                    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
                }
                
                .batch-table-container .table-responsive {
                    max-height: 900px;
                    overflow-y: auto;
                    overflow-x: auto;
                    position: relative;
                }
                
                .batch-table {
                    margin-bottom: 0;
                    background: white;
                }
                
                .batch-table thead th {
                    background: #17a2b9;
                    color: white;
                    font-weight: 600;
                    font-size: 13px;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                    padding: 15px 12px;
                    border-bottom: none;
                    position: sticky;
                    top: 45px;
                    z-index: 10;
                }
                
                .batch-table tbody tr {
                    transition: all 0.2s ease;
                    border-bottom: 1px solid #e9ecef;
                }
                
                .batch-table tbody tr:hover {
                    background: #f8f9fa;
                    transform: scale(1.01);
                    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
                }
                
                .batch-table tbody td {
                    padding: 12px;
                    vertical-align: middle;
                    color: #495057;
                }
                
                .batch-label {
                    padding: 5px 10px;
                    border-radius: 20px;
                    font-size: 11px;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }
                
                .batch-label-info {
                    background: #e3f2fd;
                    color: #17a2b9;
                }
                
                .batch-label-success {
                    background: #d4edda;
                    color: #155724;
                }
                
                .batch-label-primary {
                    background: #cce5ff;
                    color: #004085;
                }
                
                .batch-label-warning {
                    background: #fff3cd;
                    color: #856404;
                }
                
                .batch-label-default {
                    background: #e9ecef;
                    color: #495057;
                }
                
                .batch-status {
                    padding: 8px 15px;
                    border-radius: 20px;
                    font-size: 13px;
                    font-weight: 500;
                }
                
                .batch-status-success {
                    background: #d4edda;
                    color: #155724;
                }
                
                .batch-status-loading {
                    background: #e3f2fd;
                    color: #17a2b9;
                }
                
                .batch-status-error {
                    background: #f8d7da;
                    color: #721c24;
                }
                
                input.form-control, select.form-control, textarea.form-control {
                    border-radius: 6px;
                    border: 1px solid #dee2e6;
                    transition: all 0.2s ease;
                }
                
                input.form-control:focus, select.form-control:focus, textarea.form-control:focus {
                    border-color: #17a2b9;
                    box-shadow: 0 0 0 0.2rem rgba(23,162,185,0.25);
                }
                
                .sticky-group-header {
                    position: sticky;
                    top: 0;
                    background: #e8f4f8;
                    z-index: 8;
                    margin: 0;
                    border-left: 4px solid #17a2b9;
                }
                
                .table-responsive::-webkit-scrollbar {
                    width: 8px;
                    height: 8px;
                }
                
                .table-responsive::-webkit-scrollbar-track {
                    background: #f1f1f1;
                    border-radius: 10px;
                }
                
                .table-responsive::-webkit-scrollbar-thumb {
                    background: #17a2b9;
                    border-radius: 10px;
                }
                
                .table-responsive::-webkit-scrollbar-thumb:hover {
                    background: #138496;
                }
            `)
            .appendTo('head');

        // Find a good place to add the batch entry section
        var $belowGrid = $('.r-below');
        if ($belowGrid.length === 0) {
            $belowGrid = $('#form_below-grid_' + pageid);
        }

        if ($belowGrid.length > 0) {
            $belowGrid.before(`
                <div id="batchEntrySection" class="batch-panel">
                    <div class="batch-panel-heading">
                        <h4>
                            <i class="fa fa-layer-group"></i> 
                            Batch Data Entry - Multiple Data Elements
                        </h4>
                    </div>
                    <div class="batch-panel-body">
                        <div class="batch-info-card">
                            <strong><i class="fa fa-info-circle"></i> Quick Guide</strong>
                            <ul>
                                <li>1. Select Period Type, Period Year/Month/Week/Day above</li>
                                <li>2. Select Scope Level (Regional, Country, or Facility) above</li>
                                <li>3. Select Region, Country, Facility based on Scope Level</li>
                                <li>4. Click "<i class="fa fa-refresh"></i> Load Data Elements" button below</li>
                                <li>5. Enter values for each data element</li>
                                <li>6. Click "<i class="fa fa-save"></i> Save All Values" to save everything at once</li>
                            </ul>
                        </div>
                        
                        <div style="margin-bottom: 20px;">
                            <button type="button" class="btn btn-batch-primary" id="loadDataElementsBtn">
                                <i class="fa fa-refresh"></i> Load Data Elements
                            </button>
                            <span id="batchStatus" style="margin-left: 10px;"></span>
                        </div>
                        <div id="batchEntryGrid" style="margin-top: 20px;"></div>
                    </div>
                </div>
            `);
        }

        // ============================================
        // PART 5: BATCH ENTRY FUNCTIONS (UPDATED WITH NEW SCOPE)
        // ============================================

        var currentDataElements = [];

        function getCurrentFilters() {
            var filters = {
                period_type: null,
                period_year: null,
                period_quarter: null,
                period_month: null,
                period_week: null,
                period_day: null,
                region_id: null,
                country_id: null,
                facility_id: null
            };

            // Get values from the original form fields
            $('select, input, textarea').each(function () {
                var name = $(this).attr('name');
                var id = $(this).attr('id');
                var value = $(this).val();

                if (name) {
                    if (name.indexOf('period_type') !== -1) filters.period_type = value;
                    if (name.indexOf('period_year') !== -1) filters.period_year = value;
                    if (name.indexOf('period_quarter') !== -1) filters.period_quarter = value;
                    if (name.indexOf('period_month') !== -1) filters.period_month = value;
                    if (name.indexOf('period_week') !== -1) filters.period_week = value;
                    if (name.indexOf('period_day') !== -1) filters.period_day = value;
                    if (name.indexOf('scope_level') !== -1) filters.scope_level = value;
                    if (name.indexOf('region_id') !== -1) filters.region_id = value;
                    if (name.indexOf('country_id') !== -1) filters.country_id = value;
                    if (name.indexOf('facility_id') !== -1) filters.facility_id = value;
                }
                if (id) {
                    if (id.indexOf('period_type') !== -1) filters.period_type = value;
                    if (id.indexOf('period_year') !== -1) filters.period_year = value;
                    if (id.indexOf('period_quarter') !== -1) filters.period_quarter = value;
                    if (id.indexOf('period_month') !== -1) filters.period_month = value;
                    if (id.indexOf('period_week') !== -1) filters.period_week = value;
                    if (id.indexOf('period_day') !== -1) filters.period_day = value;
                    if (id.indexOf('scope_level') !== -1) filters.scope_level = value;
                    if (id.indexOf('region_id') !== -1) filters.region_id = value;
                    if (id.indexOf('country_id') !== -1) filters.country_id = value;
                    if (id.indexOf('facility_id') !== -1) filters.facility_id = value;
                }
            });

            console.log("Current filters:", filters);
            return filters;
        }

        function validateFilters(filters) {
            if (!filters.scope_level || filters.scope_level === '') {
                return "Please select Scope Level";
            }
            if (!filters.period_type || filters.period_type === '') {
                return "Please select Period Type";
            }
            if (filters.period_type !== 'Daily') {
                if (!filters.period_year || filters.period_year === '') {
                    return "Please select Period Year";
                }
            }
            if (filters.period_type === 'Daily') {
                if (!filters.period_day || filters.period_day === '') {
                    return "Please select Period Day";
                }
            }

            // Get current scope level to validate geographic fields
            var scopeLevel = null;
            if (scopeLevelCtrl) {
                scopeLevel = scopeLevelCtrl.getValue();
            } else {
                var scopeSelect = $('select[name*="scope_level"], select[id*="scope_level"]').first();
                if (scopeSelect.length) {
                    scopeLevel = scopeSelect.val();
                }
            }

            // Validate based on scope level
            if (scopeLevel === 'Regional') {
                if (!filters.region_id || filters.region_id === '') {
                    return "Please select Region";
                }
            } else if (scopeLevel === 'Country') {
                if (!filters.region_id || filters.region_id === '') {
                    return "Please select Region";
                }
                if (!filters.country_id || filters.country_id === '') {
                    return "Please select Country";
                }
            } else if (scopeLevel === 'Facility') {
                if (!filters.region_id || filters.region_id === '') {
                    return "Please select Region";
                }
                if (!filters.country_id || filters.country_id === '') {
                    return "Please select Country";
                }
                if (!filters.facility_id || filters.facility_id === '') {
                    return "Please select Facility";
                }
            }

            return null;
        }

        // New function to fetch names for region, country, facility
        function fetchFilterNames(filters, callback) {
            var params = {};
            if (filters.region_id && filters.region_id !== '') params.region_id = filters.region_id;
            if (filters.country_id && filters.country_id !== '') params.country_id = filters.country_id;
            if (filters.facility_id && filters.facility_id !== '') params.facility_id = filters.facility_id;

            console.log("Fetching names for params:", params);

            // If no filters, return empty object
            if (Object.keys(params).length === 0) {
                console.log("No filters to fetch");
                if (callback) callback({});
                return;
            }

            $.ajax({
                url: "/app/element/get_filter_names.php",
                type: "GET",
                data: params,
                dataType: "json",
                success: function (response) {
                    console.log("Full filter names response:", response);
                    if (callback) callback(response);
                },
                error: function (err) {
                    console.error("Error fetching filter names:", err);
                    if (callback) callback({});
                }
            });
        }

        function loadDataElements() {
            console.log("Load Data Elements button clicked");

            setTimeout(function () {
                var filters = getCurrentFilters();
                var error = validateFilters(filters);

                console.log("Validated filters:", filters, "Error:", error);

                if (error) {
                    alert(error);
                    $('#batchEntryGrid').html('<div class="alert alert-warning" style="border-radius:8px;">' + error + '</div>');
                    return;
                }

                $('#batchEntryGrid').html('<div class="alert alert-info" style="border-radius:8px; border-left:4px solid #17a2b9;"><i class="fa fa-spinner fa-spin"></i> Loading data elements... Please wait.</div>');
                $('#batchStatus').html('<span class="batch-status batch-status-loading"><i class="fa fa-spinner fa-spin"></i> Loading...</span>');

                $.ajax({
                    url: "/app/element/get_data_elements.php",
                    type: "GET",
                    dataType: "json",

                    success: function (result) {
                        console.log("Response:", result);

                        if (result && result.success && result.data && result.data.length > 0) {
                            currentDataElements = result.data;
                            displayDataGrid(currentDataElements, filters);
                            $('#batchStatus').html(
                                '<span class="batch-status batch-status-success">✓ ' +
                                currentDataElements.length +
                                ' data elements loaded</span>'
                            );
                        } else {
                            $('#batchEntryGrid').html(
                                '<div class="alert alert-warning" style="border-radius:8px;">No active data elements found.</div>'
                            );
                            $('#batchStatus').html('<span class="batch-status batch-status-error">No data elements found</span>');
                        }
                    },

                    error: function (xhr, status, error) {
                        console.error("AJAX Error:", error);
                        $('#batchEntryGrid').html(
                            '<div class="alert alert-danger" style="border-radius:8px;">Error loading data elements: ' + error + '</div>'
                        );
                        $('#batchStatus').html('<span class="batch-status batch-status-error">Error loading</span>');
                    }
                });
            }, 100);
        }

        function displayDataGrid(dataElements, filters) {
            // First fetch the names for region, country, facility
            fetchFilterNames(filters, function (names) {
                // Get current scope level for display
                var scopeLevel = null;
                if (scopeLevelCtrl) {
                    scopeLevel = scopeLevelCtrl.getValue();
                } else {
                    var scopeSelect = $('select[name*="scope_level"], select[id*="scope_level"]').first();
                    if (scopeSelect.length) {
                        scopeLevel = scopeSelect.val();
                    }
                }

                // Format the display names
                var regionDisplay = 'All';
                if (filters.region_id && filters.region_id !== '') {
                    regionDisplay = (names.regions && names.regions[filters.region_id]) ?
                        names.regions[filters.region_id] : filters.region_id;
                }

                var countryDisplay = 'All';
                if (filters.country_id && filters.country_id !== '') {
                    countryDisplay = (names.countries && names.countries[filters.country_id]) ?
                        names.countries[filters.country_id] : filters.country_id;
                }

                var facilityDisplay = 'All';
                if (filters.facility_id && filters.facility_id !== '') {
                    facilityDisplay = (names.facilities && names.facilities[filters.facility_id]) ?
                        names.facilities[filters.facility_id] : filters.facility_id;
                }

                var html = '<div class="batch-info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">';
                html += '<strong><i class="fa fa-filter"></i> Context for these values:</strong><br>';
                html += '<span style="color:#666;"><i class="fa fa-calendar"></i> Period: <strong style="color:#17a2b9;">' + formatPeriod(filters) + '</strong></span><br>';
                html += '<span style="color:#666;"><i class="fa fa-tag"></i> Scope Level: <strong style="color:#17a2b9;">' + (scopeLevel || 'Not set') + '</strong></span><br>';
                html += '<span style="color:#666;"><i class="fa fa-globe"></i> Region: <strong>' + escapeHtml(regionDisplay) + '</strong></span><br>';
                if (scopeLevel !== 'Regional') {
                    html += '<span style="color:#666;"><i class="fa fa-flag"></i> Country: <strong>' + escapeHtml(countryDisplay) + '</strong></span><br>';
                }
                if (scopeLevel === 'Facility') {
                    html += '<span style="color:#666;"><i class="fa fa-building"></i> Facility: <strong>' + escapeHtml(facilityDisplay) + '</strong></span>';
                }
                html += '</div>';

                // Group data elements by indicator group
                var groupedData = {};
                dataElements.forEach(function (de) {
                    var groupName = de.indicator_group_name || 'Uncategorized';
                    if (!groupedData[groupName]) {
                        groupedData[groupName] = [];
                    }
                    groupedData[groupName].push(de);
                });

                // Add filter controls
                html += '<div class="batch-filters" style="background: white; padding: 15px; border-radius: 8px; margin-bottom: 15px; border: 1px solid #e0e0e0;">';
                html += '<div class="row">';
                html += '<div class="col-md-3">';
                html += '<label for="groupSearch" style="font-weight: 600; color: #555; font-size: 12px;">SEARCH GROUPS</label>';
                html += '<input type="text" id="groupSearch" class="form-control" placeholder="Search by group name..." style="border-radius: 6px;">';
                html += '</div>';
                html += '<div class="col-md-3">';
                html += '<label for="dataElementSearch" style="font-weight: 600; color: #555; font-size: 12px;">SEARCH DATA ELEMENTS</label>';
                html += '<input type="text" id="dataElementSearch" class="form-control" placeholder="Search by name or code..." style="border-radius: 6px;">';
                html += '</div>';
                html += '<div class="col-md-2">';
                html += '<label for="typeFilter" style="font-weight: 600; color: #555; font-size: 12px;">FILTER BY TYPE</label>';
                html += '<select id="typeFilter" class="form-control" style="border-radius: 6px;">';
                html += '<option value="">All Types</option>';
                html += '<option value="NUMBER">Number</option>';
                html += '<option value="INTEGER">Integer</option>';
                html += '<option value="TEXT">Text</option>';
                html += '<option value="BOOLEAN">Boolean</option>';
                html += '<option value="DATE">Date</option>';
                html += '<option value="PERCENTAGE">Percentage</option>';
                html += '</select>';
                html += '</div>';
                html += '<div class="col-md-2">';
                html += '<label for="aggFilter" style="font-weight: 600; color: #555; font-size: 12px;">FILTER BY AGGREGATION</label>';
                html += '<select id="aggFilter" class="form-control" style="border-radius: 6px;">';
                html += '<option value="">All Aggregations</option>';
                html += '<option value="SUM">Sum</option>';
                html += '<option value="AVG">Average</option>';
                html += '<option value="COUNT">Count</option>';
                html += '<option value="N/A">N/A</option>';
                html += '</select>';
                html += '</div>';
                html += '<div class="col-md-2">';
                html += '<label style="font-weight: 600; color: #555; font-size: 12px;">FILTER ACTIONS</label><br>';
                html += '<button type="button" class="btn btn-sm btn-outline-secondary" id="clearFilters" style="border-radius: 6px; margin-top: 2px;">';
                html += '<i class="fa fa-times"></i> Clear All';
                html += '</button>';
                html += '</div>';
                html += '</div>';
                html += '</div>';

                html += '<div class="batch-table-container">';
                html += '<div class="table-responsive" style="max-height: 500px; overflow-y: auto;">';

                var groupCounter = 0;
                var totalGroups = Object.keys(groupedData).length;

                // Loop through each indicator group
                for (var groupName in groupedData) {
                    var groupElements = groupedData[groupName];
                    groupCounter++;

                    // Add group header with sticky positioning
                    html += '<div class="sticky-group-header group-section" data-group-name="' + escapeHtml(groupName).toLowerCase() + '" style="background: #e8f4f8; padding: 10px 15px; margin-top: ' + (groupCounter === 1 ? '0' : '10px') + '; border-left: 4px solid #17a2b9;">';
                    html += '<strong style="color: #17a2b9; font-size: 14px;"><i class="fa fa-folder-open"></i> ' + escapeHtml(groupName) + '</strong>';
                    html += '<span style="margin-left: 10px; font-size: 12px; color: #666;">(' + groupElements.length + ' Data Elements)</span>';
                    html += '</div>';

                    html += '<table class="table batch-table" style="margin-bottom: 0;">';
                    html += '<thead>';
                    html += '<tr>';
                    html += '<th style="width:5%;">#</th>';
                    html += '<th style="width:30%;">Data Element</th>';
                    html += '<th style="width:15%;">Code</th>';
                    html += '<th style="width:10%;">Type</th>';
                    html += '<th style="width:15%;">Aggregation</th>';
                    html += '<th style="width:20%;">Value</th>';
                    html += '</tr>';
                    html += '</thead>';
                    html += '<tbody>';

                    groupElements.forEach(function (de, index) {
                        var valueType = de.value_type || 'NUMBER';
                        var inputId = 'batch_val_' + de.data_element_id;
                        var inputHtml = getValueInputHtml(inputId, valueType);

                        // Add dataset badge if available
                        var datasetBadge = '';
                        if (de.dataset_name && de.dataset_name !== 'No Dataset') {
                            datasetBadge = '<br><small class="text-muted" style="font-size:10px;"><i class="fa fa-database"></i> ' + escapeHtml(de.dataset_name) + '</small>';
                        }

                        html += '<tr class="data-element-row" data-element-name="' + escapeHtml(de.data_element_name).toLowerCase() + '" data-element-code="' + escapeHtml(de.data_element_code || '').toLowerCase() + '" data-type="' + valueType.toLowerCase() + '" data-aggregation="' + (de.aggregation_type || 'n/a').toLowerCase() + '">';
                        html += '<td><strong>' + (index + 1) + '</strong></td>';
                        html += '<td><strong>' + escapeHtml(de.data_element_name) + '</strong>' + datasetBadge + '<br>' +
                            '<small class="text-muted" style="font-size:10px;">ID: ' + de.data_element_id + '</small></td>';
                        html += '<td>' + escapeHtml(de.data_element_code || '-') + '</td>';

                        var typeClass = "batch-label batch-label-info";
                        html += '<td><span class="' + typeClass + '">' + valueType + '</span></td>';

                        var aggregationType = de.aggregation_type || 'N/A';
                        var aggClass = "batch-label batch-label-default";
                        if (aggregationType === "SUM") aggClass = "batch-label batch-label-success";
                        else if (aggregationType === "AVG") aggClass = "batch-label batch-label-primary";
                        else if (aggregationType === "COUNT") aggClass = "batch-label batch-label-warning";

                        html += '<td><span class="' + aggClass + '">' + aggregationType + '</span></td>';
                        html += '<td>' + inputHtml + '</td>';
                        html += '</tr>';
                    });

                    html += '</tbody>';
                    html += '</table>';

                    // Add a small gap between groups (except after the last group)
                    if (groupCounter < totalGroups) {
                        html += '<div style="height: 10px;"></div>';
                    }
                }

                html += '</div>'; // Close table-responsive
                html += '</div>'; // Close batch-table-container

                html += '<div style="margin-top:20px; text-align:right;">';
                html += '<button type="button" class="btn btn-batch-success" id="batchSaveBtn">';
                html += '<i class="fa fa-save"></i> Save All Values';
                html += '</button>';
                html += '</div>';

                $('#batchEntryGrid').html(html);

                // Initialize filtering functionality
                initializeFilters();

                setTimeout(function () {
                    loadExistingValues(filters);
                }, 200);
            });
        }

        function getValueInputHtml(inputId, valueType) {
            var type = (valueType || 'NUMBER').toUpperCase();

            switch (type) {
                case 'BOOLEAN':
                    return '<select id="' + inputId + '" class="form-control" style="border-radius:6px;">' +
                        '<option value="">-- Select --</option>' +
                        '<option value="1">Yes / True</option>' +
                        '<option value="0">No / False</option>' +
                        '</select>';
                case 'DATE':
                    return '<input type="date" id="' + inputId + '" class="form-control" style="border-radius:6px;">';
                case 'TEXT':
                    return '<textarea id="' + inputId + '" class="form-control" rows="2" style="border-radius:6px;"></textarea>';
                case 'PERCENTAGE':
                    return '<input type="number" id="' + inputId + '" class="form-control" step="0.01" min="0" max="100" style="border-radius:6px;">';
                case 'INTEGER':
                    return '<input type="number" id="' + inputId + '" class="form-control" step="1" style="border-radius:6px;">';
                default:
                    return '<input type="text" id="' + inputId + '" class="form-control" placeholder="Enter ' + valueType + ' value" style="border-radius:69px;">';
            }
        }

        function loadExistingValues(filters) {
            var params = {
                t: 'lbpmi_data_values',
                a: 'list',
                period_type: filters.period_type,
                scope_level: filters.scope_level,
                deleted: 0
            };

            if (filters.period_year && filters.period_year !== '') params.period_year = filters.period_year;
            if (filters.period_quarter && filters.period_quarter !== '') params.period_quarter = filters.period_quarter;
            if (filters.period_month && filters.period_month !== '') params.period_month = filters.period_month;
            if (filters.period_week && filters.period_week !== '') params.period_week = filters.period_week;
            if (filters.period_day && filters.period_day !== '') params.period_day = filters.period_day;
            if (filters.region_id && filters.region_id !== '') params.region_id = filters.region_id;
            if (filters.country_id && filters.country_id !== '') params.country_id = filters.country_id;
            if (filters.facility_id && filters.facility_id !== '') params.facility_id = filters.facility_id;
            if (filters.value_type && filters.value_type !== '') params.value_type = filters.value_type;

            console.log("Loading existing values with params:", params);

            ajaxCall({
                data: params,
                success: function (response) {
                    console.log("Existing values response:", response);
                    if (response && response.data && response.data.length > 0) {
                        response.data.forEach(function (record) {
                            $('#batch_val_' + record.data_element_id).val(record.value);
                        });
                        console.log("Loaded " + response.data.length + " existing values");
                    }
                },
                error: function (err) {
                    console.log("Error loading existing values:", err);
                }
            });
        }

        function initializeFilters() {
            // Group search functionality
            $('#groupSearch').on('input', function() {
                var searchTerm = $(this).val().toLowerCase();
                filterGroups(searchTerm);
            });

            // Data element search functionality
            $('#dataElementSearch').on('input', function() {
                var searchTerm = $(this).val().toLowerCase();
                filterDataElements(searchTerm);
            });

            // Type filter functionality
            $('#typeFilter').on('change', function() {
                var selectedType = $(this).val().toLowerCase();
                filterByType(selectedType);
            });

            // Aggregation filter functionality
            $('#aggFilter').on('change', function() {
                var selectedAgg = $(this).val().toLowerCase();
                filterByAggregation(selectedAgg);
            });

            // Clear filters functionality
            $('#clearFilters').on('click', function() {
                $('#groupSearch').val('');
                $('#dataElementSearch').val('');
                $('#typeFilter').val('');
                $('#aggFilter').val('');
                showAllElements();
            });
        }

        function filterGroups(searchTerm) {
            $('.group-section').each(function() {
                var groupName = $(this).data('group-name') || '';
                var shouldShow = groupName.includes(searchTerm);
                $(this).toggle(shouldShow);

                // Also toggle the corresponding table
                var $groupSection = $(this);
                var $table = $groupSection.next('table');
                $table.toggle(shouldShow);
            });
        }

        function filterDataElements(searchTerm) {
            $('.data-element-row').each(function() {
                var elementName = $(this).data('element-name') || '';
                var elementCode = $(this).data('element-code') || '';
                var shouldShow = elementName.includes(searchTerm) || elementCode.includes(searchTerm);
                $(this).toggle(shouldShow);
            });
            updateGroupVisibility();
        }

        function filterByType(selectedType) {
            if (!selectedType) {
                $('.data-element-row').show();
            } else {
                $('.data-element-row').each(function() {
                    var rowType = $(this).data('type') || '';
                    var shouldShow = rowType === selectedType;
                    $(this).toggle(shouldShow);
                });
            }
            updateGroupVisibility();
        }

        function filterByAggregation(selectedAgg) {
            if (!selectedAgg) {
                $('.data-element-row').show();
            } else {
                $('.data-element-row').each(function() {
                    var rowAgg = $(this).data('aggregation') || '';
                    var shouldShow = rowAgg === selectedAgg;
                    $(this).toggle(shouldShow);
                });
            }
            updateGroupVisibility();
        }

        function updateGroupVisibility() {
            $('.group-section').each(function() {
                var $groupSection = $(this);
                var $table = $groupSection.next('table');
                var $visibleRows = $table.find('.data-element-row:visible');

                // Show group if it has visible rows, hide if no visible rows
                var hasVisibleRows = $visibleRows.length > 0;
                $groupSection.toggle(hasVisibleRows);
                $table.toggle(hasVisibleRows);
            });
        }

        function showAllElements() {
            $('.group-section').show();
            $('.data-element-row').show();
            $('table.batch-table').show();
        }

        function saveAllValues() {
            var filters = getCurrentFilters();
            var valuesToSave = [];

            // Get the current scope_level value
            var scopeLevel = null;
            if (scopeLevelCtrl) {
                scopeLevel = scopeLevelCtrl.getValue();
            } else {
                var scopeSelect = $('select[name*="scope_level"], select[id*="scope_level"]').first();
                if (scopeSelect.length) {
                    scopeLevel = scopeSelect.val();
                }
            }

            currentDataElements.forEach(function (de) {
                var value = $('#batch_val_' + de.data_element_id).val();

                if (value === "" || value === null) {
                    value = 0;
                }

                valuesToSave.push({
                    data_element_id: de.data_element_id,
                    period_type: filters.period_type,
                    period_year: filters.period_year,
                    period_quarter: filters.period_quarter,
                    period_month: filters.period_month,
                    period_week: filters.period_week,
                    period_day: filters.period_day || null,
                    region_id: filters.region_id,
                    country_id: filters.country_id,
                    facility_id: filters.facility_id,
                    scope_level: scopeLevel,
                    value_type: de.value_type || 'NUMBER',  // ← ADD THIS LINE
                    value: value,
                    stored_by: proxy.userId || 'system',
                    data_source: 'batch_entry',
                    source_detail: 'Batch save Manual Entry - ' + formatPeriod(filters) + ' - Scope: ' + (scopeLevel || 'N/A') + ' - Region: ' + (filters.region_id || 'All') + ' - Country: ' + (filters.country_id || 'All') + ' - Facility: ' + (filters.facility_id || 'All')
                });
            });

            // SweetAlert confirmation dialog
            Swal.fire({
                title: 'Confirm Save',
                html: `Are you sure you want to save <strong>${valuesToSave.length} value(s)</strong>?<br><br>This action cannot be undone.`,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#28a745',
                cancelButtonColor: '#dc3545',
                confirmButtonText: 'Yes, save them!',
                cancelButtonText: 'Cancel',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Proceed with saving
                    $('#batchSaveBtn').prop('disabled', true)
                        .html('<i class="fa fa-spinner fa-spin"></i> Saving...');

                    $.ajax({
                        url: "/app/element/save_data_element.php",
                        type: "POST",
                        contentType: "application/json",
                        data: JSON.stringify({ values: valuesToSave }),

                        success: function (res) {
                            console.log("Save response:", res);

                            $('#batchSaveBtn').prop('disabled', false)
                                .html('<i class="fa fa-save"></i> Save All Values');

                            if (res.success) {
                                $('#batchStatus').html(
                                    '<span class="batch-status batch-status-success">✓ Saved ' + res.saved + ' values</span>'
                                );

                                // Show success message with auto-reload
                                Swal.fire({
                                    title: 'Success!',
                                    html: `✓ Successfully saved <strong>${res.saved} value(s)</strong>!<br><br>Page will reload in 5 seconds...`,
                                    icon: 'success',
                                    confirmButtonColor: '#17a2b9',
                                    confirmButtonText: 'Reload Now',
                                    showCancelButton: true,
                                    cancelButtonColor: '#6c757d',
                                    cancelButtonText: 'Go to List',
                                    timer: 5000,
                                    timerProgressBar: true,
                                    didOpen: () => {
                                        const timer = Swal.getPopup().querySelector('.swal2-timer-progress-bar');
                                        if (timer) {
                                            timer.style.backgroundColor = '#17a2b9';
                                        }
                                    }
                                }).then((result) => {
                                    if (result.dismiss === Swal.DismissReason.timer) {
                                        // Auto reload page after 5 seconds
                                        location.reload();
                                    } else if (result.isConfirmed) {
                                        // User clicked "Reload Now"
                                        location.reload();
                                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                                        // User clicked "Go to List" - redirect to list page
                                        window.location.href = 'lbpmi_data_values_list.php';
                                    }
                                });

                                // Also reload existing values in the background
                                loadExistingValues(filters);
                            } else {
                                // Show error message
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'Error saving values. Please try again.',
                                    icon: 'error',
                                    confirmButtonColor: '#dc3545',
                                    confirmButtonText: 'OK'
                                });
                                $('#batchStatus').html(
                                    '<span class="batch-status batch-status-error">✗ Error saving</span>'
                                );
                            }
                        },

                        error: function (err) {
                            console.error(err);
                            $('#batchSaveBtn').prop('disabled', false)
                                .html('<i class="fa fa-save"></i> Save All Values');
                            $('#batchStatus').html(
                                '<span class="batch-status batch-status-error">✗ Save failed</span>'
                            );

                            // Show error message
                            Swal.fire({
                                title: 'Error!',
                                text: 'Save failed. Please check your connection and try again.',
                                icon: 'error',
                                confirmButtonColor: '#dc3545',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                }
            });
        }

        function formatPeriod(filters) {
            var parts = [filters.period_type];
            if (filters.period_year && filters.period_year !== '') parts.push(filters.period_year);
            if (filters.period_quarter && filters.period_quarter !== '') parts.push('Q' + filters.period_quarter);
            if (filters.period_month && filters.period_month !== '') parts.push('Month ' + filters.period_month);
            if (filters.period_week && filters.period_week !== '') parts.push('Week ' + filters.period_week);
            if (filters.period_day && filters.period_day !== '') parts.push(filters.period_day);
            return parts.join(' - ');
        }

        function escapeHtml(str) {
            if (!str) return '';
            return String(str).replace(/[&<>]/g, function (m) {
                if (m === '&') return '&amp;';
                if (m === '<') return '&lt;';
                if (m === '>') return '&gt;';
                return m;
            });
        }

        // ============================================
        // PART 6: BIND EVENTS
        // ============================================

        $('#loadDataElementsBtn').on('click', function () {
            loadDataElements();
        });

        // ✅ FIX: Use delegated event for dynamically created Save button
        $(document).on('click', '#batchSaveBtn', function () {
            saveAllValues();
        });

        console.log("Batch entry setup complete with new Scope functionality. Select Period Type, Scope Level, and click 'Load Data Elements'");
        // END OF Data Value Batch Add Page Script
// ** MIKEINTOSH-SYSTEMS ** //
});


Runner.pages.PageSettings.addPageEvent( 
	"public.lbpmi_data_values", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.
// Get control once
var dataSourceCtrl = Runner.getControl(pageid, "period_type");

// Helper: hide all period fields
function hideAllPeriods() {
    pageObj.hideField("period_year");
    pageObj.hideField("period_quarter");
    pageObj.hideField("period_month");
    pageObj.hideField("period_week");
    pageObj.hideField("period_day");
}

// Initial state
hideAllPeriods();

switch (dataSourceCtrl.getValue()) {
    case "Yearly":
        pageObj.showField("period_year");
        break;

    case "Quarterly":
        pageObj.showField("period_year");
        pageObj.showField("period_quarter");
        break;

    case "Monthly":
        pageObj.showField("period_year");
        pageObj.showField("period_month");
        break;

    case "Weekly":
        pageObj.showField("period_year");
        pageObj.showField("period_week");
        break;

    case "Daily":
        pageObj.showField("period_day");
        break;
}

// One change handler
dataSourceCtrl.on("change", function () {
    hideAllPeriods();

    switch (this.getValue()) {
        case "Yearly":
            pageObj.showField("period_year");
            break;

        case "Quarterly":
            pageObj.showField("period_year");
            pageObj.showField("period_quarter");
            break;

        case "Monthly":
            pageObj.showField("period_year");
            pageObj.showField("period_month");
            break;

        case "Weekly":
            pageObj.showField("period_year");
            pageObj.showField("period_week");
            break;

        case "Daily":
            pageObj.showField("period_day");
            break;
    }
});





var scopeLevelCtrl = Runner.getControl(pageid, "scope_level");

// Helper: hide all scope fields
function hideAllScopes() {
    pageObj.hideField("region_id");
    pageObj.hideField("country_id");
    pageObj.hideField("facility_id");
}

// Initial state
hideAllScopes();

switch (scopeLevelCtrl.getValue()) {
    case "Regional":
        pageObj.showField("region_id");
        break;

    case "Country":
        pageObj.showField("region_id");
        pageObj.showField("country_id");
        break;

    case "Facility":
        pageObj.showField("region_id");
        pageObj.showField("country_id");
        pageObj.showField("facility_id");
        break;
}

// One change handler
scopeLevelCtrl.on("change", function () {
    hideAllScopes();

    switch (this.getValue()) {
        case "Regional":
            pageObj.showField("region_id");
            break;

        case "Country":
            pageObj.showField("region_id");
            pageObj.showField("country_id");
            break;

        case "Facility":
            pageObj.showField("region_id");
            pageObj.showField("country_id");
            pageObj.showField("facility_id");
            break;
    }
});





// Get controls For Edit Page
var dataElementCtrl = Runner.getControl(pageid, "data_element_id");
var valueTypeCtrl = Runner.getControl(pageid, "value_type");

// Make value_type read-only (already set in properties, but just in case)
if (valueTypeCtrl) {
    valueTypeCtrl.makeReadonly();
    
    // Style it as informational
    if (valueTypeCtrl.input) {
        valueTypeCtrl.input.style.backgroundColor = "#f8f9fa";
        valueTypeCtrl.input.style.color = "#495057";
        valueTypeCtrl.input.style.fontWeight = "bold";
        valueTypeCtrl.input.style.borderLeft = "3px solid #0d6efd";
    }
}

// When data element changes, automatically fetch and set value_type
if (dataElementCtrl) {
    dataElementCtrl.on("change", function() {
        var selectedId = this.getValue();
        
        if (!selectedId) {
            valueTypeCtrl.setValue("");
            return;
        }
        
        // Show loading
        valueTypeCtrl.setValue("Loading...");
        
        // Use PHPRunner's built-in lookup (this is the only "API" call we need)
        ajaxCall({
            data: {
                t: 'lbpmi_data_elements',
                a: 'lookup',
                field: 'value_type',
                key: selectedId
            },
            success: function(response) {
                if (response && response.value) {
                    // Set the value_type field - this will be saved to database!
                    valueTypeCtrl.setValue(response.value);
                    
                    // Add hint to value field
                    var valueField = Runner.getControl(pageid, "value");
                    if (valueField && valueField.input) {
                        valueField.input.title = "Expected type: " + response.value;
                        valueField.input.placeholder = getPlaceholder(response.value);
                    }
                }
            },
            error: function() {
                valueTypeCtrl.setValue("ERROR");
            }
        });
    });
    
    // Trigger on page load if data_element already selected
    if (dataElementCtrl.getValue()) {
        dataElementCtrl.trigger("change");
    }
}

// Helper function for placeholders
function getPlaceholder(valueType) {
    var type = (valueType || '').toUpperCase();
    switch(type) {
        case 'NUMBER': return "Enter number (e.g., 123.45)";
        case 'PERCENTAGE': return "Enter percentage (e.g., 25.5)";
        case 'INTEGER': return "Enter whole number";
        case 'TEXT': return "Enter text";
        case 'BOOLEAN': return "Enter 0/1 or true/false";
        case 'DATE': return "Enter date (YYYY-MM-DD)";
        default: return "Enter value";
    }
}
});







