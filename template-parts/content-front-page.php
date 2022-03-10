<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Salwaweblab
 */

?>
	<div class="inview-container">
		<?php $classes = array('home-article-box'); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
			<!-- <article id="post-<?php the_ID(); ?>" <?php //post_class(['home-article-box' ,'drop-on-scroll']); ?>> -->

				<?php salwaweblab_post_thumbnail(); ?>
				<header class="entry-header">

					<a href="<?php  esc_url( get_permalink() ); ?>">
						<span><?php esc_html_e('veiw project','salwaweblab' ); ?></span>
					</a>
				</header><!-- .entry-header -->



			</article><!-- #post-<?php the_ID(); ?> -->

	</div><!--.inview-container-->
	