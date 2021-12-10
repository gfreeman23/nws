<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NWS_2020
 */

 $years = get_field('years_of_partnership');
 $url = get_field('website_url');
 $tag= get_field('vintner_tag');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="vintner-thumbnail-wrap">
		<?php nws_2020_post_thumbnail(); ?>
	</div>

	<div class="entry-content">

		<?php if($url) { ?>
			<div class="vintner-url">
				<div class="button"><a href="<?php echo $url ?>">Visit Website</a></div>
			</div>
		<?php } ;?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php nws_2020_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
