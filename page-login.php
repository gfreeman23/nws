<?php
/**
 * Template Name: PageLogin
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

	.page-login article {
		background: #fff;
		max-width: 800px;
		margin: 0 auto;
		padding: 20px;
		-webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
	  -moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
	  box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
	}

	.page-login article .entry-title {
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

	.page-login article .entry-content .button {
		background: #a07d30;
		color: #fff;
		text-transform: uppercase;
		border: 0;
	  padding: 10px 15px;
		margin: 0 0 20px 0;
	}

	.page-login article .entry-content a {
		color: #a07d30;
		font-weight: 600;
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
	</style>

	<main id="primary" class="site-main page-login">

		<?php
		while ( have_posts() ) :
			the_post();-

			get_template_part( 'template-parts/content', 'page-login' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
