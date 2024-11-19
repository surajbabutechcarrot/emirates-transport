<?php if($path == "root"): $path = ""; else: $path = "../"; endif; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/main.min.css">
    <title>Emirates Transport <?php if($page_title) echo " - ".$page_title; ?></title>
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/maintenance.css">
    <meta name="robots" content="noindex, nofollow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <link rel="icon" href="<?php echo $path; ?>assets/images/favicon.png" sizes="32x32">
    <link rel="icon" href="<?php echo $path; ?>assets/images/favicon.png" sizes="192x192">
    <link rel="apple-touch-icon" href="<?php echo $path; ?>assets/images/favicon.png">
    <style>
        .brand-tab .tab-content .tab-pane {
            height: auto !important;
        }
    </style>

</head>

<body>
    <header class="main-header">
        <div class="container h-100 d-flx flx-vcenter">
            <div class="logo">
                <a href="<?php echo $path; ?>">
                    <img class="logo-text" src="<?php echo $path; ?>assets/images/logo.svg" alt="Emirates Transport">

                    <svg id="Layer_2" class="round-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78.24 78.99">
                        <defs>
                            <style>
                                header .cls-1 {
                                    fill: #cc3529 !important;
                                }

                                .cls-1,
                                .cls-2,
                                .cls-3 {
                                    fill-rule: evenodd;
                                }

                                .cls-2 {
                                    fill: #188044;
                                }

                                .cls-3 {
                                    fill: #1b1b1a;
                                }
                            </style>
                        </defs>
                        <g id="Layer_2-2" data-name="Layer_2">
                            <g>
                                <path class="cls-2"
                                    d="M73.12,17.51c10.19,17.08,4.7,39.25-12.27,49.51-2.95,1.78-6.03,3.08-9.18,3.93l.04.79,2.16,7.25-15.51-8.96,8.36-15,2.24,7.52.21.7c2.76-.84,5.46-2.04,8.05-3.6,14.73-8.91,20.83-26.78,15.54-42.53" />
                                <path class="cls-1"
                                    d="M41.35,72.28c-9.25-2.44-16.74-7.8-21.86-16.38-4.9-8.21-6.17-17.59-4.31-26.26l.53.42,8.07,2.44-9.73-14.9L0,25.29l7.07,2.14.52.1c-2.16,8.91-.97,18.65,4.09,27.13,6.49,10.89,17.7,17.11,29.43,17.52" />
                                <path class="cls-3"
                                    d="M11.19,18.67c2.35-2.66,5.14-5.01,8.33-6.94,13.6-8.22,30.42-6.32,41.84,3.53l-.5.38-6.3,6.14,18.01-1.05-.16-16.35-5.22,5.09-.15.38C55.64-.99,38.05-3.37,23.95,5.15c-5.65,3.42-10.03,8.16-12.98,13.59l-.17.3" />
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="header-right ml-auto d-flx flx-vcenter">
                <nav class="main-nav">
                    <ul>
                        <li><a class="active" href="<?php echo $path; ?>">Home</a></li>
                        <li><a href="<?php echo $path; ?>about/">About Us</a></li>
                        <li class="submenu"><a href="#">Services</a>
                            <ul>
                                <li><a href="<?php echo $path; ?>transport-and-leasing/">Transport and Leasing</a></li>
                                <li><a href="<?php echo $path; ?>school-transport/">School Transportation</a></li>
                                <li><a href="<?php echo $path; ?>maintanance/">MRO</a></li>
                                <li><a href="<?php echo $path; ?>new-ventures/">New Ventures</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $path; ?>media/">Media</a></li>
                        <li><a href="<?php echo $path; ?>contact/">Contact Us</a></li>
                        <li><a href="<?php echo $path; ?>gitex/">Gitex</a></li>
                        <li><a href="<?php echo $path; ?>ar/">العربية</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="mob-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="overlay"></div>
    </header>