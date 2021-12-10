<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NWS_2020
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
</head>

<body <?php body_class(); ?>>

<a href="#" class="btt" aria-label="Scroll Back to Top" style="display: none;"><span></span></a>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nws-2020' ); ?></a>

	<header id="masthead" class="site-header">

		<div id="site-header-wrap">
			<div class="max-width">

				<div id="secondary-navigation" class="secondary-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'top-menu',
							'menu_id'        => 'secondary',
						)
					);
					?>
				</div><!-- #site-navigation -->

				<div id="nav-mobile-wrap">

					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="/wp-content/themes/nws-2020/images/nav-mobile-button.png" alt="Nav Mobile Button"></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'link_before'    => '<span>',
								'link_after'     => '</span>'
							)
						);
						?>
					</nav><!-- #site-navigation -->

				</div>

			</div>
		</div>

	</header><!-- #masthead -->
