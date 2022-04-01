<?php
/**
 * Salwaweblab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Salwaweblab
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function salwaweblab_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Salwaweblab, use a find and replace
		* to change 'salwaweblab' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'salwaweblab', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'salwaweblab' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'salwaweblab_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'salwaweblab_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function salwaweblab_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'salwaweblab_content_width', 640 );
}
add_action( 'after_setup_theme', 'salwaweblab_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function salwaweblab_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'salwaweblab' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'salwaweblab' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'socialmedia', 'salwaweblab' ),
			'id'            => 'social-widget',
			'description'   => esc_html__( 'socail media acconts', 'salwaweblab' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'contactform1', 'salwaweblab' ),
			'id'            => 'contact1-widget',
			'description'   => esc_html__( 'contact form short code acconts', 'salwaweblab' ),
			'before_widget' => '<div id="%1$s" class="widget-contact %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="section-title contact-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'salwaweblab_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function salwaweblab_scripts() {
	wp_enqueue_style( 'salwaweblab-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'salwaweblab-style', 'rtl', 'replace' );

	wp_enqueue_script( 'salwaweblab-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'salwaweblab-scroll', get_template_directory_uri() . '/js/scroll.js', 'jQuery', _S_VERSION, true );
	wp_enqueue_script( 'salwaweblab-hand-move', get_template_directory_uri() . '/js/hand.js', 'jQuery', _S_VERSION, true );
	wp_enqueue_script( 'salwaweblab-preloader', get_template_directory_uri() . '/js/prelaoder.js', 'jQuery', _S_VERSION, true );
	wp_enqueue_script( 'salwaweblab-send-form-ajax', get_template_directory_uri() . '/js/ajax-form.js', 'jQuery', _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'salwaweblab_scripts' );
function ww_load_dashicons(){
	wp_enqueue_style('dashicons');
 }
 add_action('wp_enqueue_scripts', 'ww_load_dashicons', 999);
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// ---------------ajax form----------------
function massege_sending(){
    $GLOBALS['$response'] = "";
 
    //function to generate response
    function my_contact_form_generate_response($type, $message){
   
    //  $GLOBALS['$response'];
   
      if($type == "success") $GLOBALS['$response'] = "<div class='contact-message success'>{$message}</div>";
      else $GLOBALS['$response'] = "<div class='contact-message error'>{$message}</div>";
      echo($GLOBALS['$response']);
      // echo('masswge funtcion firaed _');
     
    }
  
      //response messages
 
      $missing_content = "Please fill in empty fields.";
      $email_invalid   = "Email Address Invalid.";
      $message_unsent  = "Message was not sent. Try Again.";
      $message_sent    = "Thanks! Your message has been sent.";
      
      //user posted variables
      $name = $_POST['message_name'];
      $email = $_POST['message_email'];
      $message = $_POST['message_text'];
      // $human = $_POST['message_human'];
      
      //php mailer variables
      $to = get_option('admin_email');
      $subject = "Someone sent a message from ".get_bloginfo('name');
      $headers = 'From: '. $email . "\r\n" .
      'Reply-To: ' . $email . "\r\n";
// --------------------------------------------------------------  
            //validate presence of name and message
            if(empty($name) || empty($message)){
                my_contact_form_generate_response("error", $missing_content);
                // echo('empty');
            }
            else //ready to go!
            {
                        //send email
                        //validate email
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                    my_contact_form_generate_response("error", $email_invalid);
                    else //email is valid
                    {
                    //validate presence of name and message
                    //send email
                        $sent = wp_mail($to, $subject, strip_tags($message), $headers);
                        if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
                        else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
                    }

            }
            // --------------
          

  }

 add_action( 'wp_ajax_contactform_action', 'massege_sending' );
add_action( 'wp_ajax_nopriv_contactform_action', 'massege_sending' );
function comicpress_copyright() {
	// https://www.wpbeginner.com/wp-tutorials/how-to-add-a-dynamic-copyright-date-in-wordpress-footer/
	global $wpdb;
	$copyright_dates = $wpdb->get_results("
	SELECT
	YEAR(min(post_date_gmt)) AS firstdate,
	YEAR(max(post_date_gmt)) AS lastdate
	FROM
	$wpdb->posts
	WHERE
	post_status = 'publish'
	");
	$output = '';
	if($copyright_dates) {
	$copyright = "&copy; " . $copyright_dates[0]->firstdate;
	if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
	$copyright .= '-' . $copyright_dates[0]->lastdate;
	}
	$output = $copyright;
	}
	return $output;
	}