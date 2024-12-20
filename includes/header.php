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
                    <img class="" src="<?php echo $path; ?>assets/images/footer-logo.svg" alt="Emirates Transport">
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