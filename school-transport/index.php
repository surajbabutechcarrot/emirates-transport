<?php 
$page_title = "About";
include('../includes/header.php');
?>
<?php include('includes/header.php');?>
<main class="inner-page">
    <!-- Banner start -->
    <section class="inner-banner school contact pt-0 d-flex align-items-center">
        <div class="container-fluid">
            <div class="banner-content text-center text-uppercase">
                <h1 class="fw-bold text-white">School Transportation</h1>
                <img class="bg" src="<?php echo $path; ?>assets/images/school-banner-bg.png" alt="About Us Banner">
            </div>
        </div>
    </section>
    <!-- Banner end -->
    <!-- Service number section start -->
    <section class="std-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="text-gray">43 years of excellence</p>
                    <h2 class="ttl-40 fw-bold text-black text-uppercase pb-4">Our services in numbers</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5 number-sec">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-6 p-sm-0">
                    <img src="<?php echo $path; ?>assets/images/numbers-1.png">
                </div>
                <div class="col-lg-3 col-sm-6 col-6 p-sm-0">
                    <img src="<?php echo $path; ?>assets/images/numbers-2.png">
                </div>
                <div class="col-lg-3 col-sm-6 col-6 p-sm-0">
                    <img src="<?php echo $path; ?>assets/images/numbers-3.png">
                </div>
                <div class="col-lg-3 col-sm-6 col-6 p-sm-0">
                    <img src="<?php echo $path; ?>assets/images/numbers-4.png">
                </div>
            </div>
        </div>
    </section>
    <!-- Service number section end -->
    <!-- We care section start -->
    <section class="std-space pt-0">
        <div class="container">
            <div class="row">
                <div class="w-100 row we-care">
                    <div class="col-lg-12 text-center">
                        <h2 class="ttl-40 fw-bold pt-5 text-uppercase">We care about each one of you</h2>
                    </div>
                    <div class="col-lg-7 py-5">
                        <img class="bus-img" src="<?php echo $path; ?>assets/images/school-bus-1.png">
                    </div>
                    <div class="col-lg-5 d-flex align-items-center">
                        <div class="text">
                            <p>Emirates Transport is dedicated to inclusivity, providing specially designed buses for
                                the
                                transportation of students of determination, ensuring a safe and comfortable journey to
                                and
                                from school. This initiative reflects our commitment to accessible transportation
                                solutions
                                that cater to the unique needs of all students in the UAE.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- We care section end -->
    <!-- Technologies section start -->
    <section class="std-space pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="text-gray">Our Technologies</p>
                    <h3 class="ttl-30 fw-bold text-black text-uppercase">We empower each journey with innovative
                        technology</h3>
                </div>
            </div>
        </div>
        <div class="container-fluid px-5 pt-5">
            <div class="row">
                <div class="col-lg-3">
                    <div class="col-lg-12 pb-5">
                        <h3 class="fw-bold text-black">Safety-Focused
                            Drivers</h3>
                        <p>Our highly trained drivers are committed to safeguarding every student’s journey, paying
                            close attention to every detail to create a safe, comfortable, and worry-free transportation
                            experience for students and parents alike.
                        </p>
                    </div>
                    <div class="col-lg-12 pt-5">
                        <h3 class="fw-bold text-black">Smart Routes for
                            Seamless Rides</h3>
                        <p>Using intelligent route-planning technology, we optimize every journey to minimize travel
                            time and maximize efficiency, guaranteeing students arrive safely and on time while reducing
                            traffic and environmental impact.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo $path; ?>assets/images/bus-with-round.png">
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-12 pb-5">
                        <h3 class="fw-bold text-black">Alert
                            Drivers</h3>
                        <p>Equipped with cutting-edge technology, our drivers receive instant, real-time notifications,
                            allowing them to make proactive decisions that enhance road safety and ensure a smooth,
                            secure journey for all students.
                        </p>
                    </div>
                    <div class="col-lg-12 pt-5">
                        <h3 class="fw-bold text-black">360° Vision
                        for Total Security</h3>
                        <p>Our vehicles are equipped with advanced 360° surveillance systems, providing comprehensive monitoring to ensure complete security and peace of mind from pick-up to drop-off.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Technologies section end -->
    <!-- Journey section start -->
    <section class="journey position-relative">
        <img class="bg" src="<?php echo $path; ?>assets/images/journey-img.png">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 h-100 text-center d-flex align-items-center justify-content-center">
                    <div class="text z-index-2">
                        <h2 class="fw-bold text-white ttl-40">Start your journey now</h2>
                        <a href="<?php echo $path; ?>contact/" class="btn py-3 px-5 btn-outline-light mt-4 fw-bold">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Journey section end -->
</main>
<?php include('../includes/footer.php');?>
<!-- pagescript here... -->
<script></script>
<!-- End pagescript here... -->
</body>

</html>