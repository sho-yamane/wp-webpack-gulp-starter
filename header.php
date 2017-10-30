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
	<style>@charset "UTF-8";html{box-sizing:border-box;overflow-y:scroll;-webkit-text-size-adjust:100%}*,:before,:after{background-repeat:no-repeat;box-sizing:inherit}:before,:after{text-decoration:inherit;vertical-align:inherit}*{padding:0;margin:0}audio:not([controls]){display:none;height:0}hr{overflow:visible}article,aside,details,figcaption,figure,footer,header,main,menu,nav,section,summary{display:block}summary{display:list-item}small{font-size:80%}[hidden],template{display:none}abbr[title]{border-bottom:1px dotted;text-decoration:none}a{background-color:transparent;-webkit-text-decoration-skip:objects}a:active,a:hover{outline-width:0}code,kbd,pre,samp{font-family:monospace,monospace}b,strong{font-weight:bolder}dfn{font-style:italic}mark{background-color:#ff0;color:#000}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}input{border-radius:0}button,[type=button],[type=reset],[type=submit],[role=button]{cursor:pointer}[disabled]{cursor:default}[type=number]{width:auto}[type=search]{-webkit-appearance:textfield}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;resize:vertical}button,input,optgroup,select,textarea{font:inherit}optgroup{font-weight:700}button{overflow:visible}button::-moz-focus-inner,[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner{border-style:0;padding:0}button:-moz-focusring,[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner{outline:1px dotted ButtonText}button,html [type=button],[type=reset],[type=submit]{-webkit-appearance:button}button,select{text-transform:none}button,input,select,textarea{background-color:transparent;border-style:none;color:inherit}select{-moz-appearance:none;-webkit-appearance:none}select::-ms-expand{display:none}select::-ms-value{color:currentColor}legend{border:0;color:inherit;display:table;max-width:100%;white-space:normal}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}img{border-style:none}progress{vertical-align:baseline}svg:not(:root){overflow:hidden}audio,canvas,progress,video{display:inline-block}[aria-busy=true]{cursor:progress}[aria-controls]{cursor:pointer}[aria-disabled]{cursor:default}::-moz-selection{background-color:#b3d4fc;color:#000;text-shadow:none}::selection{background-color:#b3d4fc;color:#000;text-shadow:none}.slick-slider{position:relative;display:block;box-sizing:border-box;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{position:relative;overflow:hidden;display:block;margin:0;padding:0}.slick-list:focus{outline:none}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-track,.slick-slider .slick-list{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{position:relative;left:0;top:0;display:block;margin-left:auto;margin-right:auto}.slick-track:before,.slick-track:after{content:"";display:table}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{float:left;height:100%;min-height:1px;display:none}[dir=rtl] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-loading .slick-slide{visibility:hidden}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}.hamburger{width:25.6px;width:2.56rem;height:16px;height:1.6rem;position:fixed;z-index:1;top:30px;top:3rem;right:30px;right:3rem;cursor:pointer}.hamburger:focus{outline:0}.hamburger span{display:block;background:#000;position:absolute;left:0;width:100%;height:2px;-webkit-transition:all .4s ease-out;transition:all .4s ease-out;border-radius:2px}.hamburger span:nth-child(1){top:0}.hamburger span:nth-child(2){top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%)}.hamburger span:nth-child(3){bottom:0}.hamburger.is-active span{background:#999}.hamburger.is-active span:nth-child(1){-webkit-transform:translateY(12px) rotate(-45deg);transform:translateY(12px) rotate(-45deg)}.hamburger.is-active span:nth-child(2){opacity:0;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"}.hamburger.is-active span:nth-child(3){-webkit-transform:translateY(-12px) rotate(45deg);transform:translateY(-12px) rotate(45deg)}body{background:#fff}@media screen{[hidden~=screen]{display:inherit}[hidden~=screen]:not(:active):not(:focus):not(:target){position:absolute!important;clip:rect(0 0 0 0)!important}}</style>
	<?php wp_head(); ?>
	<?php get_template_part( 'inc-head/ogp' ); ?>
	<?php get_template_part( 'inc-head/favicon' ); ?>
	<?php get_template_part( 'inc-head/ga' ); ?>
</head>

<body>
	<div id="barba-wrapper">
		  <div class="barba-container">
			<div id="page" <?php body_class(); ?>>
				<header class="header">
					<button class="hamburger" id="js-hamburger">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<nav id="js-nav">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'container'     => '',
								'menu_class'    => '',
								'items_wrap'    => '<ul>%3$s</ul>',
							)
						);
						?>
					</nav>
				</header>
				<?php if ( is_home() || is_front_page() ) : ?>
					<div class="slider" id="js-slider">
						<div><img src="<?php echo esc_url( get_theme_file_uri( '/dist/img/sample.jpg' ) ); ?>"></div>
						<div><img src="<?php echo esc_url( get_theme_file_uri( '/dist/img/sample.jpg' ) ); ?>"></div>
						<div><img src="<?php echo esc_url( get_theme_file_uri( '/dist/img/sample.jpg' ) ); ?>"></div>
					</div>
				<?php endif; ?>
