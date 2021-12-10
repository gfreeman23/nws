<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NWS_2020
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php	get_template_part( 'template-parts/vintner-header' ); ?>
			</header><!-- .page-header -->

			<?php	get_template_part( 'template-parts/vintner-nav' ); ?>

			<?php
			/* Start the Loop */

			echo "<div id='vintners-archive'>";

				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-vintner', get_post_type() );

				endwhile;

			echo "</div>";

			echo "<div class='pagination'>";

			nws_number_pagination();

			echo "</div>";

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

wp_enqueue_script( 'vintners-scripts', get_template_directory_uri() . '/js/scripts.js', array(), _S_VERSION, true );

get_footer();