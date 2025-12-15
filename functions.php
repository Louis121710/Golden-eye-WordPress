<?php
/**
 * Golden Eye Security Theme Functions
 *
 * This file contains all theme functionality including:
 * - Theme setup and configuration
 * - Script and style enqueuing
 * - Menu and widget registration
 * - Form handling and security
 * - Custom page creation
 *
 * @package Golden_Eye_Security
 * @since 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Setup
 */
function golden_eye_security_setup() {
	// Add theme support for various features
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );

	// Register navigation menus
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'golden-eye-security' ),
		'footer'  => esc_html__( 'Footer Menu', 'golden-eye-security' ),
	) );

	// Set content width
	$GLOBALS['content_width'] = 1200;
}
add_action( 'after_setup_theme', 'golden_eye_security_setup' );

/**
 * Enqueue scripts and styles
 */
function golden_eye_security_scripts() {
	// Enqueue Google Fonts
	wp_enqueue_style( 'golden-eye-security-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap', array(), null );
	
	// Enqueue theme stylesheet with high priority
	wp_enqueue_style( 'golden-eye-security-style', get_stylesheet_uri(), array( 'golden-eye-security-fonts' ), wp_get_theme()->get( 'Version' ) ? wp_get_theme()->get( 'Version' ) : '1.1.0' );

	// Enqueue theme JavaScript
	wp_enqueue_script( 'golden-eye-security-script', get_template_directory_uri() . '/js/theme.js', array(), '1.1.0', true );
	
	// Add inline critical CSS as fallback
	$critical_css = "
		body { font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
		.site-header { background: #fff; box-shadow: 0 4px 16px rgba(0,0,0,0.12); border-bottom: 3px solid #d4af37; }
		.header-top { background: linear-gradient(135deg, #0a1f2e 0%, #0d2d47 100%); color: #fff; padding: 12px 0; }
		.hero-section { background: linear-gradient(135deg, #0a1f2e 0%, #0d2d47 50%, #1a4d7a 100%); color: #fff; padding: 120px 0; }
	";
	wp_add_inline_style( 'golden-eye-security-style', $critical_css );

	// Mobile menu functionality is handled in theme.js
}
add_action( 'wp_enqueue_scripts', 'golden_eye_security_scripts' );

/**
 * Register widget areas
 */
function golden_eye_security_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'golden-eye-security' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'golden-eye-security' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'golden-eye-security' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'golden-eye-security' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'golden-eye-security' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'golden-eye-security' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'golden-eye-security' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'golden-eye-security' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'golden_eye_security_widgets_init' );

/**
 * Handle Contact Form Submission
 */
function golden_eye_security_handle_contact_form() {
	if ( ! isset( $_POST['golden_eye_contact_nonce'] ) || ! wp_verify_nonce( $_POST['golden_eye_contact_nonce'], 'golden_eye_contact_action' ) ) {
		wp_die( 'Security check failed' );
	}

	// Honeypot check - if this field is filled, it's likely a bot
	if ( ! empty( $_POST['website_url'] ) ) {
		// Silently fail - don't let bots know they were caught
		wp_redirect( add_query_arg( 'contact', 'success', wp_get_referer() ) );
		exit;
	}

	// Bot verification check
	$user_answer = isset( $_POST['bot_verification'] ) ? intval( $_POST['bot_verification'] ) : 0;
	$correct_answer = isset( $_POST['verification_answer'] ) ? intval( $_POST['verification_answer'] ) : 0;
	$verification_hash = isset( $_POST['verification_hash'] ) ? sanitize_text_field( $_POST['verification_hash'] ) : '';

	// Verify the answer matches
	if ( $user_answer !== $correct_answer ) {
		wp_redirect( add_query_arg( 'contact', 'error', wp_get_referer() ) );
		exit;
	}

	// Verify hash to prevent tampering
	$expected_hash = wp_hash( $correct_answer . get_option( 'admin_email' ) );
	if ( $verification_hash !== $expected_hash ) {
		wp_redirect( add_query_arg( 'contact', 'error', wp_get_referer() ) );
		exit;
	}

	$first_name = sanitize_text_field( $_POST['first_name'] ?? '' );
	$last_name  = sanitize_text_field( $_POST['last_name'] ?? '' );
	$name       = trim( $first_name . ' ' . $last_name );
	$company    = sanitize_text_field( $_POST['company_name'] ?? '' );
	$email      = sanitize_email( $_POST['contact_email'] ?? '' );
	$phone      = sanitize_text_field( $_POST['contact_phone'] ?? '' );
	$services   = isset( $_POST['services'] ) ? array_map( 'sanitize_text_field', $_POST['services'] ) : array();
	$message    = sanitize_textarea_field( $_POST['contact_message'] ?? '' );

	// Email the site administrator
	$to      = get_option( 'admin_email' );
	$subject = 'New Contact Inquiry from ' . get_bloginfo( 'name' );
	$body    = "<h2>New Contact Inquiry</h2>";
	$body   .= "<p><strong>Name:</strong> $name</p>";
	if ( $company ) {
		$body .= "<p><strong>Company:</strong> $company</p>";
	}
	$body   .= "<p><strong>Email:</strong> $email</p>";
	if ( $phone ) {
		$body .= "<p><strong>Phone:</strong> $phone</p>";
	}
	if ( ! empty( $services ) ) {
		$body .= "<p><strong>Services Interested In:</strong> " . implode( ', ', $services ) . "</p>";
	}
	$body   .= "<p><strong>Message:</strong></p>";
	$body   .= "<p>" . nl2br( esc_html( $message ) ) . "</p>";

	$headers = array( 'Content-Type: text/html; charset=UTF-8', "From: $name <$email>" );

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_redirect( add_query_arg( 'contact', 'success', wp_get_referer() ) );
	} else {
		wp_redirect( add_query_arg( 'contact', 'error', wp_get_referer() ) );
	}
	exit;
}
add_action( 'admin_post_nopriv_golden_eye_contact_form', 'golden_eye_security_handle_contact_form' );
add_action( 'admin_post_golden_eye_contact_form', 'golden_eye_security_handle_contact_form' );

/**
 * Handle Quote Request Form Submission
 */
function golden_eye_security_handle_quote_form() {
	if ( ! isset( $_POST['golden_eye_quote_nonce'] ) || ! wp_verify_nonce( $_POST['golden_eye_quote_nonce'], 'golden_eye_quote_action' ) ) {
		wp_die( 'Security check failed' );
	}

	$name     = sanitize_text_field( $_POST['quote_name'] );
	$email    = sanitize_email( $_POST['quote_email'] );
	$phone    = sanitize_text_field( $_POST['quote_phone'] );
	$service  = sanitize_text_field( $_POST['quote_service'] );
	$location = sanitize_text_field( $_POST['quote_location'] );
	$message  = sanitize_textarea_field( $_POST['quote_message'] );

	// Email the site administrator
	$to      = get_option( 'admin_email' );
	$subject = 'New Quote Request from ' . get_bloginfo( 'name' );
	$body    = "Name: $name\n";
	$body   .= "Email: $email\n";
	$body   .= "Phone: $phone\n";
	$body   .= "Service: $service\n";
	$body   .= "Location: $location\n\n";
	$body   .= "Message:\n$message";

	$headers = array( 'Content-Type: text/html; charset=UTF-8', "From: $name <$email>" );

	$sent = wp_mail( $to, $subject, nl2br( $body ), $headers );

	if ( $sent ) {
		wp_redirect( add_query_arg( 'quote', 'success', wp_get_referer() ) );
	} else {
		wp_redirect( add_query_arg( 'quote', 'error', wp_get_referer() ) );
	}
	exit;
}
add_action( 'admin_post_nopriv_golden_eye_quote_form', 'golden_eye_security_handle_quote_form' );
add_action( 'admin_post_golden_eye_quote_form', 'golden_eye_security_handle_quote_form' );

/**
 * Default menu fallback
 */
function golden_eye_security_default_menu() {
	echo '<ul>';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/compliance-qc/' ) ) . '">Compliance & QC</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/training/' ) ) . '">Training</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/equity/' ) ) . '">Equity</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/infrastructure/' ) ) . '">Infrastructure</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/products-services/' ) ) . '">Products & Services</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/contact-us/' ) ) . '">Contact Us</a></li>';
	echo '</ul>';
}

/**
 * Create default pages on theme activation
 */
function golden_eye_security_create_pages() {
	$pages = array(
		array(
			'title'   => 'Contact Us',
			'slug'    => 'contact-us',
			'content' => '',
			'template' => 'page-contact.php',
		),
		array(
			'title'   => 'Request Quote',
			'slug'    => 'request-quote',
			'content' => '',
			'template' => 'page-request-quote.php',
		),
		array(
			'title'   => 'Products & Services',
			'slug'    => 'products-services',
			'content' => '',
			'template' => 'page-products-services.php',
		),
		array(
			'title'   => 'Compliance & QC',
			'slug'    => 'compliance-qc',
			'content' => '',
			'template' => 'page-compliance-qc.php',
		),
		array(
			'title'   => 'Training',
			'slug'    => 'training',
			'content' => '',
			'template' => 'page-training.php',
		),
		array(
			'title'   => 'Equity',
			'slug'    => 'equity',
			'content' => '',
			'template' => 'page-equity.php',
		),
		array(
			'title'   => 'Infrastructure',
			'slug'    => 'infrastructure',
			'content' => '',
			'template' => 'page-infrastructure.php',
		),
	);

	foreach ( $pages as $page ) {
		// Check if page already exists
		$page_check = get_page_by_path( $page['slug'] );
		
		if ( ! $page_check ) {
			$page_data = array(
				'post_title'   => $page['title'],
				'post_name'    => $page['slug'],
				'post_content' => $page['content'],
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_author'  => 1,
			);

			$page_id = wp_insert_post( $page_data );

			// Set page template if specified
			if ( $page_id && isset( $page['template'] ) ) {
				update_post_meta( $page_id, '_wp_page_template', $page['template'] );
			}
		}
	}
}

/**
 * Hook to create pages on theme activation
 */
add_action( 'after_switch_theme', 'golden_eye_security_create_pages' );

/**
 * Force update contact page template on admin init
 * This ensures the contact page always has the correct template
 */
function golden_eye_security_ensure_contact_template() {
	// Only run in admin
	if ( ! is_admin() ) {
		return;
	}
	
	// Find contact page
	$contact_page = get_page_by_path( 'contact-us' );
	if ( ! $contact_page ) {
		$contact_page = get_page_by_path( 'contact' );
	}
	
	if ( $contact_page ) {
		$current_template = get_page_template_slug( $contact_page->ID );
		if ( $current_template !== 'page-contact.php' ) {
			update_post_meta( $contact_page->ID, '_wp_page_template', 'page-contact.php' );
		}
	}
}
add_action( 'admin_init', 'golden_eye_security_ensure_contact_template' );

/**
 * Add custom body classes
 */
function golden_eye_security_body_classes( $classes ) {
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'golden_eye_security_body_classes' );

