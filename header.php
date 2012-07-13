<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<!-- Nudestrap - Bare Wordpress Theme built using Twitter bootstrap. -->
<!-- Copyright (C) 2012 Teknicom Web -->


<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<!-- Scripts -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.menu.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/theme.js"></script>

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap" class="container">

		<header id="site-header">
		
			<div id="logo">
				<h1><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png"/></a></h1>
			</div>
			
			
			<!-- Top Navigation Menu -->
			<div id="top-navigation">
				<?php
				$menu_args = array(
					'theme_location' => 'top_nav_menu',
					'container'       => '',
					'container_class'    => '',
					'items_wrap' => '<ul id="top-nav-menu" class="memu js-enabled">%3$s</ul>'
				);
				wp_nav_menu( $menu_args );
				?>
			</div>	
			
			<!-- Main Navigation Menu -->
			<div id="main-navigation">
				<?php
				$menu_args = array(
					'theme_location' => 'main_nav_menu',
					'container'       => '',
					'container_class'    => '',
					'items_wrap' => '<ul id="main-nav-menu" class="memu js-enabled">%3$s</ul>'
				);
				wp_nav_menu( $menu_args );
				?>
			</div>	
			
		</header>

		<div id="content-container" class="container border-box">
