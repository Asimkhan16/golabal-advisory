<?php
$base_url = "http://localhost/global-advisory\gd\golabal-advisory/";
$pagename_with = basename($_SERVER['PHP_SELF']);
$pagename_ = explode(".", $pagename_with);
$pagename = $pagename_[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Global Advisory</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
		rel="stylesheet">
	<link rel="icon" href="<?php echo $base_url; ?>images/favicon.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="<?php echo $base_url; ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>css/animate.min.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
	<header id="property-header" class="header-area">
		<nav class="navbar navbar-expand-lg navbar-light pt-0">
			<div class="container">
				<a class="navbar-brand pt-0" href="<?php echo $base_url; ?>">
					<img class="logo" src="<?php echo $base_url; ?>images/logo.webp" alt="logo">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class=" menu-items navbar-nav align-items-md-center align-item-start mb-lg-0 pe-md-3"
						id="myDIV">
						<li class="nav-item">
							<a class="nav-link btn1 home-menu" aria-current="page"
								href="<?php echo $base_url; ?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn1 about-us-menu" href="<?php echo $base_url; ?>about-us.php">About Us</a>
						</li>
						<li class="nav-item PR-dropdown">
							<a class=" PR-dropdownBtn nav-link btn1 products-menu" href="#">Services</a>
							<div class="PR-dropdownContent">
								<div class="PR-dropdownContentInner">
									<a href="./management-consulting.php">Management Consulting</a>
								</div>
								<div class="PR-dropdownContentInner">
									<a href="./tax-advisory.php">Tax Advisory</a>
								</div>
								<div class="PR-dropdownContentInner">
									<a href="./virtual-cfo.php">Virtual CFO</a>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link btn1 blogs-menu" href="<?php echo $base_url; ?>blogs.php">blogs</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn1 contact-us-menu"
								href="<?php echo $base_url; ?>contact-us.php">Conatct Us</a>
						</li>
						<!-- <li class="nav-item"> -->
						<!-- <a  class="nav-link btn1 whatsapp-menu" href=""><img src="images/whatsapp-image.png" alt="" width="100%"></a> -->
						<!-- </li> -->
					</ul>

				</div>

			</div>

		</nav>

	</header>
	<div class="height-header"></div>