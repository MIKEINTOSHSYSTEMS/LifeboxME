<html lang="en">

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
    <link rel="stylesheet" href="../../assets/style/icons/all.css">
    <link rel="stylesheet" href="../../assets/style/icons/sharp-solid.css">
    <link rel="stylesheet" href="../../assets/style/icons/sharp-regular.css">
    <link rel="stylesheet" href="../../assets/style/icons/sharp-light.css">
    <link rel="stylesheet" href="../../assets/style/icons/duotone.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/brands.css" />
    <style>
        :root {
            --primary: #1282ad;
            --secondary: #00bcd7;
            --accent: #ff5722;
            --light: #f8f9fa;
            --dark: #2c3e50;
            --success: #28a745;
            --warning: #ffc107;
            --info: #17a2b8;
            --transition: all 0.3s ease;
        }

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
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 20px;
            color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .components {
            padding: 7px 0;
            background: transparent;
        }

        /* Custom tab styles */
        .nav-tabs {
            margin-bottom: 20px;
            border-bottom: 1px solid var(--primary);
        }

        .nav-link {
            color: var(--dark);
            font-weight: 600;
            transition: var(--transition);
            border: none !important;
            border-radius: 8px 8px 0 0;
            padding: 12px 20px;
            margin: 0 5px;
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--primary);
            transition: var(--transition);
        }

        .nav-link.active {
            background-color: var(--primary) !important;
            color: white !important;
        }

        .nav-link.active::before {
            width: 100%;
        }

        .nav-link:not(.active):hover {
            color: var(--primary);
            background-color: rgba(18, 130, 173, 0.1);
        }

        .nav-link:not(.active):hover::before {
            width: 100%;
            background: var(--secondary);
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
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            background: linear-gradient(135deg, #f5f7fa 0%, #C3CFE200 100%);
            min-height: 100vh;
        }

        .tabs-section,
        .tab-content,
        .tab-pane {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        /* FIXED STYLES */
        html,
        body {
            height: 100%;
            overflow: hidden;
        }

        #tabsContent {
            height: calc(100% - 60px);
            /* Account for tabs height */
        }

        .tab-pane {
            height: 100%;
        }

        #embed {
            padding: 0 !important;
        }

        .dashboard-container {
            height: 100%;
            width: 100%;
            position: relative;
        }

        .dashboard-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            overflow: hidden;
        }

        .help-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            overflow: hidden;
        }

        /* Component tabs styling */
        .component-tabs .nav-link {
            color: var(--dark);
            border-radius: 20px;
            margin: 0 5px 15px;
            padding: 8px 20px;
            transition: var(--transition);
        }

        .component-tabs .nav-link.active {
            background: var(--primary);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .component-tabs .nav-link:hover:not(.active) {
            background: rgba(18, 130, 173, 0.1);
        }

        /* Component items styling */
        .component-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
            padding: 30px;
            border-radius: 10px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            transform: translateY(0);
        }


        .component-item:last-child {
            margin-bottom: 0;
            padding-bottom: 40px;
            border-bottom: none;
        }

        .component-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .component-icon {
            flex: 0 0 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .component-text h4 {
            color: var(--primary);
            margin-bottom: 8px;
            font-weight: 600;
        }

        .component-text p {
            color: #666;
            margin-bottom: 0;
        }

        /* Animation classes */
        .animate-fade-in {
            animation: fadeIn 0.8s ease forwards;
        }

        .animate-slide-in {
            animation: slideIn 0.6s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .nav-tabs .nav-item {
                margin-bottom: 10px;
                width: 100%;
            }

            .nav-link {
                border-radius: 8px;
                text-align: center;
            }

            .component-item {
                flex-direction: column;
                text-align: center;
            }

            .component-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .component-tabs .nav-link {
                margin-bottom: 10px;
            }

            .tab-content {
                padding: 15px;
            }
        }

        /* Loading animation for iframes */
        .iframe-loading {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: var(--primary);
            font-size: 2rem;
        }

        .iframe-loading::after {
            content: '';
            animation: loadingDots 1.5s infinite;
        }

        @keyframes loadingDots {
            0% {
                content: '';
            }

            25% {
                content: '.';
            }

            50% {
                content: '..';
            }

            75% {
                content: '...';
            }

            100% {
                content: '';
            }
        }

        /* Enhanced contrast for accessibility */
        .component-text h4 {
            color: #0a5a7a;
        }

        .component-text p {
            color: #444;
        }

        .section-title p {
            color: rgba(255, 255, 255, 0.9);
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
                        <div class="section-title animate-fade-in">
                            <h2>
                                <div class="logo-text">
                                    <span>Welcome</span><span> To</span>
                                </div>
                                <div class="lifebox-title" style="font-size: 17px; font-weight: bold;">
                                    <img src="../../assets/img/lblogo-white.svg" height="47px" alt="Lifebox Logo">
                                    <br>
                                    <div class="me-system-text">
                                        <span class="m-letter">M</span>
                                        <span class="ampersand">&amp;</span>
                                        <span class="e-letter">E</span>
                                        <span class="system-text"> System</span>
                                    </div>
                                </div>
                            </h2>
                            <!--<p class="typing-animation">Explore the comprehensive modules that make up the Lifebox M&E System.</p>-->
                            <p>Explore the comprehensive modules that make up the Lifebox M&E System.</p>
                        </div>

                        <style>
                            /* 3D Text Animation */
                            .welcome-text-3d {
                                display: inline-block;
                                font-size: 2.5rem;
                                font-weight: 800;
                                text-transform: uppercase;
                                color: white;
                                text-shadow:
                                    0 1px 0 #ccc,
                                    0 2px 0 #c9c9c9,
                                    0 3px 0 #bbb,
                                    0 4px 0 #b9b9b9,
                                    0 5px 0 #aaa,
                                    0 6px 1px rgba(0, 0, 0, .1),
                                    0 0 5px rgba(0, 0, 0, .1),
                                    0 1px 3px rgba(0, 0, 0, .3),
                                    0 3px 5px rgba(0, 0, 0, .2),
                                    0 5px 10px rgba(0, 0, 0, .25),
                                    0 10px 10px rgba(0, 0, 0, .2),
                                    0 20px 20px rgba(0, 0, 0, .15);
                                animation: bounceIn 1.5s ease forwards;
                                opacity: 0;
                                transform: translateY(-30px);
                            }

                            @keyframes bounceIn {
                                0% {
                                    opacity: 0;
                                    transform: translateY(-30px) scale(0.3);
                                }

                                50% {
                                    opacity: 1;
                                    transform: translateY(0) scale(1.05);
                                }

                                70% {
                                    transform: translateY(0) scale(0.9);
                                }

                                100% {
                                    opacity: 1;
                                    transform: translateY(0) scale(1);
                                }
                            }

                            /* Individual letter animation */
                            .welcome-text-3d {
                                overflow: hidden;
                                white-space: nowrap;
                                margin: 0 auto;
                                letter-spacing: 0.15em;
                                animation: typing 3.5s steps(10, end), blink-caret 0.75s step-end infinite;
                                border-right: 0.15em solid white;
                            }

                            /* Typing effect */
                            @keyframes typing {
                                from {
                                    width: 0
                                }

                                to {
                                    width: 100%
                                }
                            }

                            /* Cursor effect */
                            @keyframes blink-caret {

                                from,
                                to {
                                    border-color: transparent
                                }

                                50% {
                                    border-color: white;
                                }
                            }

                            /* M&E System text animation */
                            .me-system-text {
                                display: inline-block;
                                margin-top: 10px;
                            }

                            .m-letter,
                            .e-letter,
                            .ampersand,
                            .system-text {
                                display: inline-block;
                                opacity: 0;
                                animation: fadeInUp 0.8s ease forwards;
                            }

                            .m-letter {
                                color: #ff6b6b;
                                animation-delay: 1.2s;
                                text-shadow: 0 2px 10px rgba(255, 107, 107, 0.5);
                            }

                            .ampersand {
                                color: #D5F7FFFF;
                                animation-delay: 1.5s;
                                text-shadow: 0 2px 10px rgba(213, 247, 255, 0.5);
                            }

                            .e-letter {
                                color: #ffd166;
                                animation-delay: 1.8s;
                                text-shadow: 0 2px 10px rgba(255, 209, 102, 0.5);
                            }

                            .system-text {
                                color: #FAFFAFFF;
                                animation-delay: 2.1s;
                                text-shadow: 0 2px 10px rgba(250, 255, 175, 0.5);
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

                            /* Subtitle typing animation */
                            .typing-animation {
                                overflow: hidden;
                                white-space: nowrap;
                                margin: 20px auto 0;
                                font-size: 1.2rem;
                                max-width: 550px;
                                animation: typing 4s steps(60, end) 2.5s forwards, blink-caret 0.75s step-end infinite;
                                border-right: 0.15em solid white;
                                opacity: 0;
                            }

                            /* Make sure the animation works on all devices */
                            @media (max-width: 768px) {
                                .welcome-text-3d {
                                    font-size: 1.8rem;
                                }

                                .typing-animation {
                                    font-size: 1rem;
                                    white-space: normal;
                                    animation: none;
                                    border-right: none;
                                    opacity: 1;
                                }
                            }
                        </style>

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
                                        <div class="component-item animate-slide-in">
                                            <div class="component-icon">
                                                <i class="fas fa-procedures"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Surgical Case Tracker</h4>
                                                <p>Monitor surgical cases with detailed information on procedures, outcomes, and safety checklist compliance.</p>
                                            </div>
                                        </div>
                                        <div class="component-item animate-slide-in" style="animation-delay: 0.1s;">
                                            <div class="component-icon">
                                                <i class="fa-regular fa-users-medical"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Patient Impact Tracker</h4>
                                                <p>Track patient outcomes and measure the impact of surgical safety interventions.</p>
                                            </div>
                                        </div>
                                        <div class="component-item animate-slide-in" style="animation-delay: 0.2s;">
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
                                        <div class="component-item animate-slide-in" style="animation-delay: 0.3s;">
                                            <div class="component-icon">
                                                <i class="fa-solid fa-chart-network"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Device Distribution Tracker</h4>
                                                <p>Manage inventory and track distribution of pulse oximeters and other medical devices.</p>
                                            </div>
                                        </div>
                                        <div class="component-item animate-slide-in" style="animation-delay: 0.4s;">
                                            <div class="component-icon">
                                                <i class="fa-regular fa-chart-mixed"></i>
                                            </div>
                                            <div class="component-text">
                                                <h4>Performance Analytics</h4>
                                                <p>Analyze key performance indicators and benchmark against targets and standards.</p>
                                            </div>
                                        </div>
                                        <div class="component-item animate-slide-in" style="animation-delay: 0.5s;">
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
                <div class="dashboard-container">
                    <div class="iframe-loading">Loading</div>
                    <iframe
                        src="../meta/index.php"
                        class="dashboard-iframe"
                        allowtransparency="true"
                        allowfullscreen
                        onload="document.querySelector('.iframe-loading').style.display = 'none';">
                    </iframe>
                </div>
            </div>

            <!-- Help Tab -->
            <div class="tab-pane fade" id="help" role="tabpanel">
                <div class="dashboard-container">
                    <div class="iframe-loading">Loading</div>
                    <iframe
                        src="help.php"
                        class="help-iframe"
                        allowtransparency="true"
                        onload="document.querySelectorAll('.iframe-loading')[1].style.display = 'none';">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to calculate available height for iframe
            function calculateAvailableHeight() {
                const tabsHeight = document.getElementById('tabs').offsetHeight;
                const windowHeight = window.innerHeight;
                return windowHeight - tabsHeight;
            }

            // Set initial height for tabsContent
            document.getElementById('tabsContent').style.height = calculateAvailableHeight() + 'px';

            // Adjust height on window resize
            window.addEventListener('resize', function() {
                document.getElementById('tabsContent').style.height = calculateAvailableHeight() + 'px';
            });

            // Handle tab switching
            const tabButtons = document.querySelectorAll('[data-bs-toggle="tab"]');
            tabButtons.forEach(button => {
                button.addEventListener('shown.bs.tab', function() {
                    // Force resize after tab switch
                    document.getElementById('tabsContent').style.height = calculateAvailableHeight() + 'px';

                    // Show loading indicator for iframe tabs
                    if (this.id === 'embed-tab' || this.id === 'help-tab') {
                        const iframeContainers = document.querySelectorAll('.dashboard-container');
                        iframeContainers.forEach(container => {
                            const loadingIndicator = container.querySelector('.iframe-loading');
                            if (loadingIndicator) {
                                loadingIndicator.style.display = 'block';
                            }
                        });
                    }
                });
            });

            // Add animation to component items when they become visible
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-slide-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all component items
            document.querySelectorAll('.component-item').forEach(item => {
                if (!item.classList.contains('animate-slide-in')) {
                    observer.observe(item);
                }
            });

            // Add hover effect to component tabs
            const componentTabs = document.querySelectorAll('.component-tabs .nav-link');
            componentTabs.forEach(tab => {
                tab.addEventListener('mouseenter', function() {
                    if (!this.classList.contains('active')) {
                        this.style.transform = 'translateY(-2px)';
                    }
                });

                tab.addEventListener('mouseleave', function() {
                    if (!this.classList.contains('active')) {
                        this.style.transform = 'translateY(0)';
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>