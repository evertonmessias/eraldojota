<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?php bloginfo() ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?php echo SITEPATH; ?>assets/img/logo.png" rel="icon">
	<link href="<?php echo SITEPATH; ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Vendor CSS Files -->
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

	<!-- Template Main CSS File -->
	<link href="<?php echo SITEPATH; ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/css/eraldojota.css" rel="stylesheet">
	<?php wp_head(); ?>

</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top <?php if(!is_home())echo 'header-post'; ?>">
		<div class="container d-flex align-items-center justify-content-between">

			<h1 class="logo"><a href="/">Eraldo Jota</a></h1>
			
			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="<?php if(!is_home())echo '/'; ?>#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="<?php if(!is_home())echo '/'; ?>#about">Biografia</a></li>
					<li><a class="nav-link scrollto" href="<?php if(!is_home())echo '/'; ?>#services">Mídia</a></li>
					<li><a class="nav-link scrollto " href="<?php if(!is_home())echo '/'; ?>#portfolio">Galeria</a></li>
					<li><a class="nav-link scrollto" href="<?php if(!is_home())echo '/'; ?>#contact">Contato</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->