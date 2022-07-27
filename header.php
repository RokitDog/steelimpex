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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'nmtheme' ); ?></a>	
	
	<!-- header -->
	<header class="header js-header">
		<div class="wrapper">
			<div class="header-btn">
				<a href="javascript:;" class="menu-btn js-menu-btn"><span></span></a>
			</div>
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

				</nav>
			</div>
		</div>
	</header>
	

	<div id="content" class="main-content">