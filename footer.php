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
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'salwaweblab' ), 'salwaweblab', '<a href="https://github.com/Salwa-mansour">salwa</a>' );
						?>
			
				</div>
				
				<?php dynamic_sidebar( 'social-widget' ); ?>
			
		</div><!--git.site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
