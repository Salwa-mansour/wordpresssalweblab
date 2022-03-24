<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Salwaweblab
 */

get_header();
?>

<main id="primary" class="site-main">
	<section id="articles">

		<h1 class="section-title ">my works (＠＾▽＾＠);</h1>
		<div class="inner-flex">

			<?php
		if ( have_posts() ) :

			
				?>


			<?php
	

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'front-page' );

			endwhile;

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
		<!--inner-flex-->

	</section>
	<!--#articles-->
	<!-- <a href="#">read more</a> -->
	<section class="my-skills">
		<h2 class="section-title">my skills ヽ(o^ ^o)ﾉ</h2>
		<div class="skill-borgress-circles">
				<div class="skill html">
					<div class="borgress-circle">
						<div class="inner-circle"> <span class="skill-persentage">90%</span> </div>
					</div>
					<span class="skill-title">html</span>
				</div>
				<!--html-->

				<div class="skill css">
					<div class="borgress-circle">
						<div class="inner-circle"> <span class="skill-persentage">90%</span> </div>
					</div>
					<span class="skill-title">css</span>

				</div>
				<!--css-->

				<div class="skill javascript">
					<div class="borgress-circle">
						<div class="inner-circle"> <span class="skill-persentage">50%</span> </div>
					</div>
					<span class="skill-title">javascript</span>

				</div>
				<!--javascript -->

				<div class="skill wordpress">
					<div class="borgress-circle">
						<div class="inner-circle"> <span class="skill-persentage">80%</span> </div>
					</div>
					<span class="skill-title">wordpress</span>

				</div>
				<!--wordpress -->
			
		</div><!-- skill-borgress-circles-->
	</section>
	<?php dynamic_sidebar( 'contact1-widget' ); ?>
	<!-- <section id="contact-me">
		<h1 class="section-title">contact me (*^^*);</h1>
		<p>Have a question or want to work together?</p>
	<?php	//get_template_part( 'template-parts/content', 'contact' ); ?>
	</section> -->
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();