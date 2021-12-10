<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NWS_2020
 */

?>

	<footer id="footer" class="site-footer">
		<div class="site-info">
			<div id="footer-top">
				<div class="max-width">
					<div class="footer-top-left">
			      <p><a href="" target="_blank" rel="nofollow noopener"><img src="/wp-content/themes/nws-2020/images/social-icon-facebook.png" alt="Facebook Page" width="40" height="40"></a><a href="" target="_blank" rel="noopener"><img src="/wp-content/themes/nws-2020/images/social-icon-twitter.png" alt="Twitter Page" width="40" height="40"></a><a href="" target="_blank" rel="noopener"><img src="/wp-content/themes/nws-2020/images/social-icon-linkedin.png" alt="LinkedIn Page" width="40" height="40"></a><a href="" target="_blank" rel="noopener"><img src="/wp-content/themes/nws-2020/images/social-icon-instagram.png" alt="Instagram Page" width="40" height="40"></a></p>
			    </div>
			    <div class="footer-top-center">
						<a href="" target="_blank" rel="nofollow noopener">yourname@email.com</a> | 555.555.5555
			    </div>
			    <div class="footer-top-right">
			      <a href="" target="_blank" rel="nofollow noopener"><img src="/wp-content/themes/nws-2020/images/cureduchenne-logo-white.png" alt="White Logo"></a>
			    </div>
				</div>
			</div>
			<div id="footer-bottom">
				<div id="footer-nav-top"><?php wp_nav_menu( array( 'theme_location' => 'footer-nav-top' ) ); ?></div>
				<div id="footer-nav-bottom"><?php wp_nav_menu( array( 'theme_location' => 'footer-nav-bottom' ) ); ?></div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
