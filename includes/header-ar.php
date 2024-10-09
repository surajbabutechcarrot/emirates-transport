<?php if($path == "root"): $path = "../"; else: $path = "../../"; endif; ?>
<!doctype html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/main.min.css">
    <title>مواصلات الإمارات <?php if($page_title) echo " - ".$page_title; ?></title>
    <meta name="robots" content="noindex, nofollow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <link rel="icon" href="<?php echo $path; ?>assets/images/favicon.png" sizes="32x32">
    <link rel="icon" href="<?php echo $path; ?>assets/images/favicon.png" sizes="192x192">
    <link rel="apple-touch-icon" href="<?php echo $path; ?>assets/images/favicon.png">
</head>

<body>
    <header class="main-header">
        <div class="container h-100 d-flx flx-vcenter">
            <div class="logo">
                <a href="<?php echo $path; ?>ar/">
                    <img src="<?php echo $path; ?>assets/images/logo.svg" alt="Emirates Transport">
                </a>
            </div>
            <div class="header-right mr-auto d-flx flx-vcenter">
                <nav class="main-nav">
                    <ul>
                        <li><a class="active" href="<?php echo $path; ?>ar/">بيت</a></li>
                        <li><a href="<?php echo $path; ?>about/ar/">معلومات عنا</a></li>
                        <li><a href="<?php echo $path; ?>services/ar/">خدمات</a></li>
                        <li><a href="<?php echo $path; ?>media/ar/">وسائط</a></li>
                        <li><a href="<?php echo $path; ?>contact/ar/">اتصل بنا</a></li>
                        <li><a href="<?php echo $path; ?>gitex/ar/">جيتكس</a></li>
                        <li><a href="<?php echo $path; ?>">ENGLISH</a></li>
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