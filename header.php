<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>" />
	<?php $wl_theme_options = kadima_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($wl_theme_options['upload_image_favicon']); ?>" />
	<?php } ?>
	<?php
		if (is_home()) {
			echo '<meta http-equiv="x-dns-prefetch-control" content="on" />
			<link rel="dns-prefetch" href="//cdn.yunclever.com">
			<link rel="dns-prefetch" href="//cdn.bootcss.com">
			<link rel="dns-prefetch" href="//static.addtoany.com">';
		} elseif (isset($_COOKIE['yc_visit_cookie'])) {
			echo '';
		}
		else {
			echo '<meta http-equiv="x-dns-prefetch-control" content="on" />
			<link rel="dns-prefetch" href="//cdn.yunclever.com">
			<link rel="dns-prefetch" href="//cdn.bootcss.com">
			<link rel="dns-prefetch" href="//static.addtoany.com">';
		}
	?>
	<?php wp_head(); ?>
	<!--script src="https://use.typekit.net/cka4pbd.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script-->
</head>
<body <?php body_class(); ?>>

<div>
	<!-- Header Section -->
	<!-- /Header Section -->
	<!-- Navigation  menus -->
	<div class="navigation_menu "  data-spy="affix" data-offset-top="95" id="kadima_nav_top">
		<div class="container navbar-container" >
			<nav class="navbar navbar-default " role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					  <span class="sr-only"><?php _e('Toggle navigation','kadima');?></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
				</div>
					<div class="logo">
						<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php if($wl_theme_options['upload_image_logo']){ ?>
							<img class="img-responsive" src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "200"; } ?>px;" />
							<?php } else {
								echo get_bloginfo('name');
							} ?>
						</a>
					</div>
				<div id="menu" class="collapse navbar-collapse ">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => 'kadima_fallback_page_menu',
							'walker' => new kadima_nav_walker(),
							)
						);
					?>
					<div id="google_translate_element"></div>
				</div>
			</nav>
		</div>
	</div>
