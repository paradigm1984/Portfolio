<!-- <!DOCTYPE html> -->
<!--
sample websites to look at:
https://wfpf.com/ - the services section
https://www.thoriumdigital.com/ - specifically the header and how the image stays where it is.

 -->
 <!-- wordpress function to get the html language attribute -->
<html <?php language_attributes(); ?>>
	<head>
		<!-- wordpress function to get the charset of the blog. -->
    <meta charset="<?php bloginfo(charset) ?>">
    <meta name="description" content="">
    <meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
			// wordpress function that allows wordpress to determine things for the header such as its css
			wp_head();
		?>
		<title> <?php bloginfo("name") ?> | <?php bloginfo("description") ?></title>
    <link rel="icon" type="image/png" href="<?php bloginfo(template_directory); ?>/images/favicon.png" />
		<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo(template_directory); ?>/css/normalize.css">
		<link rel="stylesheet" href="<?php bloginfo(template_directory); ?>/css/style.css">
	</head>
	<!-- BEGIN BODY -->
	<!-- this wordpress function allows wordpress to add important classes it uses for the interface.  -->
	<body <?php // body_class(); ?>>
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
		<header class="header" id="header">
				<div id="logo" class="logo">
					<a  href=" <?php echo site_url() ?> ">
						<img class="logo-img" src="http://localhost:8888/portfolio/wp-content/uploads/2018/05/portfolio-logo-01.png" alt="logo">
					</a>
				</div>
				<!-- come back and make this dynamic -->
				<ul id="menuLarge" class="menu">
					<li class="item"><a class="item-link" href=" <?php echo site_url() ?> "> Home </a></li>
					<li class="item"><a class="item-link" href="<?php echo site_url("about") ?>"> About </a></li>
					<li class="item"><a class="item-link" href="<?php echo site_url("Graphic Design") ?>"> Graphic Design </a></li>
					<li class="item"><a class="item-link" href="<?php echo site_url("Web Development") ?>"> Web Development </a></li>
				</ul>
				<div id="social" class="social">
					<i class="icon fab fa-linkedin fa-2x" href="https://www.linkedin.com/in/dan-blanco/"> </i>
					<i class="icon fab fa-github fa-2x" href="https://github.com/paradigm1984/"> </i>
					<i class="icon fab fa-codepen fa-2x" href="https://codepen.io/paradigm1984/"> </i>
				</div>
			   <i id="hamburger" class="fas fa-bars fa-2x"></i>
			</header><!-- END header -->
