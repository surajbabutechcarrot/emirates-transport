<?php 
$path = "root";
include('../includes/header-ar.php');
?>
<main class="home-page">
    <!-- Banner section start -->
    <section class="banner">
        <video width="" height="" autoplay muted loop>
            <source src="<?php echo $path; ?>assets/images/banner.mp4" type="video/mp4">
            </source>

        </video>
        <div class="container h-100">
            <div class="row h-100">
                <article class="col-lg-12 h-100 d-flex align-items-center justify-content-center">
                    <div class="text text-center text-white">
                        <img class="round" src="<?php echo $path; ?>assets/images/round.svg" alt="">
                        <div class="story">
                            <div class="content m-auto">
                                <h6>مرحباً بكم في مواصلات الإمارات</h6>
                                <h1 class="mb-5">نحن رحلتك</h1>
                                <a class="play mt-5" href="" data-toggle="modal" data-target=".bd-example-modal-lg"
                                    href=""> <svg id="Layer_2" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 63.46 63.46">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #fff;
                                                }
                                            </style>
                                        </defs>
                                        <g id="Layer_2-2" data-name="Layer_2">
                                            <g>
                                                <path class="cls-1"
                                                    d="M63.46,31.74c0,17.56-14.24,31.72-31.89,31.72C14.16,63.45,0,49.15,0,31.6,0,14.16,14.29-.01,31.87,0c17.39.01,31.59,14.28,31.59,31.74ZM31.76,1.92c-16.42,0-29.78,13.33-29.84,29.66-.06,16.55,13.48,30.04,30.03,29.97,16.22-.07,29.59-13.45,29.59-29.77,0-16.49-13.33-29.86-29.78-29.86Z" />
                                                <path class="cls-1"
                                                    d="M12.59,16.73c.5.39.97.76,1.47,1.15-3.69,4.84-5.26,10.27-4.62,16.29.51,4.84,2.48,9.06,5.74,12.68,6.21,6.86,17.02,9.81,26.94,4.78.28.54.57,1.08.85,1.62-7.69,4.34-20.46,4.39-29.17-5.08-8.7-9.46-8.02-23.1-1.21-31.44Z" />
                                                <path class="cls-1"
                                                    d="M24.51,43.9v-24.34c7.03,4.06,14.01,8.09,21.08,12.17-7.05,4.07-14.03,8.1-21.08,12.17Z" />
                                                <path class="cls-1"
                                                    d="M31.74,9.25v-1.9c8.23.25,14.87,3.55,19.74,10.19,5.99,8.18,5.52,18.32,2.09,24.86-.55-.27-1.09-.54-1.63-.8,3.28-7.49,3.12-14.8-1.23-21.74-4.34-6.91-10.81-10.29-18.96-10.61Z" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- Banner section end -->
    <!-- About us section start -->
    <section class="std-space about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ps-md-0 ps-lg-5 d-flex align-items-center">
                    <picture>
                        <source srcset="<?php echo $path; ?>assets/images/about.png">
                        <source srcset="<?php echo $path; ?>assets/images/about.png">
                        <img class="w-100" src="<?php echo $path; ?>assets/images/about.png">
                    </picture>
                </div>
                <article class="col-lg-6 pt-md-5 pt-lg-0 pt-5 d-flex align-items-center">
                    <div class="text">
                        <h6>معلومات عنا</h6>
                        <h2 class="ttl-40 fw-bold py-3 text-uppercase">بوابتك إلى حلول النقل الفعالة

                        </h2>
                        <p>تقف شركة الإمارات العامة للنقل والخدمات، المعروفة باسم مواصلات الإمارات
                            مثل
                            شركة رائدة في قطاع النقل والخدمات، وتفتخر بإرث مثير للإعجاب يبلغ 41 عامًا
                            سنين
                            من التميز. منذ إنشائها في عام 1981 كمؤسسة من قبل الحكومة الاتحادية،
                            لقد تطورت مواصلات الإمارات لتصبح مؤسسة متعددة الأوجه تركت بصمة دائمة
                            على
                            الإمارات العربية المتحدة والمنطقة ككل.
                        </p>
                        <a href="" class="btn btn-primary py-3 px-4 mt-3">استكشف خدماتنا
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- About us section end -->
    <!-- Service section start -->
    <section class="std-space services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h6>القيادة المتميزة في كل ميل
                    </h6>
                    <h2 class="ttl-40 fw-bold py-3 text-uppercase pb-3">خدماتنا الرئيسية
                    </h2>
                </div>
                <div class="col-lg-6">
                    <div class="w-100 box my-3">
                        <div class="left p-4 d-flex align-items-center">
                            <div class="text">
                                <img class="icon mb-4" src="<?php echo $path; ?>assets/images/school-transport.svg">
                                <h4 class="fw-bold mb-0">مدرسة
                                    مواصلات
                                </h4>
                            </div>
                        </div>
                        <div class="right">
                            <img src="<?php echo $path; ?>assets/images/bus.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="w-100 box my-3">
                        <div class="left p-4 d-flex align-items-center">
                            <div class="text">
                                <img class="icon mb-4" src="<?php echo $path; ?>assets/images/maintanance.svg">
                                <h4 class="fw-bold mb-0">صيانة،
                                    بصلح &
                                    العمليات</h4>
                            </div>
                        </div>
                        <div class="right">
                            <img src="<?php echo $path; ?>assets/images/maintanance.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="w-100 box my-3">
                        <div class="left p-4 d-flex align-items-center">
                            <div class="text">
                                <img class="icon mb-4"
                                    src="<?php echo $path; ?>assets/images/transport-and-leasing.svg">
                                <h4 class="fw-bold mb-0">ينقل
                                    والتأجير
                                </h4>
                            </div>
                        </div>
                        <div class="right">
                            <img src="<?php echo $path; ?>assets/images/transport-and-leasing.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="w-100 box my-3">
                        <div class="left p-4 d-flex align-items-center">
                            <div class="text">
                                <img class="icon mb-4" src="<?php echo $path; ?>assets/images/ventures.svg">
                                <h4 class="fw-bold mb-0">مشاريع جديدة
                                </h4>
                            </div>
                        </div>
                        <div class="right">
                            <img src="<?php echo $path; ?>assets/images/ventures.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="" class="btn btn-primary py-3 px-4 mt-5">عرض المزيد >>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Service section end -->
    <!-- Fleet numbers section start -->
    <section class="std-space feet">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center text-white">
                    <p>اكتشف رحلاتنا التمكينية</p>
                    <h3 class="fw-bold">أسطولنا بالأرقام</h3>
                </div>
                <div class="col text-white text-center py-5">
                    <h2 class="fw-bold">14,000+</h2>
                    <h5 class="text-uppercase mb-0">سيارات</h5>
                </div>
                <div class="col text-white text-center py-5">
                    <h2 class="fw-bold">12,000+</h2>
                    <h5 class="text-uppercase mb-0">الحافلات</h5>
                </div>
                <div class="col text-white text-center py-5">
                    <h2 class="fw-bold">700+</h2>
                    <h5 class="text-uppercase mb-0">الشاحنات
                    </h5>
                </div>
                <div class="col text-white text-center py-5">
                    <h2 class="fw-bold">50+</h2>
                    <h5 class="text-uppercase mb-0">الدراجات الإلكترونية
                    </h5>
                </div>
                <div class="col text-white text-center py-5">
                    <h2 class="fw-bold">820 +</h2>
                    <h5 class="text-uppercase mb-0">عملاء سعداء</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Fleet numbers section end -->
    <!-- News section start -->
    <section class="std-space news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h6>اكتشف رحلاتنا التمكينية</h6>
                    <h2 class="ttl-40 fw-bold py-3 text-uppercase pb-3">اكتشف رحلاتنا التمكينية
                    </h2>
                </div>
                <div class="col-lg-6">
                    <div class="box d-flex my-3">
                        <div class="left">
                            <img class="w-100 h-100" src="<?php echo $path; ?>assets/images/news-1.png">
                        </div>
                        <div class="right">
                            <h6>الخميس 29 أغسطس 2024 | أخبار
                            </h6>
                            <h5 class="fw-bold">"لا يُنسى الأطفال في الحافلات": كيف تكثف شركة النقل في الإمارات العربية
                                المتحدة أعمالها؟
                                سلامة الطالب

                            </h5>
                            <a href="" class="py-2 px-3 mt-3 text-end d-block">عرض المزيد >>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box d-flex my-3">
                        <div class="left">
                            <img class="w-100 h-100" src="<?php echo $path; ?>assets/images/news-2.png">
                        </div>
                        <div class="right">
                            <h6>13 يوليو 2024 | أخبار
                            </h6>
                            <h5 class="fw-bold">وزارة الطاقة والبنية التحتية بدولة الإمارات العربية المتحدة، مواصلات
                                الإمارات
                                دعم التنقل الأخضر
                            </h5>
                            <a href="" class="py-2 px-3 mt-3 text-end d-block">عرض المزيد >>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box d-flex my-3">
                        <div class="left">
                            <img class="w-100 h-100" src="<?php echo $path; ?>assets/images/news-3.png">
                        </div>
                        <div class="right">
                            <h6>26 أبريل 2024 | أخبار
                            </h6>
                            <h5 class="fw-bold">وزارة الطاقة والبنية التحتية، مواصلات الإمارات لدعم
                                التنقل الأخضر

                            </h5>
                            <a href="" class="py-2 px-3 mt-3 text-end d-block">عرض المزيد >>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box d-flex my-3">
                        <div class="left">
                            <img class="w-100 h-100" src="<?php echo $path; ?>assets/images/news-4.png">
                        </div>
                        <div class="right">
                            <h6>25 أغسطس 2024 | أخبار
                            </h6>
                            <h5 class="fw-bold">تستعد مدارس الإمارات العربية المتحدة لحركة المرور يوم الاثنين حيث تخطط
                                الشرطة لإرسال المزيد
                                وحدات الدورية

                            </h5>
                            <a href="" class="py-2 px-3 mt-3 text-end d-block">عرض المزيد >>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="" class="btn btn-primary py-3 px-4 mt-5">عرض المزيد >></a>
                </div>
            </div>
        </div>
    </section>
    <!-- News section start -->
    <!-- Slider section start -->
    <section class="app-slider std-space pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="w-100 slider-app-ar  ">
                        <div class="row">
                            <div class="col-lg-7">
                                <img src="<?php echo $path; ?>assets/images/mobile-app.png" alt="">
                            </div>
                            <div class="col-lg-5 d-flex align-items-center">
                                <div class="text">
                                    <h4>تطبيقات ET</h4>
                                    <h1 class="text-primary fw-bold">حافالتي</h1>
                                    <p>مواصلات الإمارات، بالتعاون مع مؤسسة مدارس الإمارات،
                                        أطلقت تطبيقًا ذكيًا مطلع عام 2023 لأولياء أمور طلاب المدارس الحكومية.
                                    </p>
                                    <a href="" class="btn btn-primary mt-3"><svg id="Layer_2"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.78 24.3">
                                            <defs>
                                            </defs>
                                            <g id="Layer_2-2" data-name="Layer_2">
                                                <g>
                                                    <path class="cls-1"
                                                        d="M13.75,3.51C14.88,2.02,14.78,0,14.78,0c0,0-1.84-.18-3.56,1.8-1.56,1.8-1.3,3.7-1.3,3.7,0,0,1.78.7,3.82-1.99Z" />
                                                    <path class="cls-1"
                                                        d="M16.53,13c-.07-2.91,2.4-4.56,2.57-4.73s-1.61-2.16-3.77-2.35c-2.62-.24-4,1-5.43,1.06-1.73.07-2.23-1.44-5.26-.82C2.64,6.57-.33,8.99.03,13.89c.31,4.23,2.85,9.43,5.69,10.35,1.1.36,3.48-1.04,4.64-1.03,1.09,0,3.83,1.47,4.8.98,3.29-1.66,4.61-6.34,4.61-6.34,0,0-3.15-1.06-3.24-4.85Z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                    <a href="" class="btn btn-primary mt-3">

                                        <svg id="Layer_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.3 21.7">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #d5d8db;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="Layer_2-2" data-name="Layer_2">
                                                <g>
                                                    <path class="cls-1"
                                                        d="M.19,1.11c-.12.26-.19.55-.19.85v17.78c0,.17.02.35.07.51l8.72-9.59L.19,1.11Z" />
                                                    <path class="cls-1"
                                                        d="M12.96,6.06L2.93.26C2.13-.2,1.26,0,.7.46l8.63,9.6,3.63-4Z" />
                                                    <path class="cls-1"
                                                        d="M9.33,11.27L.47,21.01c.55.63,1.54.95,2.46.42l10.23-5.91-3.55-3.95-.28-.31Z" />
                                                    <path class="cls-1"
                                                        d="M18.33,9.16l-4.64-2.68-3.81,4.19h0l.08.08,3.92,4.36,4.45-2.57c.61-.35.98-.98.98-1.69s-.36-1.34-.98-1.69Z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <img src="<?php echo $path; ?>assets/images/mobile-app.png" alt="">
                            </div>
                            <div class="col-lg-5 d-flex align-items-center">
                                <div class="text">
                                    <h4>تطبيقات ET</h4>
                                    <h1 class="text-primary fw-bold">حافالتي</h1>
                                    <p>مواصلات الإمارات، بالتعاون مع مؤسسة مدارس الإمارات،
                                        أطلقت تطبيقًا ذكيًا مطلع عام 2023 لأولياء أمور طلاب المدارس الحكومية.
                                    </p>
                                    <a href="" class="btn btn-primary mt-3"><svg id="Layer_2"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.78 24.3">
                                            <defs>
                                            </defs>
                                            <g id="Layer_2-2" data-name="Layer_2">
                                                <g>
                                                    <path class="cls-1"
                                                        d="M13.75,3.51C14.88,2.02,14.78,0,14.78,0c0,0-1.84-.18-3.56,1.8-1.56,1.8-1.3,3.7-1.3,3.7,0,0,1.78.7,3.82-1.99Z" />
                                                    <path class="cls-1"
                                                        d="M16.53,13c-.07-2.91,2.4-4.56,2.57-4.73s-1.61-2.16-3.77-2.35c-2.62-.24-4,1-5.43,1.06-1.73.07-2.23-1.44-5.26-.82C2.64,6.57-.33,8.99.03,13.89c.31,4.23,2.85,9.43,5.69,10.35,1.1.36,3.48-1.04,4.64-1.03,1.09,0,3.83,1.47,4.8.98,3.29-1.66,4.61-6.34,4.61-6.34,0,0-3.15-1.06-3.24-4.85Z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                    <a href="" class="btn btn-primary mt-3">

                                        <svg id="Layer_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.3 21.7">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #d5d8db;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="Layer_2-2" data-name="Layer_2">
                                                <g>
                                                    <path class="cls-1"
                                                        d="M.19,1.11c-.12.26-.19.55-.19.85v17.78c0,.17.02.35.07.51l8.72-9.59L.19,1.11Z" />
                                                    <path class="cls-1"
                                                        d="M12.96,6.06L2.93.26C2.13-.2,1.26,0,.7.46l8.63,9.6,3.63-4Z" />
                                                    <path class="cls-1"
                                                        d="M9.33,11.27L.47,21.01c.55.63,1.54.95,2.46.42l10.23-5.91-3.55-3.95-.28-.31Z" />
                                                    <path class="cls-1"
                                                        d="M18.33,9.16l-4.64-2.68-3.81,4.19h0l.08.08,3.92,4.36,4.45-2.57c.61-.35.98-.98.98-1.69s-.36-1.34-.98-1.69Z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <img src="<?php echo $path; ?>assets/images/mobile-app.png" alt="">
                            </div>
                            <div class="col-lg-5 d-flex align-items-center">
                                <div class="text">
                                    <h4>تطبيقات ET</h4>
                                    <h1 class="text-primary fw-bold">حافالتي</h1>
                                    <p>مواصلات الإمارات، بالتعاون مع مؤسسة مدارس الإمارات،
                                        أطلقت تطبيقًا ذكيًا مطلع عام 2023 لأولياء أمور طلاب المدارس الحكومية.
                                    </p>
                                    <a href="" class="btn btn-primary mt-3"><svg id="Layer_2"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.78 24.3">
                                            <defs>
                                            </defs>
                                            <g id="Layer_2-2" data-name="Layer_2">
                                                <g>
                                                    <path class="cls-1"
                                                        d="M13.75,3.51C14.88,2.02,14.78,0,14.78,0c0,0-1.84-.18-3.56,1.8-1.56,1.8-1.3,3.7-1.3,3.7,0,0,1.78.7,3.82-1.99Z" />
                                                    <path class="cls-1"
                                                        d="M16.53,13c-.07-2.91,2.4-4.56,2.57-4.73s-1.61-2.16-3.77-2.35c-2.62-.24-4,1-5.43,1.06-1.73.07-2.23-1.44-5.26-.82C2.64,6.57-.33,8.99.03,13.89c.31,4.23,2.85,9.43,5.69,10.35,1.1.36,3.48-1.04,4.64-1.03,1.09,0,3.83,1.47,4.8.98,3.29-1.66,4.61-6.34,4.61-6.34,0,0-3.15-1.06-3.24-4.85Z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                    <a href="" class="btn btn-primary mt-3">

                                        <svg id="Layer_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.3 21.7">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #d5d8db;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="Layer_2-2" data-name="Layer_2">
                                                <g>
                                                    <path class="cls-1"
                                                        d="M.19,1.11c-.12.26-.19.55-.19.85v17.78c0,.17.02.35.07.51l8.72-9.59L.19,1.11Z" />
                                                    <path class="cls-1"
                                                        d="M12.96,6.06L2.93.26C2.13-.2,1.26,0,.7.46l8.63,9.6,3.63-4Z" />
                                                    <path class="cls-1"
                                                        d="M9.33,11.27L.47,21.01c.55.63,1.54.95,2.46.42l10.23-5.91-3.55-3.95-.28-.31Z" />
                                                    <path class="cls-1"
                                                        d="M18.33,9.16l-4.64-2.68-3.81,4.19h0l.08.08,3.92,4.36,4.45-2.57c.61-.35.98-.98.98-1.69s-.36-1.34-.98-1.69Z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider section start -->
</main>
<?php 
$path = "root";
include('../includes/footer-ar.php');
?>
<!-- pagescript here... -->
<!-- <div class="modal video-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-content">
            <video width="" height="" autoplay muted loop>
                <source src="<?php echo $path; ?>assets/images/banner.mp4" type="video/mp4">
                </source>
               
            </video>
        </div>
    </div>
</div> -->
<script></script>
<!-- End pagescript here... -->
</body>

</html>