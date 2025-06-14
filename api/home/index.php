<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifebox M&E System</title>
    <meta name="description" content="Welcome to Lifebox M&E System Dashboard, Data Exploration and Administration System">
    <meta name="keywords"
        content="Monitoring, Evaluation, Lifebox, Surgical, Reporting, Dashboard, and, Data, Data Management, Exploration, Portal, MIKEINTOSH, Systems, System, MERQ Consultancy">
    <meta name="author" content="MERQ Consultancy">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="../../assets/style/styles.css">
    <link
        rel="stylesheet"
        href="../../assets/style/icons/all.css">
    <link
        rel="stylesheet"
        href="../../assets/style/icons/sharp-solid.css">
    <link
        rel="stylesheet"
        href="../../assets/style/icons/sharp-regular.css">
    <link
        rel="stylesheet"
        href="../../assets/style/icons/sharp-light.css">
    <link
        rel="stylesheet"
        href="../../assets/style/icons/duotone.css" />
    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/brands.css" />
    <style>
        /* General styling for all spans inside .logo-text */
        .logo-text span {
            color: black;
            /* Default color */
        }

        /* Specific color for each span */
        .logo-text span:first-child {
            color: white;
            /* Color for 'Welcome' */
        }

        .logo-text span:nth-child(2) {
            color: #E3D83AFF;
            /* Color for 'To' */
        }

        .logo-text span:nth-child(3) {
            color: #ffd166;
            /* Color for 'Lifebox' */
        }

        .logo-text span:nth-child(4) {
            color: #9BE6FFFF;
            /* Color for 'M' */
        }

        .logo-text span:nth-child(5) {
            color: #DADADAFF;
            /* Color for '&' */
        }

        .logo-text span:nth-child(6) {
            color: #DEFF96FF;
            /* Color for 'E' */
        }

        .logo-text span:nth-child(7) {
            color: #ff5722;
            /* Color for 'System' */
        }


        /* Gradient background for the section title */
        .section-title {
            background: linear-gradient(135deg, #00bcd7 0%, #64a6d4 100%);
            padding: 20px;
            color: white;
            border-radius: 10px;
        }

        .components {
            padding: 7px 0;
            background: transparent;/*white;*/
        }

        /* Custom tab styles */
        .nav-tabs {
            margin-bottom: 20px;
        }

        .nav-link {
            color: #1282ad;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }

        .nav-link.active {
            background-color: #1282ad !important;
            color: white !important;
        }

        .nav-link:focus,
        .nav-link:hover {
            color: #ffc107;
        }

        .tab-content {
            padding: 30px;
            background: transparent;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: transparent;
            /*var(--bs-body-bg);*/
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
        }
    </style>
</head>

<body>
    <!-- Tab Section -->
    <section class="tabs-section">
        <ul class="nav nav-tabs justify-content-center" id="tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab">
                    <i class="fa-solid fa-info-circle"></i> Info
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="embed-tab" data-bs-toggle="tab" data-bs-target="#embed" type="button" role="tab">
                    <i class="fa-solid fa-gauge"></i> Dashboard
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="help-tab" data-bs-toggle="tab" data-bs-target="#help" type="button" role="tab">
                    <i class="fa-solid fa-question-circle"></i> Help
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="tabsContent">
            <!-- Info Tab -->
            <div class="tab-pane fade show active" id="info" role="tabpanel">

                <!-- System Components Section -->
                <section class="components" id="components">
                    <div class="container">
                        <div class="section-title">
                            <h2>
                                <div class="logo-text">
                                    <span>Welcome</span><span> To</span>
                                    <!--<span> Lifebox</span> <span>M</span><span>&amp;</span><span>E</span> <span>System</span>-->
                                </div>
                                <div style="font-size: 17px; font-weight: bold;">

                                    <img src="../../assets/img/lblogo-white.svg" height="47px"></img>
                                    <br>
                                    </br>
                                    <span style="color: red;">M</span>
                                    <span style="color: #D5F7FFFF;">&amp;</span>
                                    <span style="color: orange;">E</span>
                                    <span style="color: #FAFFAFFF;"> System</span>
                                </div>
                            </h2>
                            <p>Explore the comprehensive modules that make up the Lifebox M&E System.</p>
                        </div>

                        <ul class="nav nav-pills component-tabs justify-content-center" id="components-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tracking-tab" data-bs-toggle="pill" data-bs-target="#tracking" type="button" role="tab">Tracking Modules</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="training-tab" data-bs-toggle="pill" data-bs-target="#training" type="button" role="tab">Training Modules</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="data-tab" data-bs-toggle="pill" data-bs-target="#data" type="button" role="tab">Data Modules</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="admin-tab" data-bs-toggle="pill" data-bs-target="#admin" type="button" role="tab">Admin Modules</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="components-tabContent">
                            <div class="tab-pane fade show active" id="tracking" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-procedures"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Surgical Case Tracker</h4>
                                                <p>Monitor surgical cases with detailed information on procedures, outcomes, and safety checklist compliance.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fa-regular fa-users-medical"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Patient Impact Tracker</h4>
                                                <p>Track patient outcomes and measure the impact of surgical safety interventions.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-scissors"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Clean Cut Implementation</h4>
                                                <p>Monitor the adoption and effectiveness of infection prevention protocols in surgical settings.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fa-solid fa-chart-network"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Device Distribution Tracker</h4>
                                                <p>Manage inventory and track distribution of pulse oximeters and other medical devices.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fa-regular fa-chart-mixed"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Performance Analytics</h4>
                                                <p>Analyze key performance indicators and benchmark against targets and standards.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fa-solid fa-prescription-bottle-pill"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Antibiotics Usage</h4>
                                                <p>Monitor perioperative antibiotic use and compliance with protocols.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="training" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-chalkboard-teacher"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Training Sessions</h4>
                                                <p>Schedule, manage, and track all training sessions conducted across locations.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Training Participants</h4>
                                                <p>Manage participant information, attendance, and training outcomes.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-certificate"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Training Courses</h4>
                                                <p>Catalog of all training courses offered with curriculum details and materials.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-user-tie"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Training Trainers</h4>
                                                <p>Database of trainers with their qualifications and training assignments.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-clipboard-check"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Training Evaluation</h4>
                                                <p>Assess training effectiveness through pre- and post-training evaluations.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-language"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Training Languages</h4>
                                                <p>Manage multilingual training materials and resources.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="data" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-globe-africa"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Countries & Regions</h4>
                                                <p>Geographical data management for all countries and regions of operation.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-hospital"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Facilities</h4>
                                                <p>Comprehensive database of healthcare facilities implementing Lifebox programs.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-procedures"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Procedures & Diagnoses</h4>
                                                <p>Standardized coding system for surgical procedures and diagnoses.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-people-arrows"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Partners</h4>
                                                <p>Management of partner organizations and their engagement details.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-user-md"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Lifebox Staff</h4>
                                                <p>Directory of Lifebox team members and their roles across regions.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-calendar-alt"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Quarters & Periods</h4>
                                                <p>Financial and reporting period management for consistent data analysis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="admin" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-user-shield"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Roles & Access Management</h4>
                                                <p>Granular control over user permissions and data access levels.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-cogs"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>System Configuration</h4>
                                                <p>Centralized settings for system behavior, notifications, and integrations.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-database"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Data Backup & Recovery</h4>
                                                <p>Scheduled backups and point-in-time recovery options.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-chart-bar"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Report Templates</h4>
                                                <p>Management of standard and custom report templates.</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-exchange-alt"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Integration Settings</h4>
                                                <p>Configuration of external system integrations (DHIS2, etc.).</p>
                                            </div>
                                        </div>
                                        <div class="component-item">
                                            <div class="component-icon">
                                                <i class="fas fa-history"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Audit Logs</h4>
                                                <p>Detailed tracking of all system activities and data changes.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <!-- Embed Tab -->
            <div class="tab-pane fade" id="embed" role="tabpanel">
                <div class="container mt-4">
                    <h4>Dashboard</h4>
                    <iframe
                        src="../meta/index.php"
                        frameborder="0"
                        width="100%"
                        height="1900px"
                        allowtransparency>
                    </iframe>
                </div>
            </div>

            <!-- Help Tab -->
            <div class="tab-pane fade" id="help" role="tabpanel">
                <div class="container mt-4">
                    <h4>Help Section</h4>
                    <?php
                    // Include the content of help.php
                    //include("./help.php");
                    ?>
                    <iframe
                        src="help.php"
                        frameborder="0"
                        width="100%"
                        height="900px"
                        allowtransparency>
                    </iframe>
                </div>
            </div>
        </div>
    </section>



    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>