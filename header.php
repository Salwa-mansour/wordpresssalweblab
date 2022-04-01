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
						<li class="menu-item"><a href="<?php esc_html_e(get_permalink( get_the_ID()));esc_html_e('#contact-me'); ?>"> contacat me</a></li>

					</ul>
	</nav><!-- #site-navigation -->
	<div id="page" class="site <?php if(is_single()){echo('single-work');} ?>">
		<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'salwaweblab' ); ?></a> -->

		<header id="masthead" class="site-header <?php if(!is_front_page()){echo('no-flex');} ?> ">
			<div class="nav-container">
				<a href="<?php echo esc_url( home_url( '/' ) );?>">
					<h1 class="site-icon">(^_<span class="rotate eye"><?php esc_html_e('*') ?></span> );</h1>
				</a>
			
			<div id="scroll-progress"></div>
			</div>
			

		</header><!-- #masthead -->