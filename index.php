<?php
// index.php

require_once 'res/database.php';
require_once 'res/session_helper.php';
require_once 'res/notifications.php';

try {
    $notificationManager = new NotificationManager($pdo);
    $activeNotifications = $notificationManager->getActiveNotifications();
} catch (Exception $e) {
    $activeNotifications = [];
}

// Initialize shared session with PHPRunner
//initializeSharedSession();

?>

<?php
// Helper function to get appropriate icon for notification type
function getNotificationIcon($type)
{
    switch ($type) {
        case 'info':
            return 'info-circle';
        case 'warning':
            return 'exclamation-triangle';
        case 'primary':
            return 'bullhorn';
        case 'danger':
            return 'exclamation-circle';
        case 'success':
            return 'check-circle';
        default:
            return 'info-circle';
    }
}
?>
<!DOCTYPE html>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/style/styles.css">
    <link
        rel="stylesheet"
        href="./assets/style/icons/all.css">

    <link
        rel="stylesheet"
        href="./assets/style/icons/sharp-solid.css">

    <link
        rel="stylesheet"
        href="./assets/style/icons/sharp-regular.css">

    <link
        rel="stylesheet"
        href="./assets/style/icons/sharp-light.css">
    <link
        rel="stylesheet"
        href="./assets/style/icons/duotone.css" />
    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/brands.css" />

    <link rel="icon" type="image/svg+xml" href="./assets/img/lb_favicon.svg">
    <link rel="alternate icon" href="./assets/img/lb_favicon.ico">
    <link rel="mask-icon" href="./assets/img/lb_favicon.svg" color="#038DA9">
    <style></style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-container">
            <svg class="preloader-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 379.57 145.86">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f2ea60;
                        }

                        .cls-2 {
                            fill: #ec6542;
                        }

                        .cls-3 {
                            fill: #6fb395;
                        }

                        .cls-4 {
                            fill: #a7cfbb;
                        }

                        .cls-5 {
                            fill: #ec3627;
                        }

                        .cls-6 {
                            fill: #078ca7;
                        }

                        .cls-7 {
                            fill: #048ba7;
                        }

                        .preloader-logo path,
                        .preloader-logo polygon,
                        .preloader-logo polyline {
                            opacity: 0;
                        }

                        /* Notification Bell Styles */
                        .notification-bell {
                            position: relative;
                            font-size: 1.25rem;
                            color: rgba(255, 255, 255, 0.75);
                            transition: all 0.3s ease;
                            padding: 0.5rem 1rem;
                        }

                        .notification-bell:hover {
                            color: white;
                        }

                        .notification-badge {
                            position: absolute;
                            top: 5px;
                            right: 5px;
                            background-color: #ec6542;
                            color: white;
                            border-radius: 50%;
                            width: 18px;
                            height: 18px;
                            font-size: 10px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            font-weight: bold;
                        }

                        .notification-menu {
                            width: 350px;
                            padding: 0;
                            border: none;
                            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
                            border-radius: 8px;
                            overflow: hidden;
                        }

                        .notification-header {
                            padding: 12px 15px;
                            background-color: #048ba7;
                            color: white;
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                        }

                        .notification-header h6 {
                            margin: 0;
                            font-weight: 600;
                        }

                        .notification-header small a {
                            color: rgba(255, 255, 255, 0.8);
                            text-decoration: none;
                            font-size: 0.75rem;
                        }

                        .notification-header small a:hover {
                            color: white;
                        }

                        .notification-list {
                            max-height: 400px;
                            overflow-y: auto;
                        }

                        .notification-item {
                            padding: 12px 15px;
                            border-bottom: 1px solid #eee;
                            transition: background-color 0.2s;
                        }

                        .notification-item:last-child {
                            border-bottom: none;
                        }

                        .notification-item:hover {
                            background-color: #f8f9fa;
                        }

                        .notification-item.unread {
                            background-color: #f0f9ff;
                        }

                        .notification-content {
                            font-size: 0.9rem;
                            color: #333;
                        }

                        .notification-time {
                            font-size: 0.75rem;
                            color: #6c757d;
                            margin-top: 5px;
                        }

                        .notification-footer {
                            padding: 10px 15px;
                            background-color: #f8f9fa;
                            border-top: 1px solid #eee;
                        }

                        /* Animation for new notifications */
                        @keyframes pulse {
                            0% {
                                transform: scale(1);
                            }

                            50% {
                                transform: scale(1.1);
                            }

                            100% {
                                transform: scale(1);
                            }
                        }

                        .notification-badge.pulse {
                            animation: pulse 0.5s ease-in-out;
                        }

                        .notification-actions {
                            opacity: 0;
                            transition: opacity 0.3s ease;
                        }

                        .notification-item:hover .notification-actions {
                            opacity: 1;
                        }

                        .btn-unmark {
                            padding: 0.15rem 0.4rem;
                            font-size: 0.75rem;
                            line-height: 1;
                        }
                    </style>
                </defs>
                <g id="Lifebox_Icon" data-name="Lifebox Icon">
                    <polyline id="Lifebox_Yellow" data-name="Lifebox Yellow" class="cls-1" points="312.45 96.73 270.34 54.58 312.33 12.6 354.44 54.76 312.45 96.73" />
                    <polyline id="Lifebox_Light_Red" data-name="Lifebox Light Red" class="cls-2" points="354.44 54.76 312.33 12.6 324.76 0 379.27 54.75 354.44 54.76" />
                    <polygon id="Lifebox_Dark_Green" data-name="Lifebox Dark Green" class="cls-3" points="354.44 54.75 379.27 54.75 324.87 109.15 312.45 96.73 354.44 54.75 354.44 54.75" />
                    <polyline id="Lifebox_Light_Green" data-name="Lifebox Light Green" class="cls-4" points="270.34 54.58 312.33 12.6 299.91 0.18 245.5 54.58 270.34 54.58" />
                    <polygon id="Lifebox_Red" data-name="Lifebox Red" class="cls-5" points="312.33 12.6 299.91 0.18 324.76 0 312.33 12.6" />
                </g>
                <g id="Lifebox_Logo" data-name="Lifebox Logo">
                    <polyline id="X2" class="cls-6" points="324.91 109.15 300.08 109.15 245.5 54.58 270.34 54.58 324.91 109.15" />
                    <polyline id="X1" class="cls-6" points="243.84 109.15 268.67 109.15 323.24 54.58 298.41 54.58 243.84 109.15" />
                    <rect id="L" class="cls-6" x="0.66" y="33.19" width="16.3" height="76.05" />
                    <path id="I" class="cls-6" d="M25.72,36.08H42V51.82H25.72Zm0,20.84H42v56.31H25.72Z" transform="translate(-0.67 -3.99)" />
                    <path id="F" class="cls-6" d="M72.39,113.23H56.09V71H49.55V58.36h6.54c0-4.88-.22-10.76,2.55-15,3.77-5.65,11.2-7.87,17.63-7.31l7.54.66V49.27l-5.55-.34c-5.87-.33-5.87,3.44-5.87,8.21v1.22h10V71h-10v42.23" transform="translate(-0.67 -3.99)" />
                    <path id="E" class="cls-6" d="M102.09,87.85,102,90.62c0,6.65,3.77,12.08,10.87,12.08,5,0,10-3.66,10-8.87l15.07,1.11c0,2.77-6.54,19.4-25.61,19.4-16.85,0-27.82-11.75-27.82-28.49s9.87-30,27.38-30c7.87,0,16,3.54,20.62,10s5.87,14.41,5.76,22.06H102.09m19.85-9.65c-.33-6.1-2.33-11.75-9.42-11.75s-10,5.32-10.54,11.75Z" transform="translate(-0.67 -3.99)" />
                    <path id="B" class="cls-6" d="M143.33,37.18h16.29V64h.45c2.77-5.54,7.42-8.2,13.74-8.2,16.08,0,21,16,21,29.26,0,14.75-5.88,29.27-22.84,29.27-8.09,0-12-3-16.08-9.76-2,2.44-2.65,5.66-3.65,8.65h-8.87V37.18m16.52,52.44c0,3.1.11,6.65,1.88,9.42a7.86,7.86,0,0,0,6.87,3.88c9.2,0,9.2-11.75,9.2-17.85,0-6.32,0-18.07-9-18.07-7.87,0-9,8.54-9,14.53Z" transform="translate(-0.67 -3.99)" />
                    <path id="O" class="cls-6" d="M251.63,85.52c0,16.07-10.53,28.82-27.16,28.82-17.29,0-26.72-13.08-26.72-29.38s9.54-29.15,26.72-29.15c17.63,0,27.16,13.08,27.16,29.71M215.27,83.3c0,6.43-.11,20.18,9.2,20.18s9.65-11.09,9.65-17.85c0-4.44-.23-9.76-1.78-14-1.33-3.66-4-5.1-7.76-5.1-8.75,0-9.31,10.31-9.31,16.74" transform="translate(-0.67 -3.99)" />
                </g>
                <g id="Lifebox_Strapline" data-name="Lifebox Strapline">
                    <path class="cls-7" d="M10.65,130.33a6.41,6.41,0,0,1,2.49,2.32l-1.86,1.67a4.65,4.65,0,0,0-1.6-2,4.72,4.72,0,0,0-2.57-.61,4.13,4.13,0,0,0-2.45.63A1.9,1.9,0,0,0,3.79,134a1.65,1.65,0,0,0,.85,1.46,9.07,9.07,0,0,0,3,.92,13.91,13.91,0,0,1,3.24.93,4.12,4.12,0,0,1,1.76,1.4,4.07,4.07,0,0,1-.21,4.41,4.75,4.75,0,0,1-2.12,1.55,8.52,8.52,0,0,1-3.15.54c-3.07,0-5.24-1-6.51-3.07l1.72-1.72a4.79,4.79,0,0,0,1.89,2,5.84,5.84,0,0,0,2.88.65,4.87,4.87,0,0,0,2.55-.57,1.75,1.75,0,0,0,.93-1.59,1.51,1.51,0,0,0-.84-1.33,9.65,9.65,0,0,0-2.92-.89,14.42,14.42,0,0,1-3.32-1,4.23,4.23,0,0,1-1.8-1.42,3.72,3.72,0,0,1-.56-2.07,4.1,4.1,0,0,1,.71-2.33A4.79,4.79,0,0,1,4,130.19a7.44,7.44,0,0,1,3.13-.62A7.77,7.77,0,0,1,10.65,130.33Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M26.87,143.23l-.16,1.65a3.4,3.4,0,0,1-1.42.28,2.76,2.76,0,0,1-1.57-.39,1.94,1.94,0,0,1-.77-1.31,3.4,3.4,0,0,1-1.56,1.25,5.75,5.75,0,0,1-2.32.45,4.37,4.37,0,0,1-2.7-.78,2.62,2.62,0,0,1-1-2.23,2.82,2.82,0,0,1,1.12-2.27,7.19,7.19,0,0,1,3.35-1.32l2.91-.51v-.62a2.24,2.24,0,0,0-.62-1.66,2.37,2.37,0,0,0-1.72-.6,2.83,2.83,0,0,0-3,2.06l-1.9-1A3.84,3.84,0,0,1,17.21,134a5.76,5.76,0,0,1,3.12-.8,5.51,5.51,0,0,1,3.53,1,3.61,3.61,0,0,1,1.31,3v5.18a.91.91,0,0,0,.2.64.84.84,0,0,0,.65.2A3.46,3.46,0,0,0,26.87,143.23Zm-5.09-.52a1.81,1.81,0,0,0,.94-1.59v-1.37l-2.5.5a4.57,4.57,0,0,0-1.76.65,1.27,1.27,0,0,0-.58,1.09,1.14,1.14,0,0,0,.45,1,2.11,2.11,0,0,0,1.27.33A4,4,0,0,0,21.78,142.71Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M38.9,133.47l-4.56,11.46H31.66l-4.59-11.46h2.71L33,142.93l3.32-9.46Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M41,131.14a1.45,1.45,0,0,1-.44-1.13,1.42,1.42,0,0,1,.44-1.12,1.74,1.74,0,0,1,1.21-.39,1.7,1.7,0,0,1,1.2.39,1.42,1.42,0,0,1,.43,1.12,1.44,1.44,0,0,1-.43,1.13,1.66,1.66,0,0,1-1.2.4A1.7,1.7,0,0,1,41,131.14Zm2.43,13.79H41V133.47h2.46Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M56.53,134.34a4.07,4.07,0,0,1,1.2,3.16v7.43H55.28v-6.65c0-2-.81-3-2.45-3a3.06,3.06,0,0,0-2.2.88,3.61,3.61,0,0,0-.92,2.71v6.08H47.26V133.47h2.18l.11,1.9a3.75,3.75,0,0,1,1.58-1.6,4.93,4.93,0,0,1,2.3-.53A4.43,4.43,0,0,1,56.53,134.34Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M70.82,143.92a2.62,2.62,0,0,1,1,2.15,2.92,2.92,0,0,1-.76,2,5,5,0,0,1-2.11,1.31,9.49,9.49,0,0,1-3,.45,8.21,8.21,0,0,1-4.09-.8,2.39,2.39,0,0,1-1.36-2.13,1.94,1.94,0,0,1,.54-1.36,3,3,0,0,1,1.5-.84,3.22,3.22,0,0,1-1.17-.88,2,2,0,0,1-.44-1.3,2.32,2.32,0,0,1,1.79-2.29,3.44,3.44,0,0,1-1.32-1.3,3.82,3.82,0,0,1-.44-1.84,3.36,3.36,0,0,1,.62-2,3.92,3.92,0,0,1,1.75-1.37,6.62,6.62,0,0,1,2.6-.48,6.93,6.93,0,0,1,2.32.37,3.39,3.39,0,0,1,1.15-1.92,3.47,3.47,0,0,1,2.21-.63L72,133a4.14,4.14,0,0,0-1.78.27,1.73,1.73,0,0,0-.93.89,3.68,3.68,0,0,1,1.17,1.29,3.41,3.41,0,0,1,.41,1.69,3.37,3.37,0,0,1-1.36,2.82A5.7,5.7,0,0,1,65.87,141a7.89,7.89,0,0,1-1.9-.21,1.54,1.54,0,0,0-.84.45,1.21,1.21,0,0,0-.26.81.94.94,0,0,0,.38.81,1.63,1.63,0,0,0,1,.29h3.83A4.17,4.17,0,0,1,70.82,143.92Zm-2.09,3.62c.63-.32.94-.72.94-1.19a1,1,0,0,0-.45-.87,3,3,0,0,0-1.54-.3H64.59a3,3,0,0,0-1.55.32,1,1,0,0,0-.52.9,1.34,1.34,0,0,0,.91,1.2,6.64,6.64,0,0,0,2.69.42A5.79,5.79,0,0,0,68.73,147.54Zm-4.62-12a2.06,2.06,0,0,0,0,3.11,2.87,2.87,0,0,0,3.54,0,2,2,0,0,0,.7-1.57,1.94,1.94,0,0,0-.7-1.55,2.64,2.64,0,0,0-1.78-.6A2.58,2.58,0,0,0,64.11,135.57Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M84,141.58a2,2,0,0,0,.26,1.18,1.11,1.11,0,0,0,.94.34,4,4,0,0,0,.74-.06,4.6,4.6,0,0,0,.77-.24l-.28,2a4.21,4.21,0,0,1-1.9.39,3,3,0,0,1-2.26-.78,3.53,3.53,0,0,1-.72-2.45V128.31H84Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M88.76,131.14a1.44,1.44,0,0,1-.43-1.13,1.42,1.42,0,0,1,.43-1.12A1.77,1.77,0,0,1,90,128.5a1.7,1.7,0,0,1,1.2.39,1.45,1.45,0,0,1,.43,1.12,1.48,1.48,0,0,1-.43,1.13,1.66,1.66,0,0,1-1.2.4A1.73,1.73,0,0,1,88.76,131.14Zm2.43,13.79H88.74V133.47h2.45Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M105.13,133.47l-4.56,11.46H97.88L93.3,133.47H96l3.23,9.46,3.32-9.46Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M117.3,140.12h-8.39a3.69,3.69,0,0,0,1.07,2.3,3.2,3.2,0,0,0,2.25.79,3.89,3.89,0,0,0,1.87-.4,2.14,2.14,0,0,0,1-1.16l2,.85q-1.29,2.66-4.93,2.66a5.63,5.63,0,0,1-4.23-1.58,6.09,6.09,0,0,1-1.52-4.38,6.22,6.22,0,0,1,1.46-4.39,5.37,5.37,0,0,1,4.13-1.57,5,5,0,0,1,3.92,1.54,5.82,5.82,0,0,1,1.4,4.07A8.53,8.53,0,0,1,117.3,140.12ZM109.93,136a3.7,3.7,0,0,0-1,2.27h6.19a3.81,3.81,0,0,0-1-2.25,2.77,2.77,0,0,0-2.05-.8A3,3,0,0,0,109.93,136Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M121.52,144.56a4.27,4.27,0,0,1-2-1.81l1.66-1.42a2.8,2.8,0,0,0,1.35,1.44,4.8,4.8,0,0,0,2.2.46,3.51,3.51,0,0,0,1.81-.38,1.11,1.11,0,0,0,.64-1,1,1,0,0,0-.6-.88,7.11,7.11,0,0,0-2.06-.63,8.66,8.66,0,0,1-3.57-1.29,2.7,2.7,0,0,1-1-2.27,3,3,0,0,1,.58-1.75,4,4,0,0,1,1.66-1.31,6.16,6.16,0,0,1,2.58-.49,6.28,6.28,0,0,1,3,.63,4.1,4.1,0,0,1,1.77,2l-1.74,1.28a3,3,0,0,0-1.16-1.47,3.44,3.44,0,0,0-1.89-.47,3.19,3.19,0,0,0-1.71.42,1.18,1.18,0,0,0-.67,1,1.11,1.11,0,0,0,.6,1,7.33,7.33,0,0,0,2.21.66,8,8,0,0,1,3.44,1.24,2.69,2.69,0,0,1,1,2.25,2.93,2.93,0,0,1-1.33,2.49,6.08,6.08,0,0,1-3.67,1A7.49,7.49,0,0,1,121.52,144.56Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M147.11,144.17a3.91,3.91,0,0,1-1.34.72,5.28,5.28,0,0,1-1.71.27,3.87,3.87,0,0,1-2.53-.79,3.09,3.09,0,0,1-1-2.47v-6.5h-2.18v-1.93h2.18v-2.68l2.45-.69v3.37h4v1.93h-4v6.09a1.6,1.6,0,0,0,.44,1.23,1.82,1.82,0,0,0,1.23.4,2.69,2.69,0,0,0,1.86-.74Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M158.74,134.34a4.07,4.07,0,0,1,1.2,3.16v7.43h-2.45v-6.65c0-2-.82-3-2.45-3a3.05,3.05,0,0,0-2.2.89,3.68,3.68,0,0,0-.92,2.73v6.05h-2.45V128.31h2.45v7a3.72,3.72,0,0,1,1.53-1.56,4.64,4.64,0,0,1,2.18-.5A4.44,4.44,0,0,1,158.74,134.34Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M170.83,133.47l-.39,2.25a2.91,2.91,0,0,0-1.44-.3,2.66,2.66,0,0,0-1.39.39,2.93,2.93,0,0,0-1.08,1.17,3.88,3.88,0,0,0-.42,1.87v6.08h-2.45V133.47h2.08l.21,2.06a3.58,3.58,0,0,1,3.62-2.29A2.92,2.92,0,0,1,170.83,133.47Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M182.1,134.82a7.07,7.07,0,0,1,0,8.76,6.35,6.35,0,0,1-8.38,0,7.07,7.07,0,0,1,0-8.76,6.35,6.35,0,0,1,8.38,0Zm-6.59,1.39a5.8,5.8,0,0,0,0,6,2.89,2.89,0,0,0,2.4,1,2.93,2.93,0,0,0,2.41-1,5.71,5.71,0,0,0,0-6,2.93,2.93,0,0,0-2.41-1.05A2.89,2.89,0,0,0,175.51,136.21Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M197.14,133.47v11.46H195l-.09-1.86a5,5,0,0,1-7.07,1.07,4,4,0,0,1-1.14-3.13v-7.54h2.46v6.9a3.06,3.06,0,0,0,.59,2.14,2.33,2.33,0,0,0,1.77.63,3.14,3.14,0,0,0,2.3-.88,3.49,3.49,0,0,0,.9-2.6v-6.19Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M210.31,143.92a2.6,2.6,0,0,1,1,2.15,2.93,2.93,0,0,1-.77,2,4.94,4.94,0,0,1-2.11,1.31,9.42,9.42,0,0,1-3,.45,8.23,8.23,0,0,1-4.1-.8,2.41,2.41,0,0,1-1.36-2.13,1.94,1.94,0,0,1,.54-1.36,3,3,0,0,1,1.5-.84,3.22,3.22,0,0,1-1.17-.88,2,2,0,0,1-.43-1.3,2.31,2.31,0,0,1,1.79-2.29,3.3,3.3,0,0,1-1.32-1.3,3.72,3.72,0,0,1-.45-1.84,3.43,3.43,0,0,1,.62-2,4,4,0,0,1,1.75-1.37,6.62,6.62,0,0,1,2.6-.48,6.93,6.93,0,0,1,2.32.37,3.44,3.44,0,0,1,1.15-1.92,3.48,3.48,0,0,1,2.22-.63l.41,1.91a4.17,4.17,0,0,0-1.78.27,1.73,1.73,0,0,0-.93.89,3.68,3.68,0,0,1,1.17,1.29,3.42,3.42,0,0,1,.42,1.69,3.38,3.38,0,0,1-1.37,2.82,5.7,5.7,0,0,1-3.61,1.06,8,8,0,0,1-1.9-.21,1.54,1.54,0,0,0-.84.45,1.21,1.21,0,0,0-.26.81,1,1,0,0,0,.38.81,1.63,1.63,0,0,0,1,.29h3.83A4.17,4.17,0,0,1,210.31,143.92Zm-2.08,3.62c.62-.32.94-.72.94-1.19a1,1,0,0,0-.46-.87,3,3,0,0,0-1.54-.3h-3.09a3,3,0,0,0-1.55.32,1,1,0,0,0-.51.9,1.33,1.33,0,0,0,.9,1.2,6.7,6.7,0,0,0,2.7.42A5.84,5.84,0,0,0,208.23,147.54Zm-4.63-12a2.06,2.06,0,0,0,0,3.11,2.87,2.87,0,0,0,3.54,0,2,2,0,0,0,.7-1.57,1.91,1.91,0,0,0-.7-1.55,2.64,2.64,0,0,0-1.78-.6A2.58,2.58,0,0,0,203.6,135.57Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M222.91,134.34a4.07,4.07,0,0,1,1.2,3.16v7.43h-2.45v-6.65c0-2-.82-3-2.45-3a3.09,3.09,0,0,0-2.21.89,3.67,3.67,0,0,0-.91,2.73v6.05h-2.45V128.31h2.45v7a3.75,3.75,0,0,1,1.52-1.56,4.71,4.71,0,0,1,2.19-.5A4.46,4.46,0,0,1,222.91,134.34Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M236.33,144.56a4.21,4.21,0,0,1-2-1.81l1.65-1.42a2.8,2.8,0,0,0,1.35,1.44,4.8,4.8,0,0,0,2.2.46,3.51,3.51,0,0,0,1.81-.38,1.11,1.11,0,0,0,.64-1,1,1,0,0,0-.59-.88,7.31,7.31,0,0,0-2.07-.63,8.78,8.78,0,0,1-3.57-1.29,2.69,2.69,0,0,1-1-2.27,3,3,0,0,1,.57-1.75,4,4,0,0,1,1.66-1.31,6.22,6.22,0,0,1,2.58-.49,6.35,6.35,0,0,1,3.05.63,4.13,4.13,0,0,1,1.76,2l-1.74,1.28a3,3,0,0,0-1.16-1.47,3.4,3.4,0,0,0-1.89-.47,3.21,3.21,0,0,0-1.71.42,1.18,1.18,0,0,0-.67,1,1.1,1.1,0,0,0,.61,1,7.14,7.14,0,0,0,2.21.66,8.07,8.07,0,0,1,3.44,1.24,2.71,2.71,0,0,1,1,2.25,2.93,2.93,0,0,1-1.33,2.49,6.05,6.05,0,0,1-3.66,1A7.54,7.54,0,0,1,236.33,144.56Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M258.14,143.23l-.16,1.65a3.36,3.36,0,0,1-1.42.28,2.79,2.79,0,0,1-1.57-.39,1.94,1.94,0,0,1-.77-1.31,3.4,3.4,0,0,1-1.56,1.25,5.7,5.7,0,0,1-2.31.45,4.38,4.38,0,0,1-2.71-.78,2.64,2.64,0,0,1-1-2.23,2.83,2.83,0,0,1,1.13-2.27,7.11,7.11,0,0,1,3.34-1.32l2.91-.51v-.62a2.2,2.2,0,0,0-.62-1.66,2.34,2.34,0,0,0-1.71-.6,2.82,2.82,0,0,0-3,2.06l-1.9-1a3.78,3.78,0,0,1,1.68-2.18,5.8,5.8,0,0,1,3.13-.8,5.53,5.53,0,0,1,3.53,1,3.63,3.63,0,0,1,1.3,3v5.18a.91.91,0,0,0,.2.64.86.86,0,0,0,.65.2A3.4,3.4,0,0,0,258.14,143.23Zm-5.09-.52a1.81,1.81,0,0,0,.94-1.59v-1.37l-2.5.5a4.57,4.57,0,0,0-1.76.65,1.28,1.28,0,0,0-.57,1.09,1.16,1.16,0,0,0,.44,1,2.14,2.14,0,0,0,1.28.33A4,4,0,0,0,253.05,142.71Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M263.62,133.47h3.71v1.93h-3.64v9.53h-2.46V135.4h-2.15v-1.93h2.15v-1.65a3.45,3.45,0,0,1,1.06-2.7,4.18,4.18,0,0,1,2.95-1,5,5,0,0,1,1.26.15,2.43,2.43,0,0,1,.9.4l-.46,1.79a2.34,2.34,0,0,0-1.31-.34c-1.34,0-2,.62-2,1.85Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M279.45,140.12h-8.38a3.64,3.64,0,0,0,1.07,2.3,3.2,3.2,0,0,0,2.25.79,3.89,3.89,0,0,0,1.87-.4,2.18,2.18,0,0,0,1-1.16l2,.85q-1.29,2.66-4.93,2.66a5.61,5.61,0,0,1-4.23-1.58,6,6,0,0,1-1.52-4.38,6.18,6.18,0,0,1,1.46-4.39,5.37,5.37,0,0,1,4.13-1.57,5,5,0,0,1,3.92,1.54,5.81,5.81,0,0,1,1.39,4.07A8.53,8.53,0,0,1,279.45,140.12ZM272.08,136a3.7,3.7,0,0,0-1,2.27h6.18a3.75,3.75,0,0,0-1-2.25,2.77,2.77,0,0,0-2-.8A3,3,0,0,0,272.08,136Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M289.79,133.47l-.39,2.25a2.91,2.91,0,0,0-1.44-.3,2.66,2.66,0,0,0-1.39.39,2.93,2.93,0,0,0-1.08,1.17,3.88,3.88,0,0,0-.42,1.87v6.08h-2.45V133.47h2.08l.21,2.06a3.57,3.57,0,0,1,3.62-2.29A2.92,2.92,0,0,1,289.79,133.47Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M300.16,144.56a4.23,4.23,0,0,1-2-1.81l1.65-1.42a2.8,2.8,0,0,0,1.35,1.44,4.83,4.83,0,0,0,2.2.46,3.51,3.51,0,0,0,1.81-.38,1.11,1.11,0,0,0,.64-1,1,1,0,0,0-.59-.88,7.33,7.33,0,0,0-2.06-.63,8.78,8.78,0,0,1-3.58-1.29,2.69,2.69,0,0,1-1-2.27,3,3,0,0,1,.57-1.75,4,4,0,0,1,1.66-1.31,6.22,6.22,0,0,1,2.58-.49,6.32,6.32,0,0,1,3.05.63,4.13,4.13,0,0,1,1.76,2l-1.74,1.28a3,3,0,0,0-1.15-1.47,3.44,3.44,0,0,0-1.89-.47,3.19,3.19,0,0,0-1.71.42,1.19,1.19,0,0,0-.68,1,1.1,1.1,0,0,0,.61,1,7.14,7.14,0,0,0,2.21.66,8,8,0,0,1,3.44,1.24,2.72,2.72,0,0,1,1,2.25,3,3,0,0,1-1.33,2.49,6.11,6.11,0,0,1-3.67,1A7.46,7.46,0,0,1,300.16,144.56Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M321.6,133.47v11.46h-2.18l-.09-1.86a5,5,0,0,1-7.07,1.07,4,4,0,0,1-1.14-3.13v-7.54h2.46v6.9a3.06,3.06,0,0,0,.59,2.14,2.33,2.33,0,0,0,1.77.63,3.16,3.16,0,0,0,2.3-.88,3.49,3.49,0,0,0,.9-2.6v-6.19Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M332.57,133.47l-.39,2.25a2.91,2.91,0,0,0-1.44-.3,2.68,2.68,0,0,0-1.39.39,3,3,0,0,0-1.07,1.17,3.77,3.77,0,0,0-.43,1.87v6.08H325.4V133.47h2.09l.2,2.06a3.58,3.58,0,0,1,3.62-2.29A2.86,2.86,0,0,1,332.57,133.47Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M343.8,143.92a2.62,2.62,0,0,1,1,2.15,2.92,2.92,0,0,1-.76,2,4.94,4.94,0,0,1-2.11,1.31,9.42,9.42,0,0,1-3,.45,8.23,8.23,0,0,1-4.1-.8,2.41,2.41,0,0,1-1.36-2.13,1.94,1.94,0,0,1,.54-1.36,3,3,0,0,1,1.5-.84,3.22,3.22,0,0,1-1.17-.88,2,2,0,0,1-.43-1.3,2.31,2.31,0,0,1,1.78-2.29,3.34,3.34,0,0,1-1.31-1.3,3.72,3.72,0,0,1-.45-1.84,3.43,3.43,0,0,1,.62-2,4,4,0,0,1,1.75-1.37,6.62,6.62,0,0,1,2.6-.48,6.93,6.93,0,0,1,2.32.37,3.44,3.44,0,0,1,1.15-1.92,3.48,3.48,0,0,1,2.22-.63L345,133a4.14,4.14,0,0,0-1.78.27,1.73,1.73,0,0,0-.93.89,3.68,3.68,0,0,1,1.17,1.29,3.42,3.42,0,0,1,.42,1.69,3.38,3.38,0,0,1-1.37,2.82,5.7,5.7,0,0,1-3.61,1.06,8,8,0,0,1-1.9-.21,1.54,1.54,0,0,0-.84.45,1.21,1.21,0,0,0-.26.81,1,1,0,0,0,.38.81,1.63,1.63,0,0,0,1,.29h3.83A4.17,4.17,0,0,1,343.8,143.92Zm-2.08,3.62c.62-.32.94-.72.94-1.19a1,1,0,0,0-.46-.87,3,3,0,0,0-1.54-.3h-3.09a3,3,0,0,0-1.55.32,1,1,0,0,0-.51.9,1.33,1.33,0,0,0,.9,1.2,6.64,6.64,0,0,0,2.69.42A5.86,5.86,0,0,0,341.72,147.54Zm-4.63-12a2.06,2.06,0,0,0,0,3.11,2.87,2.87,0,0,0,3.54,0,2,2,0,0,0,.7-1.57,1.94,1.94,0,0,0-.7-1.55,2.64,2.64,0,0,0-1.78-.6A2.58,2.58,0,0,0,337.09,135.57Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M357.28,140.12h-8.39a3.69,3.69,0,0,0,1.08,2.3,3.19,3.19,0,0,0,2.24.79,3.89,3.89,0,0,0,1.87-.4,2.1,2.1,0,0,0,1-1.16l2,.85q-1.29,2.66-4.93,2.66a5.63,5.63,0,0,1-4.23-1.58,6.09,6.09,0,0,1-1.52-4.38,6.18,6.18,0,0,1,1.47-4.39,5.34,5.34,0,0,1,4.12-1.57,5,5,0,0,1,3.92,1.54,5.82,5.82,0,0,1,1.4,4.07A8.53,8.53,0,0,1,357.28,140.12ZM349.91,136a3.76,3.76,0,0,0-1,2.27h6.19a3.81,3.81,0,0,0-1-2.25,2.76,2.76,0,0,0-2.05-.8A3,3,0,0,0,349.91,136Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M367.61,133.47l-.39,2.25a2.91,2.91,0,0,0-1.44-.3,2.68,2.68,0,0,0-1.39.39,3,3,0,0,0-1.07,1.17,3.77,3.77,0,0,0-.43,1.87v6.08h-2.45V133.47h2.08l.21,2.06a3.58,3.58,0,0,1,3.62-2.29A2.86,2.86,0,0,1,367.61,133.47Z" transform="translate(-0.67 -3.99)" />
                    <path class="cls-7" d="M375.22,146.28a6.66,6.66,0,0,1-1.72,2.77,3.77,3.77,0,0,1-2.52.8,5.1,5.1,0,0,1-1.55-.21,3.1,3.1,0,0,1-1.15-.7l.71-1.88a2.31,2.31,0,0,0,1.88.82,1.83,1.83,0,0,0,1.15-.35,2.86,2.86,0,0,0,.84-1.3l.5-1.23-1.19-2.85-3.57-8.68h2.75l2.52,7.2.66,2.15.78-2.36,2.39-7h2.54Z" transform="translate(-0.67 -3.99)" />
                </g>
            </svg>
            <div class="preloader-text">
                <span>M</span>
                <span>&amp;</span>
                <span>E</span>
                <span>System</span>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!--
                <svg viewBox="0 0 100 100" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50 10L20 30V70L50 90L80 70V30L50 10Z" fill="white" />
                    <path d="M50 30L35 40V60L50 70L65 60V40L50 30Z" fill="#0079a5" />
                </svg>
    -->
                <img src="./assets/img/lblogo-white.svg"></img>
                <div class="logo-text">
                    <span>M</span><span>&</span><span>E</span> <span>System</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#components">Components</a></li>
                    <li class="nav-item"><a class="nav-link" href="#screenshots">Screenshots</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item">
                        <!-- Notification Bell -->
                        <div class="dropdown notification-dropdown">
                            <a href="#" class="nav-link notification-bell" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bell"></i>
                                <span class="notification-badge" id="notificationCount">0</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end notification-menu" aria-labelledby="notificationDropdown">
                                <div class="notification-header">
                                    <h6>Notifications</h6>
                                    <div>
                                        <small><a href="#" id="markAllRead">Mark all as read</a></small>
                                        <small><a href="#" id="markAllUnread" class="ms-2">Unmark all</a></small>
                                    </div>
                                </div>
                                <div class="notification-list" id="notificationList">
                                    <!-- Notifications will be loaded here via AJAX -->
                                    <div class="text-center py-3">
                                        <div class="spinner-border text-primary" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <?php if (is_logged_in() && ($_SESSION['is_admin'] ?? false)): ?>
                                    <div class="notification-footer">
                                        <a href="res/admin/index.php" class="btn btn-sm btn-primary w-100">View All</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <!-- Update navbar login button -->
                    <li class="nav-item">
                        <?php if (is_logged_in()): ?>
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-user me-1"></i> <?= htmlspecialchars($_SESSION['username'] ?? 'User') ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        <?php else: ?>
                            <a class="nav-link btn btn-primary btn-sm text-white ms-2"
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#loginModal">Login</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="animate__animated animate__fadeInDown">Lifebox Monitoring & Evaluation System</h1>
                    <p class="animate__animated animate__fadeInDown animate__delay-1s">Comprehensive data visualization and exploration platform for tracking surgical safety initiatives worldwide.</p>
                    <div class="hero-buttons animate__animated animate__fadeInDown animate__delay-2s">
                        <a href="app/index.htm" class="btn btn-primary btn-lg">Get Started</a>
                        <a href="#features" class="btn btn-outline-light btn-lg">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block animate__animated animate__fadeInRight animate__delay-1s">
                    <!--<img src="./assets/img/LifeBox-X.svg" class="img-fluid rounded shadow floating">-->
                    <img src="./assets/img/lifebox.svg" color="#038DA9" class=" img-fluid floating">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-title">
                <h2>Powerful Features</h2>
                <p>Our M&E System provides comprehensive tools for data collection, analysis, and visualization to support your surgical safety programs.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Interactive Dashboards</h3>
                        <p>Real-time data visualization with interactive charts, maps, and tables for instant insights into your programs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3>Data Management</h3>
                        <p>Robust data collection and management system with validation rules to ensure data quality and integrity.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <h3>DHIS2 Integration</h3>
                        <p>Seamless interoperability with DHIS2 for data exchange and harmonized reporting across platforms.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <h3>Alerts & Notifications</h3>
                        <p>Customizable alerts for data anomalies, reporting deadlines, and important program milestones.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-file-export"></i>
                        </div>
                        <h3>Report Builder</h3>
                        <p>Create custom reports with drag-and-drop functionality and export to multiple formats (PDF, Excel, etc.).</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Mobile Ready</h3>
                        <p>Fully responsive design works on any device, with offline capabilities for data collection in low-connectivity areas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- System Components Section -->
    <section class="components" id="components">
        <div class="container">
            <div class="section-title">
                <h2>System Components</h2>
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

    <!-- Screenshots Section -->
    <section class="screenshots" id="screenshots">
        <div class="container">
            <div class="section-title">
                <h2>System Screenshots</h2>
                <p>Explore the intuitive interface and powerful visualizations of our M&E System.</p>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Data Dashboard">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1415&q=80" alt="Analytics View">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1526628953301-3e589a6a8b74?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1406&q=80" alt="Report Builder">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="Training Tracker">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="Device Management">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="Surgical Case Tracking">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="About Lifebox" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 about-content">
                    <h2>About Lifebox M&E System</h2>
                    <p>The Lifebox Monitoring and Evaluation System is a comprehensive platform designed to track, analyze, and visualize data related to surgical safety initiatives worldwide. Our system provides real-time insights into program performance, helping organizations make data-driven decisions to improve patient outcomes.</p>
                    <p>Developed in collaboration with MERQ Consultancy, this system integrates seamlessly with existing health information systems while providing specialized tools for surgical safety monitoring.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fa-solid fa-monitor-waveform fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Real-time Data</h5>
                                    <small>Instant access to updated metrics</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fa-solid fa-globe fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Global Standards</h5>
                                    <small>Aligned with WHO guidelines</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fa-solid fa-face-sunglasses fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">User-Friendly</h5>
                                    <small>Intuitive interface for all users</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fa-solid fa-shield-check fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Secure</h5>
                                    <small>Enterprise-grade security</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Countdown Section -->
    <section class="countdown-section" id="launch">
        <div class="container">
            <div class="section-title text-white">
                <h2>New Features Coming Soon</h2>
                <p>We're continuously improving our platform. Check out what's coming in our next update!</p>
            </div>
            <div class="countdown">
                <div class="countdown-item">
                    <div class="countdown-number" id="days">00</div>
                    <div class="countdown-label">Days</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="hours">00</div>
                    <div class="countdown-label">Hours</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="minutes">00</div>
                    <div class="countdown-label">Minutes</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="seconds">00</div>
                    <div class="countdown-label">Seconds</div>
                </div>
            </div>
            <a href="#features" class="btn btn-light btn-lg mt-4"><i class="fa-solid fa-compass"></i> Explore Current Features</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <i class="fa-solid fa-message-middle fa-2x"></i>
                <h2>Contact Us</h2>
                <p>Have questions about our M&E System? Get in touch with our team.</p>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Location</h4>
                                <p>Lifebox Foundation, London, UK</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Email</h4>
                                <p>info@lifebox.org</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Phone</h4>
                                <p>+44 20 1234 5678</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Support Hours</h4>
                                <p>Monday - Friday: 9AM to 5PM GMT</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Subject">
                            <textarea class="form-control" placeholder="Your Message" rows="5" required></textarea>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="footer-logo">
                        <div style="display: flex; flex-direction: column; align-items: flex-start; justify-content: center; text-align: center;">
                            <img src="./assets/img/lblogo-white.svg" alt="Logo" style="height: 30px; margin-bottom: 5px;" class="mCS_img_loaded">
                            <div style="font-size: 17px; font-weight: bold; color: white;">
                                <span style="color: #ff6b35;">M</span>
                                <span style="color: white;">&amp;</span>
                                <span style="color: #ffd166;">E</span>
                                <span style="color: white;"> System</span>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3">Comprehensive Monitoring & Evaluation System for surgical safety initiatives worldwide.</p>
                    <div class="social-links mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#components">Components</a></li>
                            <li><a href="#screenshots">Screenshots</a></li>
                            <li><a href="#about">About</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="footer-links">
                        <h4>System Modules</h4>
                        <ul>
                            <li><a href="#">Data Visualizations</a></li>
                            <li><a href="#">Performance Tracking</a></li>
                            <li><a href="#">Training Trackers</a></li>
                            <li><a href="#">Device Distribution</a></li>
                            <li><a href="#">Patient Impact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="footer-links">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">User Guides</a></li>
                            <li><a href="#">API Documentation</a></li>
                            <li><a href="#">Release Notes</a></li>
                            <li><a href="#">Help Center</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>All Rights Reserved &copy; <span id="year"></span> <a href="https://lifebox.org" style="color: white;"><b>Lifebox</b></a> M&E System. | <b>Build V0.7</b> | Designed & Developed by <a href="https://merqconsultancy.org" style="color: white;"><b>MERQ Consultancy</b></a>.</p>
            </div>
        </div>
    </footer>

    <!-- login modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login to Lifebox M&E</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="loginUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="loginUsername" required>
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="loginPassword" required>
                        </div>
                        <div class="alert alert-danger d-none" id="loginError"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="loginSubmit">Login</button>
                </div>
            </div>
        </div>
    </div>

    <!-- NEW Notice Modal START-->

    <!-- Notice Modal -->
    <?php if (!empty($activeNotifications)): ?>
        <!-- Notice Modal (only shown when there are active notifications) -->
        <div class="modal fade" id="noticeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-notice">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><i class="fa-solid fa-hexagon-exclamation"></i> System Updates & Notices</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php foreach ($activeNotifications as $notification): ?>
                            <div class="alert alert-<?= htmlspecialchars($notification['notification_type']) ?>">
                                <?= $notification['content'] ?>
                                <?php if (!empty($notification['action_url'])): ?>
                                    <div class="mt-2">
                                        <a href="<?= htmlspecialchars($notification['action_url']) ?>" class="alert-link">
                                            <?= htmlspecialchars($notification['action_text'] ?? 'Click here') ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                        <a href="./app/login.php" class="btn btn-secondary"><i class="fa-solid fa-arrow-right-to-arc"></i> Login</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <?php if (is_logged_in() && ($_SESSION['is_admin'] ?? false)): ?>
                            <a href="res/admin/index.php" class="btn btn-primary">View All Notices</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#noticeModal').modal('show');
            });
        </script>
    <?php endif; ?>

    <?php if (!empty($activeNotifications)): ?>
        <script>
            $(document).ready(function() {
                $('#noticeModal').modal('show');
            });
        </script>
    <?php endif; ?>



    <!-- NEW Notice Modal END -->


    <!-- OLD Notice Modal 
    <div class="modal fade" id="noticeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-notice">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa-solid fa-hexagon-exclamation"></i> [TEST - DEVENV] System Updates & Notices</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        <h5><i class="fas fa-info-circle me-2"></i>Coming up in the New Latest Update (v1.0.7)</h5>
                        <p>We'll be deploying several enhancements to the M&E System:</p>
                        <ul>
                            <li>New DHIS2 integration features for seamless data exchange</li>
                            <li>Enhanced surgical case tracking with additional fields</li>
                            <li>Improved performance on mobile devices</li>
                            <li>Bug fixes and stability improvements</li>
                        </ul>
                    </div>

                    <div class="alert alert-warning">
                        <h5><i class="fas fa-exclamation-triangle me-2"></i> Scheduled Maintenance</h5>
                        <p>There will be a scheduled system maintenance on <strong>October 15, 2025 from 2:00 AM to 4:00 AM GMT</strong>. The system may be unavailable during this period.</p>
                    </div>

                    <div class="alert alert-primary">
                        <h5><i class="fas fa-bullhorn me-2"></i> Training Opportunity</h5>
                        <p>We're offering a free online training session on advanced reporting features on <strong>October 20, 2025</strong>. <a href="#" class="alert-link">Click here to register</a>.</p>
                    </div>
                    <a href="./app/login.php" class="btn btn btn-secondary"><i class="fa-solid fa-arrow-right-to-arc"></i> Login</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">View All Notices</button>
                </div>
            </div>
        </div>
    </div>
                -->

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" style="display:none;position:fixed;bottom:30px;right:30px;z-index:9999;" class="btn btn-primary rounded-circle">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Cookie Consent -->
    <div class="cookie-consent" id="cookieConsent">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <p>This website uses cookies to ensure you get the best experience on our website. We use cookies to remember your preferences, analyze traffic, and personalize content. By continuing to use our site, you accept our use of cookies.</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <button class="btn btn-primary btn-sm" id="acceptCookies">Accept</button>
                    <button class="btn btn-outline-light btn-sm" id="declineCookies">Decline</button>
                    <a href="#" class="btn btn-link btn-sm text-white">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./assets/js/scripts.js"></script>
    <script>
        // Notification Timeout
        document.addEventListener('DOMContentLoaded', function() {
            // Hide preloader when page is fully loaded
            window.addEventListener('load', function() {
                setTimeout(function() {
                    var preloader = document.getElementById('preloader');
                    if (preloader) {
                        preloader.style.opacity = '0';
                        setTimeout(function() {
                            preloader.style.display = 'none';
                        }, 500);
                    }
                }, 500); // Adjust timeout if needed
            });

            // Add this to handle cases where load event doesn't fire
            setTimeout(function() {
                var preloader = document.getElementById('preloader');
                if (preloader) {
                    preloader.style.opacity = '0';
                    setTimeout(function() {
                        preloader.style.display = 'none';
                    }, 500);
                }
            }, 3000); // Fallback timeout after 3 seconds
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Load notifications when bell is clicked
            const notificationBell = document.getElementById('notificationDropdown');
            const notificationList = document.getElementById('notificationList');
            const notificationCount = document.getElementById('notificationCount');

            // Function to handle authentication errors
            function handleAuthError() {
                notificationList.innerHTML = `
            <div class="text-center py-3">
                <p>Please login to view notifications</p>
                <a href="app/index.htm" class="btn btn-sm btn-primary">Login</a>
            </div>
        `;
                notificationCount.textContent = '0';
                notificationCount.classList.remove('pulse');
            }

            // Time ago helper function
            function getTimeAgo(dateString) {
                const date = new Date(dateString);
                const now = new Date();
                const seconds = Math.floor((now - date) / 1000);

                if (seconds < 60) return 'Just now';
                if (seconds < 3600) return `${Math.floor(seconds / 60)} minutes ago`;
                if (seconds < 86400) return `${Math.floor(seconds / 3600)} hours ago`;
                return `${Math.floor(seconds / 86400)} days ago`;
            }

            // Function to mark notification as read
            function markAsRead(notificationId, element) {
                fetch('res/notifications/mark_read.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            notification_id: notificationId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            element.classList.remove('unread');
                            element.classList.add('read');

                            // Add unmark button
                            const unmarkBtn = document.createElement('button');
                            unmarkBtn.className = 'btn btn-sm btn-outline-secondary btn-unmark';
                            unmarkBtn.innerHTML = '<i class="fas fa-undo me-1"></i> Unmark';
                            unmarkBtn.onclick = (e) => {
                                e.stopPropagation();
                                markAsUnread(notificationId, element);
                            };

                            // Create actions container if it doesn't exist
                            let actionsContainer = element.querySelector('.notification-actions');
                            if (!actionsContainer) {
                                actionsContainer = document.createElement('div');
                                actionsContainer.className = 'notification-actions';
                                element.querySelector('.notification-time').after(actionsContainer);
                            }

                            actionsContainer.innerHTML = '';
                            actionsContainer.appendChild(unmarkBtn);

                            // Update unread count
                            const count = parseInt(notificationCount.textContent) - 1;
                            notificationCount.textContent = count;
                            if (count === 0) {
                                notificationCount.classList.remove('pulse');
                            }
                        }
                    });
            }

            // Function to mark notification as unread
            function markAsUnread(notificationId, element) {
                fetch('res/notifications/mark_unread.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            notification_id: notificationId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            element.classList.remove('read');
                            element.classList.add('unread');

                            // Remove unmark button
                            const actionsContainer = element.querySelector('.notification-actions');
                            if (actionsContainer) {
                                actionsContainer.innerHTML = '';
                            }

                            // Update unread count
                            const count = parseInt(notificationCount.textContent) + 1;
                            notificationCount.textContent = count;
                            notificationCount.classList.add('pulse');

                            // Re-add click handler
                            element.addEventListener('click', function() {
                                markAsRead(notificationId, element);
                            });
                        }
                    });
            }

            // Function to load notifications
            function loadNotifications() {
                fetch('res/notifications/get_active.php')
                    .then(response => {
                        if (response.status === 401) {
                            handleAuthError();
                            throw new Error('Unauthorized');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.error) {
                            throw new Error(data.error);
                        }

                        if (data.length > 0) {
                            let html = '';
                            let unreadCount = 0;

                            data.forEach(notification => {
                                const timeAgo = getTimeAgo(notification.created_at);
                                const isUnread = !notification.is_read;
                                if (isUnread) unreadCount++;

                                html += `
                            <div class="notification-item ${isUnread ? 'unread' : 'read'}" 
                                 data-notification-id="${notification.id}">
                                <div class="notification-content">${notification.content}</div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="notification-time">${timeAgo}</div>
                                    <div class="notification-actions"></div>
                                </div>
                            </div>
                        `;
                            });

                            notificationList.innerHTML = html;
                            notificationCount.textContent = unreadCount;

                            // Add click handler to mark as read when clicked on unread items
                            document.querySelectorAll('.notification-item.unread').forEach(item => {
                                item.addEventListener('click', function() {
                                    const notificationId = this.getAttribute('data-notification-id');
                                    markAsRead(notificationId, this);
                                });
                            });

                            // Add unmark buttons to read notifications
                            document.querySelectorAll('.notification-item.read').forEach(item => {
                                const notificationId = item.getAttribute('data-notification-id');
                                const unmarkBtn = document.createElement('button');
                                unmarkBtn.className = 'btn btn-sm btn-outline-secondary btn-unmark';
                                unmarkBtn.innerHTML = '<i class="fas fa-undo me-1"></i> Unmark';
                                unmarkBtn.onclick = (e) => {
                                    e.stopPropagation();
                                    markAsUnread(notificationId, item);
                                };

                                const actionsContainer = item.querySelector('.notification-actions');
                                actionsContainer.appendChild(unmarkBtn);
                            });

                            // Add pulse animation if there are unread notifications
                            if (unreadCount > 0) {
                                notificationCount.classList.add('pulse');
                            } else {
                                notificationCount.classList.remove('pulse');
                            }
                        } else {
                            notificationList.innerHTML = '<div class="text-center py-3 text-muted">No new notifications</div>';
                            notificationCount.textContent = '0';
                            notificationCount.classList.remove('pulse');
                        }
                    })
                    .catch(error => {
                        console.error('Error loading notifications:', error);
                        if (error.message !== 'Unauthorized') {
                            notificationList.innerHTML = '<div class="text-center py-3 text-danger">Error loading notifications</div>';
                        }
                    });
            }

            // Load notifications when bell is clicked
            notificationBell.addEventListener('shown.bs.dropdown', loadNotifications);

            // Mark all as read
            document.getElementById('markAllRead').addEventListener('click', function(e) {
                e.preventDefault();
                fetch('res/notifications/mark_read.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            mark_all: true
                        })
                    })
                    .then(response => {
                        if (response.ok) {
                            loadNotifications();
                            notificationCount.classList.remove('pulse');
                        }
                    });
            });

            // Mark all as unread
            document.getElementById('markAllUnread').addEventListener('click', function(e) {
                e.preventDefault();
                fetch('res/notifications/mark_unread.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            mark_all: true
                        })
                    })
                    .then(response => {
                        if (response.ok) {
                            loadNotifications();
                            notificationCount.classList.add('pulse');
                        }
                    });
            });

            // Initialize with count (lightweight)
            fetch('res/notifications/get_count.php')
                .then(response => response.json())
                .then(data => {
                    if (data.count > 0) {
                        notificationCount.textContent = data.count;
                        notificationCount.classList.add('pulse');
                    }
                });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Login form submission
            $('#loginSubmit').click(function() {
                const username = $('#loginUsername').val();
                const password = $('#loginPassword').val();

                // Clear previous errors
                $('#loginError').addClass('d-none').text('');

                // Basic validation
                if (!username || !password) {
                    $('#loginError').text('Please enter both username and password').removeClass('d-none');
                    return;
                }

                $.ajax({
                    type: 'POST',
                    url: 'login_handler.php',
                    data: {
                        username: username,
                        password: password
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            // Close modal and reload page
                            $('#loginModal').modal('hide');
                            location.reload();
                        } else {
                            $('#loginError').text(response.error || 'Login failed').removeClass('d-none');
                        }
                    },
                    error: function(xhr) {
                        let errorMsg = 'Server error';
                        try {
                            const res = JSON.parse(xhr.responseText);
                            if (res.error) errorMsg = res.error;
                        } catch (e) {}
                        $('#loginError').text(errorMsg).removeClass('d-none');
                    }
                });
            });
        });
    </script>
</body>

</html>