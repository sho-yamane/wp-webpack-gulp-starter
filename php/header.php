<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<style>@@include('../dist/css/bundle.min.css')</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="barba-wrapper">
	  <div class="barba-container">
		<header class="header">
			<nav>
			    <?php wp_nav_menu( array(
			        'theme_location'=>'primary',
					'container'     =>'',
					'menu_class'    =>'',
					'items_wrap'    =>'<ul>%3$s</ul>'));
			    ?>
			</nav>
		</header>
		<?php if ( is_home() || is_front_page() ) : ?>
			<div class="slider" id="js-slider">
				<div><img src="<?php echo get_template_directory_uri(); ?>/dist/img/sample.jpg"></div>
				<div><img src="<?php echo get_template_directory_uri(); ?>/dist/img/sample.jpg"></div>
				<div><img src="<?php echo get_template_directory_uri(); ?>/dist/img/sample.jpg"></div>
			</div>
		<?php endif; ?>
