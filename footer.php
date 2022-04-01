<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Salwaweblab
 */

?>

	<footer id="colophon" class="site-footer">
		 <div class="site-info">
			
				<div class="copy-rights">
					<p class="copy-write">
					<?php
				
	 esc_html_e( 'copy writes resvied for salwa '. comicpress_copyright(), 'salwaweblab' ) 
						?>
			</p><!--copy-write-->
				</div>
				
				<?php dynamic_sidebar( 'social-widget' ); ?>
			
		</div><!--git.site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
