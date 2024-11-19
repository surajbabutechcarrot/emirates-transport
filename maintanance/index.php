<?php 
$page_title = "Maintanance";
include('../includes/header.php');
?>
<style>
        .brand-tab .tab-content. .tab-pane{
            height: auto !important;
        }
    </style>
<main class="inner-page">
    <!-- Banner start -->
    <section class="inner-banner redoverlay three pt-0 d-flex align-items-center">
        <div class="container-fluid">
            <div class="banner-content text-center text-uppercase">
                <h1 class="fw-bold text-white underline">MAINTENANCE, REPAIR & OPERATIONS</h1>
                <img class="bg" src="<?php echo $path; ?>assets/images/about-banner.png" alt="image description">
            </div>
        </div>
    </section>
    <!-- Banner end -->
    <!-- Brand Tab start -->
    <section class="bg-smoke">
        <div class="container pt-5">
            <h2 class="fw-bold text-center ttl-30 ">Dive into our expertise and industry-leading knowledge, guaranteeing
                exceptional operational efficiency and reliability, and keeping your fleet at peak performance across
                our diverse network of locations.</h2>
        </div>
        <div class="container std-space">
            <h2 class="fw-bold text-center text-uppercase ttl-40 text-black">DISCOVER OUR SERVICES AND BRANDS:</h2>
            <div class="brand-tab mt-md-5 pt-md-5">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="BrandTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="one-tab" data-bs-toggle="tab" data-bs-target="#one"
                            type="button" role="tab" aria-controls="one" aria-selected="true">
                            <img src="<?php echo $path; ?>assets/images/discover-1.svg" alt="logo" />
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="two-tab" data-bs-toggle="tab" data-bs-target="#two" type="button"
                            role="tab" aria-controls="two" aria-selected="false">
                            <img src="<?php echo $path; ?>assets/images/discover-2.svg" alt="logo" />
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="three-tab" data-bs-toggle="tab" data-bs-target="#three"
                            type="button" role="tab" aria-controls="three" aria-selected="false">
                            <img src="<?php echo $path; ?>assets/images/profix.jpg" alt="logo" />
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="four-tab" data-bs-toggle="tab" data-bs-target="#four" type="button"
                            role="tab" aria-controls="four" aria-selected="false">
                            <img src="<?php echo $path; ?>assets/images/discover-4.svg" alt="logo" />
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="five-tab" data-bs-toggle="tab" data-bs-target="#five" type="button"
                            role="tab" aria-controls="five" aria-selected="false">
                            <img src="<?php echo $path; ?>assets/images/discover-6.svg" alt="logo" />
                        </button>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content bg-white" id="BrandTabContent">
                    <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <div class="row h-100">
                            <div class="col-lg-5 pe-md-0 pe-lg-5 d-flex align-items-center">
                                <div class="leftimg"
                                    style="background: url('<?php echo $path; ?>assets/images/awa_full.jpg');"></div>
                            </div>
                            <article class="col-lg-7 my-auto">
                                <div class="textwrap my-4 d-flex flex-column justify-content-between">
                                    <h2 class="ttl-40 fw-bold">Al Wataneya Auction</h2>
                                    <p class=""><span class="fw-semi-bold">Wataneya Auction</span> specializes in
                                        automobiles, offering a transparent and expert-driven platform for buyers and
                                        sellers. We provide a seamless auction experience, ensuring each vehicle is
                                        expertly evaluated and presented for optimal value. Whether you're a collector
                                        or a first-time bidder, our service guarantees a rewarding and efficient
                                        experience.</p>
                                    <div class=""><span class=" ttl-40 fw-semi-bold">+60 </span>
                                        <p>Successful auctions annually</p>
                                    </div>
                                    <div class=""><span class=" ttl-40 fw-semi-bold">5750 </span>
                                        <p>Vehicles sold each year</p>
                                    </div>
                                    <div><span class=" ttl-40 fw-semi-bold">2129 </span>
                                        <p>Registered clients on Al Wataneya Auction Website
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                        <div class="row h-100">
                            <div class="col-lg-5 pe-md-0 pe-lg-5 d-flex align-items-center">
                                <div class="leftimg"
                                    style="background: url('<?php echo $path; ?>assets/images/emirate_moto_full.jpg');">
                                </div>
                            </div>
                            <article class="col-lg-7 my-auto">
                                <div class="textwrap my-4 d-flex flex-column justify-content-between">
                                    <h2 class="ttl-40 fw-bold">Emirates Moto</h2>
                                    <p class=""><span class="fw-semi-bold">Emirates Moto</span> is state of art company
                                        delivering dealer standard services (3 S) for premium brands of cars.</p>
                                    <p>• It’s an authorized accident repair for Lamborghini</p>
                                    <p>• Partner with Jeepers Edition</p>
                                    <p>• Specialized in repairing luxury brand such as Benz, BMW, Bentley, Porsche,
                                        Audi, Ferrari, Land Rover, and Jaguar.</p>
                                    <p>• Spare parts distributor for all OEM brands.</p>
                                    <div class="tabcounter d-flex gap-3 my-md-5">

                                        <div class="text-start"><span class=" ttl-40 fw-semi-bold">+ 14,000 </span>
                                            <p>Luxury vehicles maintained </p>
                                        </div>
                                        <div class="text-start"><span class=" ttl-40 fw-semi-bold">+400 </span>
                                            <p>Showroom sales</p>
                                        </div>
                                        
                                    </div>
                                    <p>You want to take a step forward?</p>
                                    <div class="d-flex gap-4 flex-wrap mt-3">
                                        <div class="mob d-flex gap-3">
                                            <img src="<?php echo $path; ?>assets/images/mob.png" alt="logo"
                                                class="me-2" />
                                            <p>Call us<br><b>80036686</b></p>
                                        </div>
                                        <div class="web d-flex gap-3">
                                            <img src="<?php echo $path; ?>assets/images/web.png" alt="logo"
                                                class="me-2" />
                                            <p>Visit our website<br><a href="https://emiratesmoto.ae/"
                                                    target="_blank"><b>emiratesmoto.ae</b></a></p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="three-tab">
                        <div class="row h-100">
                            <div class="col-lg-5 pe-md-0 pe-lg-5 d-flex align-items-center">
                                <div class="leftimg"
                                    style="background: url('<?php echo $path; ?>assets/images/profix_full.jpg');"></div>
                            </div>
                            <article class="col-lg-7 my-auto">
                                <div class="textwrap my-4 d-flex flex-column justify-content-between">
                                    <h2 class="ttl-40 fw-bold">Emirates Moto Profix</h2>
                                    <p class=""><span class="fw-semi-bold">Emirates Transport Accident Repair
                                            Bodyshop</span> provides top-notch accident repair services across the UAE.
                                        With 8 branches and skilled technicians, we handle everything from minor dents
                                        to major collisions, ensuring high standards of safety and quality. Our
                                        extensive network guarantees fast, reliable service to get you back on the road
                                        quickly.</p>
                                    <div class="tabcounter d-flex my-md-5">
                                        <div class="text-start"><span class=" ttl-40 fw-semi-bold">+150</span>
                                            <p>Technician</p>
                                        </div>
                                        <div class="text-start"><span class=" ttl-40 fw-semi-bold">8</span>
                                            <p>Branches over UAE</p>
                                        </div>
                                        <div class="text-start"><span class=" ttl-40 fw-semi-bold">+9000</span>
                                            <p>Repaired vehicles</p>
                                        </div>
                                        <div class="text-start"><span class=" ttl-40 fw-semi-bold">+30</span>
                                            <p>Insurance Companies</p>
                                        </div>
                                    </div>
                                    <p>You want to take a step forward?</p>
                                    <div class="mob d-flex gap-3 mt-3">
                                        <img src="<?php echo $path; ?>assets/images/mob.png" alt="logo" class="me-2" />
                                        <p>Call us<br><b>80036686</b></p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="four-tab">
                        <div class="row h-100">
                            <div class="col-lg-5 pe-md-0 pe-lg-5 d-flex align-items-center">
                                <div class="leftimg"
                                    style="background: url('<?php echo $path; ?>assets/images/work.jpg');"></div>
                            </div>
                            <article class="col-lg-7 my-auto">
                                <div class="textwrap my-4 d-flex flex-column justify-content-between">
                                    <h2 class="ttl-40 fw-bold">Emirates car wash</h2>
                                    <p class=""><span class="fw-semi-bold">Emirates Car Wash</span>offers premium,
                                        eco-friendly car cleaning across the UAE.Using advanced techniques and
                                        biodegradable products, we deliver a through wash that conserves water and
                                        minimizes environmental impact, keeping your vehicle spotless and green.</p>
                                    <div class="tabcounter d-flex my-md-5">
                                        <div class="text-start"><span class=" ttl-40 fw-semi-bold">+30</span>
                                            <p>Locations</p>
                                        </div>
                                        <div class="text-start"><span class=" ttl-40 fw-semi-bold">+100</span>
                                            <p>Employees</p>
                                        </div>
                                        <div class="text-start"><span class=" ttl-40 fw-semi-bold">+2M</span>
                                            <p>Washed cars</p>
                                        </div>
                                    </div>
                                    <p>You want to take a step forward?</p>
                                    <div class="mob d-flex gap-3 mt-3">
                                        <img src="<?php echo $path; ?>assets/images/mob.png" alt="logo" class="me-2" />
                                        <p>Call us<br><b>80036686</b></p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="five" role="tabpanel" aria-labelledby="five-tab">
                        <div class="row h-100">
                            <div class="col-lg-5 pe-md-0 pe-lg-5 d-flex align-items-center">
                                <div class="leftimg"
                                    style="background: url('<?php echo $path; ?>assets/images/musada_full.jpg');"></div>
                            </div>
                            <article class="col-lg-7 my-auto">
                                <div class="textwrap my-4 d-flex flex-column justify-content-between">
                                    <h2 class="ttl-40 fw-bold">Musada</h2>
                                    <p class="">Supporting You Every Mile – Reliable Service When You Need It Most</p>
                                    <div class="tabcounter d-flex my-md-5">
                                        <div class="text-start"><span class=" ttl-40 fw-semi-bold">+164k</span>
                                            <p>Service Provided</p>
                                        </div>
                                        <div class="text-start"><span class=" ttl-40 fw-semi-bold">+326</span>
                                            <p>Technician</p>
                                        </div>
                                        <div class="text-start"><span class=" ttl-40 fw-semi-bold">+219</span>
                                            <p>Fleet</p>
                                        </div>
                                        <div class="text-start"><span class=" ttl-40 fw-semi-bold">+123</span>
                                            <p>Drivers</p>
                                        </div>
                                    </div>
                                    <p>You want to take a step forward?</p>
                                    <div class="mob d-flex gap-3 mt-3">
                                        <img src="<?php echo $path; ?>assets/images/mob.png" alt="logo" class="me-2" />
                                        <p>Call us<br><b>80036686</b></p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand Tab end -->
    <!-- Workshop start -->
    <section class="workshop bg-smoke pb-5">
        <h2 class="fw-bold text-center text-uppercase ttl-40 text-black mb-md-5 mb-3">Workshop and maintenance</h2>
        <div class="rowwrap position-relative">
            <div class="container">
                <div class="workshopwrap row">
                    <div class="col-md-6 my-auto">
                        <p>We proudly operate 46 workshops and 13 centers and units, delivering exceptional service to
                            both B2B and B2C clients.</p>
                        <p>Supported by 2,400 skilled technicians, delivering top-tier service With over 1,000,000
                            various auto mechanical services performed annually and more than +210,000 vehicles
                            inspected, we ensure top-quality care and precision for every vehicle.</p>
                        <img src="<?php echo $path;?>assets/images/work.jpg" alt="arrow" class="d-block d-md-none" />
                    </div>
                    <div class="right-image"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Workshop end -->
    <!-- Journey start -->
    <section class="journey-banner inner-banner redoverlay three pt-0 d-flex align-items-center">
        <div class="container-fluid">
            <div class="banner-content text-center text-uppercase position-relative">
                <h3 class="ttl-40 text-white fw-bold">Start your journey now</h3>
                <a href="../contact/" class="btn btn-plain mt-3">Contact us</a>
            </div>
        </div>
    </section>
    <!-- Journey end -->
    <?php include('../includes/footer.php');?>
    
    </body>

    </html>