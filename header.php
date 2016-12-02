<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
	<style> .fontawesome-text {display: none;} </style>	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fonts.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-grid-3.3.1.min.css">
<!--	<link rel="stylesheet" href="css/main.css">-->

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/scss/main.css">

	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600italic,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400italic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
	<meta property="fb:admins" content="100012020110605"/>
	<meta property="fb:app_id" content="1714183148869501"/>
</head>
<!--START HEADER--> 
<header class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="logo">
					<a href="http://elena.alscon-clients.com/"><h3><?php bloginfo('name'); ?></h3></a>
				</div>
				 <i class="fa fa-bars" aria-hidden="true"></i>
					 <?php wp_nav_menu( array(
					   'theme_location' => 'header_menu',
					   'container' => 'false',
					   'menu_class'  => 'menu')); 
					 ?>
					<div class="search">
						<form role="search" method="get"  action="<?= home_url(  ); ?>">
							<input type="search" value='' name='s' placeholder=" ">
							<i class="fa fa-search" aria-hidden="true"></i>
	                        <input type="submit" style="display: none;">      
	 					</form>
	 			<!-- <div class="search">
					<input type="search">
					<i class="fa fa-search" aria-hidden="true"></i>
				</div> -->
					</div>
				</div>
			</div>
		</div>
</header>

<!--END HEADER-->