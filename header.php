<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nmtheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
   integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
   crossorigin=""/>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'nmtheme' ); ?></a>	
	
	<!-- header -->
	<header class="header js-header">
		<div class="section-wrapper">
			<div class="header__container">
				<nav class="header__nav js-main-nav">
					<div class="header__logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
						</a>
					</div>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'primary-menu',
							'container'      => false
						) );
					?>
									<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'secondary-menu',
							'menu_class'     => 'secondary-menu',
							'container'      => false
						) );
					?>
					<div class="mobile-menu">
						<span>Meni</span>
						<li class="font-mobile-nav"></li>
					</div>
					<div class="socials">
						<ul>
							<a href="https://www.facebook.com/steelimpex.rs" target="_blank">
								<li class="font-facebook"></li>
							</a>
							<a href="https://www.instagram.com/steelimpexdoo/" target="_blank">
								<li class="font-instagram"></li>
							</a>
							<a href="https://www.linkedin.com/in/steel-impex-6a59a21aa/" target="_blank">
								<li class="font-linkedin"></li>
							</a>
						</ul>
					</div>

				</nav>
			</div>
		</div>
	</header>
	

	<div id="content" class="main-content">