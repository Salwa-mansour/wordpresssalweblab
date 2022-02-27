<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Salwaweblab
 */

?>
<section id="articles">
	<article id="post-<?php the_ID(); ?>" <?php post_class('home-article-box'); ?>>

		<?php salwaweblab_post_thumbnail(); ?>
		<header class="entry-header">

			<a href="<?php  esc_url( get_permalink() ); ?>">
				<span><?php esc_html_e('veiw project','salwaweblab' ); ?></span>
			</a>
		</header><!-- .entry-header -->



	</article><!-- #post-<?php the_ID(); ?> -->
</section>
<!--#articles-->
<a href="#">read more</a>
<section id="contact-me">

</section>