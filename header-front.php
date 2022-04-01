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
	<div id="top-back"></div>
	<div class="preloader">
		<div class="preloader-inner">
			<p class="preloader-caoMoji show">( ^_* );</p>
			<p id="preloader-text">salwa is coding
			
				 <span class="loader-dot"></span>
				 <span class="loader-dot"></span>
				 <span class="loader-dot"></span>
			</p>	
		</div>
	</div>
	<?php wp_body_open(); ?>
	<nav id="site-navigation" class="main-navigation">
					<a href="#top-back"><button class="menu-toggle" aria-controls="primary-menu"
							aria-expanded="false"><span class="dashicons dashicons-menu-alt"></span></button></a>
					<?php
			// wp_nav_menu(
			// 	array(
			// 		'theme_location' => 'menu-1',
			// 		'menu_id'        => 'primary-menu',
			// 	)
			// );
			?>
					<ul class="primary-menu">
						<li class="menu-item"><a href="<?php echo esc_url(home_url());esc_html_e('#top-back'); ?>"> about me</a></li>
						<li class="menu-item"><a href="<?php echo esc_url(home_url());esc_html_e('#articles'); ?>"> my work</a></li>
						<li class="menu-item"><a href="<?php echo esc_url(home_url());esc_html_e('#my-skills'); ?>"> my skills</a></li>
						<li class="menu-item"><a href="<?php echo esc_url(home_url());esc_html_e('#contact-me'); ?>"> contacat me</a></li>

					</ul>
	</nav><!-- #site-navigation -->
	<div id="page" class="site">
		<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'salwaweblab' ); ?></a> -->

		<header id="masthead" class="site-header">
			<div class="nav-container">
				<a href="<?php echo esc_url( home_url( '/' ) );?>">
					<h1 class="site-icon">(^_<span class="rotate eye"><?php esc_html_e('*') ?></span> );</h1>
				</a>
			
			<div id="scroll-progress"></div>
			</div>
			<!--nav-container-->
			<div class="header-info">
				<section class="site-branding">
					<h1 class="site-title" style="<?php esc_attr_e('display: none'); ?>">
						<?php esc_html_e(bloginfo('name'),'salwaweblab' ); ?></h1>
					<h1 class="dev-name">
						<span class="rotate-letter"><?php esc_html_e('H','salwaweblab' );?></span>
						<span class="rotate-letter"><?php esc_html_e('i','salwaweblab' ); ?></span>,
						<span class="rotate-letter"><?php esc_html_e('I\'','salwaweblab' );?></span>
						<span class="rotate-letter"><?php esc_html_e('m','salwaweblab' );?></span>
						<span class="rotate-letter"><?php esc_html_e('S','salwaweblab' );?></span>
						<span class="rotate-letter"><?php esc_html_e('a','salwaweblab' );?></span>
						<span class="rotate-letter"><?php esc_html_e('l','salwaweblab' );?></span>
						<span class="rotate-letter"><?php esc_html_e('w','salwaweblab' );?></span>
						<span class="rotate-letter"><?php esc_html_e('a','salwaweblab' );?></span>
						<span><?php esc_html_e('(〃＾▽＾〃);') ?></span>
					</h1>


					<?php

			$salwaweblab_description = get_bloginfo( 'description', 'display' );
			if ( $salwaweblab_description || is_customize_preview() ) :
				?>
					<p class="site-description">
						<?php echo $salwaweblab_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</p>
					<?php endif; ?>
				</section><!-- .site-branding -->
			
				<section class="wellcom">
					<img src="http://localhost:10052/wp-content/uploads/2022/03/myhand4.png" alt="" class="my-hand">
					<img src="http://localhost:10052/wp-content/uploads/2022/03/shakehand1.png" alt="" class="shake-hands">
					<span class="start-shaking">click the hand <span class="puppy-arrow">&#8595;</span></span>
					<img src="http://localhost:10052/wp-content/uploads/2022/03/yourhand.png" alt="" class="your-hand">
					<span class="meet">nice to meet you(✯◡✯)</span>
				</section><!--wellcom-->
				
			</div>
				<section class="side-contact">
					<a href="#contact-me" class="contact-link">hire me (◕‿◕);</a><!-- (✯◡✯); -->
				<?php dynamic_sidebar( 'social-widget' ); ?>
				</section><!--side-contact-->
			<!--header-info-->

		</header><!-- #masthead -->