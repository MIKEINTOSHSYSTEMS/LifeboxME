<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox M&E Dashboard Help Guide</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #078ca9e7;
            --secondary: #00C7FFFF;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --success: #2ecc71;
            --warning: #f39c12;
            --info: #17a2b8;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #f5f7fa00 0%, #ffffff00 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
        }

        header {
            text-align: center;
            padding: 30px 0;
            background: linear-gradient(120deg, var(--primary), #00C2D7FF);
            color: white;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.1)" d="M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,224C672,235,768,181,864,160C960,139,1056,149,1152,165.3C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            background-position: center;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            position: relative;
            animation: fadeInDown 1s ease;
        }

        header p {
            font-size: 1.2rem;
            opacity: 0.9;
            position: relative;
            animation: fadeInUp 1s ease;
        }

        .search-box {
            max-width: 600px;
            margin: 20px auto;
            position: relative;
            animation: fadeIn 1.5s ease;
        }

        .search-box input {
            width: 100%;
            padding: 15px 20px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        .search-box input:focus {
            outline: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        .search-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--secondary);
            cursor: pointer;
        }

        .main-content {
            display: flex;
            gap: 30px;
            margin-bottom: 40px;
        }

        .sidebar {
            flex: 1;
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 20px;
            height: fit-content;
            max-height: 80vh;
            overflow-y: auto;
        }

        .content {
            flex: 3;
        }

        .section {
            background: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            opacity: 0;
            transform: translateY(20px);
        }

        .section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .section:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .section h2 {
            color: var(--primary);
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light);
            display: flex;
            align-items: center;
        }

        .section h2 i {
            margin-right: 10px;
            color: var(--secondary);
        }

        .filter-list {
            list-style: none;
            margin: 15px 0;
            cursor: help;
        }

        .filter-list li {
            padding: 8px 0;
            border-bottom: 1px dashed #eee;
            display: flex;
            align-items: center;
        }

        .filter-list li:before {
            content: '•';
            color: var(--secondary);
            font-weight: bold;
            margin-right: 10px;
        }

        .chart-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }

        .chart-item {
            background: var(--light);
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            transition: var(--transition);
        }

        .chart-item:hover {
            background: var(--secondary);
            color: white;
            transform: translateY(-5px);
        }

        .tab-navigation {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .tab-btn {
            padding: 10px 20px;
            background: var(--light);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 500;
        }

        .tab-btn:hover {
            background: var(--secondary);
            color: white;
        }

        .tab-btn.active {
            background: var(--secondary);
            color: white;
        }

        .export-options {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .export-btn {
            padding: 8px 15px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.9rem;
        }

        .export-btn.png {
            background: #e74c3c;
            color: white;
        }

        .export-btn.csv {
            background: #2ecc71;
            color: white;
        }

        .export-btn.pdf {
            background: #3498db;
            color: white;
        }

        .export-btn.json {
            background: #f39c12;
            color: white;
        }

        .export-btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        footer {
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            color: var(--dark);
            opacity: 0.7;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
            }

            .sidebar {
                position: relative;
                top: 0;
            }

            header h1 {
                font-size: 2rem;
            }

            .chart-grid {
                grid-template-columns: 1fr;
            }
        }

        .highlight {
            background-color: #fff8e1;
            padding: 2px 5px;
            border-radius: 3px;
            font-weight: 500;
        }

        .note {
            background-color: #e3f2fd;
            padding: 15px;
            border-left: 4px solid var(--secondary);
            border-radius: 4px;
            margin: 15px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1><i class="fas fa-life-ring"></i> Lifebox M&E Dashboard Help Guide</h1>
            <small>Currently Under Development</small>
            <p>Your comprehensive guide to using the Lifebox Monitoring & Evaluation Dashboard</p>
        </header>

        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Search for help articles...">
            <i class="fas fa-search"></i>
        </div>

        <div class="main-content">
            <div class="sidebar">
                <h2><i class="fas fa-list"></i> Table of Contents</h2>
                <ul class="filter-list">
                    <li data-section="overview">Dashboard Overview</li>
                    <li data-section="aio-tab">AIO Tab</li>
                    <li data-section="training-tab">Training Tab</li>
                    <li data-section="device-tab">Device Distributions Tab</li>
                    <li data-section="dhis2-tab">DHIS2 Tab</li>
                    <li data-section="activity-tab">Activity Tracker Tab</li>
                    <li data-section="filters">Using Filters</li>
                    <li data-section="exporting">Exporting Data</li>
                    <li data-section="navigation">Dashboard Navigation</li>
                </ul>
            </div>

            <div class="content">
                <div id="overview" class="section">
                    <h2><i class="fas fa-chart-line"></i> Dashboard Overview</h2>
                    <p>The Lifebox M&E Dashboard provides a comprehensive overview of monitoring and evaluation data across multiple dimensions. The dashboard is organized into several tabs, each focusing on specific aspects of the data.</p>

                    <div class="note">
                        <p><strong>Note:</strong> All data visualizations update dynamically based on your filter selections. Make sure to apply relevant filters to get the most accurate data for your needs.</p>
                    </div>

                    <p>Key features of the dashboard include:</p>
                    <ul class="filter-list">
                        <li>Interactive data visualizations with various chart types</li>
                        <li>Dynamic filtering options for customized data views</li>
                        <li>Multiple export options for each visualization</li>
                        <li>Tab-based organization for different data categories</li>
                        <li>Real-time data updates for live reporting</li>
                    </ul>
                </div>

                <div id="aio-tab" class="section">
                    <h2><i class="fas fa-filter"></i> AIO Tab</h2>
                    <p>The AIO (All-In-One) tab provides a comprehensive view of key metrics with multiple filtering options.</p>

                    <h3>Available Filters:</h3>
                    <ul class="filter-list">
                        <li><span class="highlight">Dimension Type</span> - Select the dimension for analysis</li>
                        <li><span class="highlight">Data Item</span> - Choose specific data items to focus on</li>
                        <li><span class="highlight">OU Level *</span> - Organizational Unit level (required)</li>
                        <li><span class="highlight">Country</span> - Filter by country</li>
                        <li><span class="highlight">OU Parent</span> - Filter by parent organizational unit</li>
                        <li><span class="highlight">Org Unit</span> - Select specific organizational units</li>
                        <li><span class="highlight">Relative Period *</span> - Choose relative time periods (required, 2 selections)</li>
                        <li><span class="highlight">Period</span> - Select specific time periods</li>
                    </ul>

                    <h3>Charts & Visualizations:</h3>
                    <div class="chart-grid">
                        <div class="chart-item">Performance Overview Chart</div>
                        <div class="chart-item">Geographical Distribution Map</div>
                        <div class="chart-item">Trend Analysis Graph</div>
                        <div class="chart-item">Comparative Analysis Chart</div>
                    </div>
                </div>

                <div id="training-tab" class="section">
                    <h2><i class="fas fa-graduation-cap"></i> Training Tab</h2>
                    <p>The Training tab focuses on training-related metrics and analytics.</p>

                    <h3>Available Filters:</h3>
                    <ul class="filter-list">
                        <li><span class="highlight">Training Type</span> - Filter by type of training</li>
                        <li><span class="highlight">Quarters</span> - View data by quarter</li>
                        <li><span class="highlight">Facility</span> - Filter by training facility</li>
                    </ul>

                    <h3>Charts & Visualizations:</h3>
                    <div class="chart-grid">
                        <div class="chart-item">Training Participation Chart</div>
                        <div class="chart-item">Training Effectiveness Graph</div>
                        <div class="chart-item">Facility Performance Chart</div>
                        <div class="chart-item">Quarterly Comparison Graph</div>
                    </div>
                </div>

                <div id="device-tab" class="section">
                    <h2><i class="fas fa-laptop-medical"></i> Device Distributions Tab</h2>
                    <p>This tab provides insights into device distribution across countries and regions.</p>

                    <h3>Key Visualizations:</h3>
                    <ul class="filter-list">
                        <li><span class="highlight">Device Distribution by Country Name and Region</span> - Geographical distribution of devices</li>
                        <li><span class="highlight">Device Distribution Summary - By Device Type & Country</span> - Summary of devices by type and location</li>
                    </ul>

                    <h3>Metrics Available:</h3>
                    <ul class="filter-list">
                        <li>Quantity distributed</li>
                        <li>Distribution by country</li>
                        <li>Device type breakdown</li>
                        <li>Regional comparisons</li>
                    </ul>
                </div>

                <div id="dhis2-tab" class="section">
                    <h2><i class="fas fa-database"></i> DHIS2 Tab</h2>
                    <p>The DHIS2 tab integrates with the DHIS2 platform for advanced data analysis.</p>

                    <h3>Available Filters:</h3>
                    <ul class="filter-list">
                        <li><span class="highlight">Dimension Type</span> - Select the dimension for analysis</li>
                        <li><span class="highlight">Data Item</span> - Choose specific data items to focus on</li>
                        <li><span class="highlight">OU Level *</span> - Organizational Unit level (required)</li>
                        <li><span class="highlight">Country</span> - Filter by country</li>
                        <li><span class="highlight">OU Parent</span> - Filter by parent organizational unit</li>
                        <li><span class="highlight">Org Unit</span> - Select specific organizational units</li>
                        <li><span class="highlight">Relative Period *</span> - Choose relative time periods (required, 2 selections)</li>
                        <li><span class="highlight">Period</span> - Select specific time periods</li>
                    </ul>

                    <h3>Visualizations:</h3>
                    <p>This tab includes multiple data visualizations with various dimensions, organization units, and periods tailored for DHIS2 data analysis.</p>
                </div>

                <div id="activity-tab" class="section">
                    <h2><i class="fas fa-tasks"></i> Activity Tracker Tab</h2>
                    <p>The Activity Tracker tab monitors Lifebox activities and their status across strategic areas.</p>

                    <h3>Filters:</h3>
                    <ul class="filter-list">
                        <li><span class="highlight">Strategic Area</span> - Filter activities by strategic area</li>
                    </ul>

                    <h3>Key Visualizations:</h3>
                    <ul class="filter-list">
                        <li><span class="highlight">Lifebox Activities count by Status</span> - Number of activities by their current status</li>
                        <li><span class="highlight">Total Activities, Grouped by Strategic Area</span> - Activity distribution across strategic areas</li>
                        <li><span class="highlight">Number of Activities by Status & Strategic Areas</span> - Combined view of status and strategic areas</li>
                        <li><span class="highlight">Activities On Track Percentage and Strategic Area</span> - Performance metrics for activities</li>
                    </ul>

                    <div class="note">
                        <p><strong>Live Reporting:</strong> All visualizations in this tab update in real-time as activity data changes, providing current status information at all times.</p>
                    </div>
                </div>

                <div id="filters" class="section">
                    <h2><i class="fas fa-sliders-h"></i> Using Filters</h2>
                    <p>Filters allow you to customize the data displayed on the dashboard. Here's how to use them effectively:</p>

                    <h3>Filter Types:</h3>
                    <ul class="filter-list">
                        <li><span class="highlight">Single-select filters</span> - Choose one option from a dropdown</li>
                        <li><span class="highlight">Multi-select filters</span> - Select multiple options by checking boxes</li>
                        <li><span class="highlight">Date/Period filters</span> - Select specific time ranges</li>
                        <li><span class="highlight">Hierarchical filters</span> - Filters that change options based on previous selections</li>
                    </ul>

                    <h3>Tips for Effective Filtering:</h3>
                    <ul class="filter-list">
                        <li>Start with broader filters and gradually narrow down</li>
                        <li>Use the "Clear All" button to reset filters when needed</li>
                        <li>Remember that some filters are required (marked with *)</li>
                        <li>Apply filters consistently across tabs for comparable data</li>
                    </ul>
                </div>

                <div id="exporting" class="section">
                    <h2><i class="fas fa-download"></i> Exporting Data</h2>
                    <p>The dashboard provides multiple options for exporting data and visualizations.</p>

                    <h3>Per-Chart Export Options:</h3>
                    <p>Each chart has export options available through a menu (typically represented by three dots or an export icon).</p>

                    <div class="export-options">
                        <button class="export-btn png"><i class="fas fa-image"></i> PNG</button>
                        <button class="export-btn csv"><i class="fas fa-file-csv"></i> CSV</button>
                        <button class="export-btn pdf"><i class="fas fa-file-pdf"></i> PDF</button>
                        <button class="export-btn json"><i class="fas fa-code"></i> JSON</button>
                    </div>

                    <h3>Full Dashboard Export:</h3>
                    <p>You can export the entire tab as a PDF report using the "Export Full Dashboard" button available on each tab.</p>

                    <div class="note">
                        <p><strong>Tip:</strong> Use PNG exports for presentations, CSV for data analysis, PDF for reports, and JSON for developers or data integration needs.</p>
                    </div>
                </div>

                <div id="navigation" class="section">
                    <h2><i class="fas fa-compass"></i> Dashboard Navigation</h2>
                    <p>Efficient navigation helps you make the most of the dashboard's capabilities.</p>

                    <h3>Tab Navigation:</h3>
                    <p>Use the tab menu at the top of the dashboard to switch between different data categories:</p>
                    <div class="tab-navigation">
                        <button class="tab-btn">AIO</button>
                        <button class="tab-btn">Training</button>
                        <button class="tab-btn">Device Distributions</button>
                        <button class="tab-btn">DHIS2</button>
                        <button class="tab-btn">Activity Tracker</button>
                    </div>

                    <h3>Breadcrumb Navigation:</h3>
                    <p>Use breadcrumbs to track your path through the data and easily return to previous views.</p>

                    <h3>Shortcuts:</h3>
                    <ul class="filter-list">
                        <li>Use <span class="highlight">Ctrl + F</span> (or Cmd + F on Mac) to search within the current view</li>
                        <li>Press <span class="highlight">Esc</span> to close any open modals or filter panels</li>
                        <li>Use browser bookmarks to save frequently accessed views</li>
                    </ul>
                </div>
            </div>
        </div>

        <footer>
            <p>Lifebox M&E Dashboard Help Guide | © 2025 Lifebox. All rights reserved.</p>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for table of contents
            const tocItems = document.querySelectorAll('.filter-list li');
            tocItems.forEach(item => {
                item.addEventListener('click', function() {
                    const sectionId = this.getAttribute('data-section');
                    const section = document.getElementById(sectionId);

                    if (section) {
                        section.scrollIntoView({
                            behavior: 'smooth'
                        });

                        // Add highlight effect
                        section.classList.add('highlighted');
                        setTimeout(() => {
                            section.classList.remove('highlighted');
                        }, 2000);
                    }
                });
            });

            // Search functionality
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('keyup', function() {
                const searchTerm = this.value.toLowerCase();
                const sections = document.querySelectorAll('.section');

                sections.forEach(section => {
                    const sectionText = section.textContent.toLowerCase();
                    if (sectionText.includes(searchTerm)) {
                        section.style.display = 'block';
                    } else {
                        section.style.display = 'none';
                    }
                });
            });

            // Animation on scroll
            const sections = document.querySelectorAll('.section');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            sections.forEach(section => {
                observer.observe(section);
            });

            // Tab button interaction
            const tabButtons = document.querySelectorAll('.tab-btn');
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Simulate section highlighting when navigated to
            const urlFragment = window.location.hash.substring(1);
            if (urlFragment) {
                const targetSection = document.getElementById(urlFragment);
                if (targetSection) {
                    setTimeout(() => {
                        targetSection.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }, 300);
                }
            }
        });
    </script>
</body>

</html>