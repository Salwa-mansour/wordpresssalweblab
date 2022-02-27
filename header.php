<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Salwaweblab
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'salwaweblab' ); ?></a> -->

	<header id="masthead" class="site-header">
	<div class="nav-container">
	<h1 class="site-icon">(^_<span class="rotate eye">*</span> );</h1>
	<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
    </div>
            <!--nav-container-->
	<div class="header-info">
		<section class="site-branding">
				<h1 class="site-title" style="<?php esc_attr_e('display: none'); ?>" ><?php esc_html_e(bloginfo('name'),'salwaweblab' ); ?></h1>
				<h1 class="dev-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<span class="rotate-letter"><?php esc_html_e('H','salwaweblab' );?></span>
                        <span class="rotate-letter"><?php esc_html_e('i','salwaweblab' ); ?></span>,
                        <span class="rotate-letter"><?php esc_html_e('I\'','salwaweblab' );?></span>
                        <span class="rotate-letter"><?php esc_html_e('m','salwaweblab' );?></span>
                        <span class="rotate-letter"><?php esc_html_e('S','salwaweblab' );?></span>
                        <span class="rotate-letter"><?php esc_html_e('a','salwaweblab' );?></span>
                        <span class="rotate-letter"><?php esc_html_e('l','salwaweblab' );?></span>
                        <span class="rotate-letter"><?php esc_html_e('w','salwaweblab' );?></span>
                        <span class="rotate-letter"><?php esc_html_e('a','salwaweblab' );?></span>
			     </a></h1>
				
			
				<?php

			$salwaweblab_description = get_bloginfo( 'description', 'display' );
			if ( $salwaweblab_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $salwaweblab_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</section><!-- .site-branding -->
		<section class="header-slider">
                    slider here
                </section>
        </div><!--header-info-->
		
	</header><!-- #masthead -->
