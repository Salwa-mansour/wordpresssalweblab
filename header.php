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
	<nav id="site-navigation" class="main-navigation">
		<a href="#top-back"><button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span
					class="dashicons dashicons-menu-alt"></span></button></a>
		<?php
			// wp_nav_menu(
			// 	array(
			// 		'theme_location' => 'menu-1',
			// 		'menu_id'        => 'primary-menu',
			// 	)
			// );
			?>
		<ul class="primary-menu">
			<li class="menu-item"><a href="#"> about me</a></li>
			<li class="menu-item"><a href="#"> my work</a></li>
			<li class="menu-item"><a href="#"> my skills</a></li>
			<li class="menu-item"><a href="#"> contacat me</a></li>

		</ul>
	</nav><!-- #site-navigation -->
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'salwaweblab' ); ?></a> -->

		<header id="masthead" class="site-header">
			<div class="nav-container">
				<a href="<?php echo esc_url( home_url( '/' ) );?>">
					<h1 class="site-icon">(^_<span class="rotate eye"><?php esc_html_e('*') ?></span> );</h1>
				</a>


			</div>
			<!--nav-container-->
			<div class="header-info">
				<section class="site-branding">
					<h1 class="site-title" style="<?php esc_attr_e('display: none'); ?>">
						<?php esc_html_e(bloginfo('name'),'salwaweblab' ); ?></h1>
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
					<p class="site-description">
						<?php echo $salwaweblab_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</p>
					<?php endif; ?>
				</section><!-- .site-branding -->
				<section class="header-slider">
					<div class="slider__warpper">
						<div class="flex__container flex--pikachu flex--active" data-slide="1">
							<div class="flex__item flex__item--left">
								<div class="flex__content">
									<p class="text--sub">Pokemon Gen I</p>
									<h1 class="text--big">Pikachu</h1>
									<p class="text--normal">Pikachu is an Electric-type Pokémon introduced in Generation
										I. Pikachu are small, chubby, and incredibly cute mouse-like Pokémon. They are
										almost completely covered by yellow fur.</p>
								</div>
								<p class="text__background">Pikachu</p>
							</div>
							<div class="flex__item flex__item--right"></div>
							<img class="pokemon__img" src="" />
						</div>
						<div class="flex__container flex--piplup animate--start" data-slide="2">
							<div class="flex__item flex__item--left">
								<div class="flex__content">
									<p class="text--sub">Pokemon Gen IV</p>
									<h1 class="text--big">Piplup</h1>
									<p class="text--normal">Piplup is the Water-type Starter Pokémon of the Sinnoh
										region. It was introduced in Generation IV. Piplup has a strong sense of
										self-esteem. It seldom accepts food that people give because of its pride.</p>
								</div>
								<p class="text__background">Piplup</p>
							</div>
							<div class="flex__item flex__item--right"></div>
							<img class="pokemon__img" src="" />
						</div>
						<div class="flex__container flex--blaziken animate--start" data-slide="3">
							<div class="flex__item flex__item--left">
								<div class="flex__content">
									<p class="text--sub">Pokemon Gen III</p>
									<h1 class="text--big">Blaziken</h1>
									<p class="text--normal">Blaziken is the Fire/Fighting-type Starter Pokémon of the
										Hoenn region, introduced in Generation III. Blaziken is a large, bipedal,
										humanoid bird-like Pokémon that resembles a rooster.</p>
								</div>
								<p class="text__background">Blaziken</p>
							</div>
							<div class="flex__item flex__item--right"></div>
							<img class="pokemon__img" src="" />
						</div>
						<div class="flex__container flex--dialga animate--start" data-slide="4">
							<div class="flex__item flex__item--left">
								<div class="flex__content">
									<p class="text--sub">Pokemon Gen IV</p>
									<h1 class="text--big">Dialga</h1>
									<p class="text--normal">Dialga is a Steel/Dragon-type Legendary Pokémon. Dialga is a
										sauropod-like Pokémon. It is mainly blue with some gray, metallic portions, such
										as its chest plate, which has a diamond in the center. It also has various,
										light blue lines all over
										its body.</p>
								</div>
								<p class="text__background">Dialga</p>
							</div>
							<div class="flex__item flex__item--right"></div>
							<img class="pokemon__img" src="" />
						</div>
						<div class="flex__container flex--zekrom animate--start" data-slide="5">
							<div class="flex__item flex__item--left">
								<div class="flex__content">
									<p class="text--sub">Pokemon Gen V</p>
									<h1 class="text--big">Zekrom</h1>
									<p class="text--normal">Zekrom is a Dragon/Electric-type Legendary Pokémon. It is
										part of the Tao Trio, along with Reshiram and Kyurem. Zekrom is a large, black
										draconian Pokémon that seems to share its theme with its counterpart, Reshiram.
										It has piercing red eyes and
										dark gray to black skin that seems to be armor-like.</p>
								</div>
								<p class="text__background">Zekrom</p>
							</div>
							<div class="flex__item flex__item--right"></div>
							<img class="pokemon__img" src="" />
						</div>
					</div>
					<!--slider-wrapper-->
					<div class="slider__navi">
						<a href="#" class="slide-nav active" data-slide="1">pikachu</a>
						<a href="#" class="slide-nav" data-slide="2">piplup</a>
						<a href="#" class="slide-nav" data-slide="3">blaziken</a>
						<a href="#" class="slide-nav" data-slide="4">dialga</a>
						<a href="#" class="slide-nav" data-slide="5">zekrom</a>
					</div>
				</section>
			</div>
			<!--header-info-->

		</header><!-- #masthead -->