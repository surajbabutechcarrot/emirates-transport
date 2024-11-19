<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Emirates Transport - Gitex</title>
	<meta name="robots" content="noindex, nofollow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
		rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.7.1.js"
		integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<script src="assets/js/jquery.marquee.js" id="marquee-js"></script>
	<script src="assets/js/aos.js" id="marquee-js"></script>
	<script src="assets/js/scripts.js" id="script-js"></script>
	<link rel="stylesheet" id="style-aos" href="assets/css/aos.css" media="all">
	<link rel="stylesheet" id="style" href="style.css?ver=1.1" media="all">
	<link rel="icon" href="assets/images/favicon.png" sizes="32x32">
	<link rel="icon" href="assets/images/favicon.png" sizes="192x192">
	<link rel="apple-touch-icon" href="assets/images/favicon.png">

	<meta name="description" content="We are your journey to sustainable mobility">
	<?php $ogImageURL = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/gitex/assets/images/hero-banner-v2.jpg'; ?>
	<meta property="og:image" content="<?php echo $ogImageURL; ?>">


</head>

<body class="page-template-template-landing_v1">

	<!-- header start -->
	<header class="gitex-header">
		<div class="container">
			
		</div>
	</header>
	<!-- header end -->


	<!-- hero banner start -->
	<div class="banner">
		
	</div>
	<!-- hero banner end -->

	<!-- marquee section start -->
	<!-- <div class="marquee-section-outer">
		<h2 class="marquee">We are your journey to <span>sustainable mobility</span></h2>
	</div> -->
	<!-- marquee section end -->
	<!-- contact section start -->
	<div class="contact-section-outer">
		<div class="container">
			<h2 class="sub-titles" data-aos="fade-up">KNOW MORE ABOUT US</h2>
			<div class="contact-section" data-aos="fade-up">
				<?php 
				if(isset($_GET['lead']) && $_GET['lead'] == "success"):
					echo "<h2>We have received your query. We will get back to you asap.</h2>";
				else:	
					include_once("form.php"); 
				endif;
				?>
			</div>
		</div>
	</div>
	<!-- contact section end -->

	<!-- footer start -->
	<div class="gitex-footer">
		<div class="container">
			<div class="left-to-right-arrow"></div>
			<p class="copyright">© 2024 Emirates Transport. All Rights Reserved.</p>

			<ul class="social-icons">
				<li><a href="https://www.instagram.com/emiratestrans?igsh=MWZvajhwaTN4MTI5cw" target="_blank"><img
							src="assets/images/instagram-icon.svg" alt="Instagram"></a></li>
				<li><a href="https://x.com/EmiratesTrans?t=d15uztlmLgRDTyrPxTPJhg&amp;s=09" target="_blank"><img
							src="assets/images/x-icon.svg" alt="X"></a></li>
				<li><a href="https://www.facebook.com/share/ketiEZLNAm24f5cD/?mibextid=qi2Omg" target="_blank"><img
							src="assets/images/facebook-icon.svg" alt="Facebook"></a></li>
				<li><a href="https://www.youtube.com/channel/UC5lus29b6IsRoypsDu9ZYFg" target="_blank"><img
							src="assets/images/youtube-icon.svg" alt="YouTube"></a></li>
				<li><a href="https://www.linkedin.com/company/emirates-transport" target="_blank"><img
							src="assets/images/linkedin-icon.svg" alt="LinkedIn"></a></li>
			</ul>
		</div>
	</div>
	<!-- footer end -->


</body>

</html>