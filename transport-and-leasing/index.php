<?php 
$page_title = "Leasing";
include('../includes/header.php');
?>
<main class="inner-page">
    <!-- Banner start -->
    <section class="inner-banner blueoverlay three pt-0 d-flex align-items-center">
        <div class="container-fluid">
            <div class="banner-content text-center text-uppercase">
                <h1 class="fw-bold text-white">transport & leasing</h1>
                <img class="bg" src="<?php echo $path; ?>assets/images/leasing_banner.jpg" alt="image description">
            </div>
        </div>
    </section>
    <!-- Banner end -->
    <!-- Services start -->
    <section class="leasing-services">
        <div class="container pt-5">
            <h2 class="fw-bold text-center ttl-30">Experience unmatched comfort and efficiency with our advanced 360-degree fleet management technology for a seamless, innovative experience. </h2>
        </div>
        <div class="service-wrap container std-space">
            <h2 class="fw-bold text-center text-uppercase ttl-40 text-black">Our services</h2>
            <p class="p-grey text-center">We ensure a smooth journey every step of the way</p>
            <div class="row h-100 mt-md-5 mb-4 mb-md-0 pt-md-5">
                <div class="col-md-8 order-1 order-md-0">
                    <div class="leasingimg"><img src="<?php echo $path; ?>assets/images/leasing_banner.jpg" alt="image description"></div>
                </div>
                <div class="col-md-4 my-auto">
                    <h2 class="ttl-40 text-black fw-bold mb-4">FLEET LEASING & MANAGEMENT</h2>
                    <p>Comprehensive 360° fleet management<br> solutions that optimize operations,<br> enhance efficiency, and ensure seamless<br> vehicle performance at every stage.</p>
                </div>
            </div>
            <div class="row h-100 mt-md-5 mb-4 mb-md-0 pt-md-5">
                <div class="col-md-6 my-auto">
                    <h2 class="ttl-40 text-black fw-bold text-uppercase mb-4">Solutions for Every <br>Journey</h2>
                    <p>At the core of every operation,<br> our services drive success.</p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="leasingimg">
                            <img src="<?php echo $path; ?>assets/images/leasing2.jpg" alt="image description">
                            <p>LOGISTICS SOLUTIONS</p>
                        </div>
                        <div class="leasingimg">
                            <img src="<?php echo $path; ?>assets/images/leasing3.jpg" alt="image description">
                            <p>STAFF TRANSPORTATION</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row h-100 mt-md-5 mb-4 mb-md-0 pt-md-5">
                <div class="col-md-8 order-1 order-md-0">
                    <div class="d-flex">
                        <div class="leasingimg">
                            <img src="<?php echo $path; ?>assets/images/leasing4.jpg" alt="image description">
                            <!-- <p>LAST MILE DELIVERY SOLUTIONS</p> -->
                             <p>limousine</p>
                        </div>
                        <div class="leasingimg">
                            <img src="<?php echo $path; ?>assets/images/leasing5.jpg" alt="image description">
                            <p>Qualified drivers</p>
                        </div>
                        <div class="leasingimg">
                            <img src="<?php echo $path; ?>assets/images/leasing6.jpg" alt="image description">
                            <p>Government transport</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-auto">
                    <h2 class="ttl-40 text-black fw-bold mb-4">HIGH END<br>SERVICES</h2>
                    <p>We provide services designed<br> to offer ease and comfort, <br>ensuring a seamless experience <br>for our clients.</p>
                </div>
            </div>
            <div class="row h-100 mt-md-5 mb-4 mb-md-0 pt-md-5">
                <div class="col-md-6 my-auto">
                    <h2 class="ttl-40 text-black fw-bold mb-4">SMART<br>SOLUTIONS</h2>
                    <p>Our solutions ensure efficient, eco-friendly <br>transport, tailored for the UAE’s modern <br>logistics demands.</p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="leasingimg">
                            <img src="<?php echo $path; ?>assets/images/leasing77.jpg" alt="image description">
                            <p>Electric Vehicles Leasing</p>
                        </div>
                        <div class="leasingimg">
                            <img src="<?php echo $path; ?>assets/images/leasing8.jpg" alt="image description">
                            <p>Last Mile Delivery Solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services end -->
    <!-- Journey start -->
    <section class="leasing-journey journey-banner inner-banner blueoverlay std-space">
        <div class="container-fluid">
            <div class="banner-content text-center text-uppercase position-relative">
                <h3 class="ttl-40 text-white fw-bold">Start your journey now</h3>
                <a href="../contact/" class="btn btn-plain mt-3">Contact us</a>
            </div>
        </div>
    </section>
    <!-- Journey end -->
     <!-- Workshop start -->
    <section class="greenfleet std-space">
        <div class="container">
            <div class="row h-100">
                <div class="col-md-7 my-auto">
                    <img src="<?php echo $path; ?>assets/images/greenfeet.png" alt="image description" class="img-fluid">
                </div>
                <div class="col-md-5 my-auto pt-5 pt-md-0">
                    <h2 class="ttl-40 text-black fw-bold text-uppercase mb-4">Our green fleet</h2>
                    <p>Emirates Transport is committed to a sustainable future with
our growing green fleet, reducing emissions and promoting
eco-friendly transportation solutions across the UAE.</p>
                    <div class="d-flex mt-4 gap-5 mb-4 mb-md-0">
                        <div>
                            <span class="ttl-lg fw-semi-bold">100+</span>
                            <p>Electric Cars </p>
                        </div>
                        <div>
                            <span class="ttl-lg fw-semi-bold">1500</span>
                            <p>Modified vehicles to <br>the dual petrol/CNG model</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Workshop end -->
</main>
<?php include('../includes/footer.php');?>
</body>

</html>