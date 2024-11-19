<?php if($path == "root"): $path = "../"; else: $path = "../../"; endif; ?>
<!doctype html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/main.min.css">
    <title>مواصلات الإمارات <?php if($page_title) echo " - ".$page_title; ?></title>
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/maintenance.css">
    <meta name="robots" content="noindex, nofollow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <link rel="icon" href="<?php echo $path; ?>assets/images/favicon.png" sizes="32x32">
    <link rel="icon" href="<?php echo $path; ?>assets/images/favicon.png" sizes="192x192">
    <link rel="apple-touch-icon" href="<?php echo $path; ?>assets/images/favicon.png">

    <meta name="description" content="شركة الإمارات العامة للنقل والخدمات، المعروفة عمومًا باسم مواصلات الإمارات، تُعتبر رائدة في صناعة النقل والخدمات، حيث تمتلك إرثًا مميزًا يمتد لـ 43 عامًا من التميز. ">
    <?php $ogImageURL = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/assets/images/features-image.png'; ?>
    <meta property="og:image" content="<?php echo $ogImageURL; ?>">
    <style>
        .brand-tab .tab-content .tab-pane{
            height: auto !important;
        }
        .tabcounter div:last-child{
            padding-right:15px!important;
        }
    </style>
</head>

<body>


    <header class="main-header">
        <div class="container h-100 d-flx flx-vcenter">
            <div class="logo">
                <a href="<?php echo $path; ?>ar/">
                    <img src="<?php echo $path; ?>assets/images/footer-logo.svg" alt="Emirates Transport">
                </a>
            </div>
            <div class="header-right mr-auto d-flx flx-vcenter">
                <nav class="main-nav">
                    <ul>
                        <li><a class="active" href="<?php echo $path; ?>ar/">الرئيسية</a></li>
                        <li><a href="<?php echo $path; ?>about/ar/">عن مواصلات الإمارات</a></li>
                        <li class="submenu"><a href="#">خدمات</a>
                        <ul>
                            <li><a href="<?php echo $path; ?>transport-and-leasing/ar/">النقل والتأجير</a></li>
                            <li><a href="<?php echo $path; ?>school-transport/ar/">النقل المدرسي</a></li>
                            <li><a href="<?php echo $path; ?>maintanance/ar/">الخدمات الفنية</a></li>
                            <li><a href="<?php echo $path; ?>new-ventures/ar/">مشاريع جديدة</a></li>
                        </ul>
                    </li>
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