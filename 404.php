<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package NWS_2020
 */

get_header();
?>

	<style>
	.page-login {
		background: url('images/login-bg.jpg') no-repeat;
		background-size: cover;
		background-position: center center;
		padding: 40px 20px;
	}

	.page-login header h1,
	.page-login .wpum-message,
	.page-login .wpum-action-links,
	.page-login .wpum-action-links li {
		margin: 0;
	}

	.page-login section {
		background: #fff;
		max-width: 800px;
		margin: 0 auto;
		padding: 20px;
		-webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
		-moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
		box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
	}

	.page-login section .page-title {
		color: #a07d30;
		margin-bottom: 10px;
	}

	.page-login .wpum-login-form label,
	.page-login .wpum-action-links {
		font-size: 14px;
		font-weight: 600;
		line-height: 20px;
		text-transform: uppercase;
	}

	.page-login section .entry-content .button {
		background: #a07d30;
		color: #fff;
		text-transform: uppercase;
		border: 0;
		padding: 10px 15px;
		margin: 0 0 20px 0;
	}

	.page-login section .page-content a {
		color: #a07d30;
		font-weight: 600;
		text-decoration: none;
	}

	.page-login .wpum-message.info {
		background-color: #f1f1f1;
		border-color: #ccc;
		color: #000;
		padding: 20px;
		border-radius: 0;
	}

	.page-login #header-cover-image {
		height: 270px;
		background-size: 300px;
		background-position: center center;
	}

	.page-login #header-avatar-container {
		display: none;
	}

	.page-login #profile-content-about .profile-fields-table,
	.page-login .profile-content-settings .profile-fields-table {
		display: inline-block;
		overflow: scroll;
	}

	.error-404 .menu {
		list-style-type: ;
		margin-left: 0;
		margin-bottom: 0;
	}
	</style>

	<main id="primary" class="site-main page-login">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'nws-2020' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'nws-2020' ); ?></p>


				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => '404-menu',
						'link_before'    => '<span>',
						'link_after'     => '</span>'
					)
				);
				?>

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'top-menu',
						'menu_id'        => '404-secondary',
					)
				);
				?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
