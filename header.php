<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Roboto:wght@700&display=swap" rel="stylesheet">
	<!-- Main style -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
    <title><?php the_field('title'); ?></title>
</head>
<body>
	<header class="header" id="header">
		<div class="container d-flex">
			<div class="logo">
				<img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="Logo" class="logo-img">
			</div>
			<nav class="nav" id="nav">
				<ul class="nav-menu d-flex">
					<li class="nav-item nav-active">
						<a href="#" class="nav-link">
							About
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							Our Work
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							Conference 2022
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							Past Webinars
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							News
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							Contact Us
						</a>
					</li>
				</ul>
				<button class="donate">
					Donate
				</button>
			</nav>
			<a href="#" class="search">
				<img src="<?php bloginfo('template_directory') ?>/img/search.svg" alt="" class="search-img">
			</a>
			<img src="<?php bloginfo('template_directory') ?>/img/burger.png" alt="burger" class="burger">
		</div>
	</header>

	

	