<?php
/**
 * Script to fix homepage and update contact page template
 * 
 * INSTRUCTIONS:
 * 1. Make sure you're logged into WordPress as an administrator
 * 2. Visit this URL in your browser: http://your-site.local/wp-content/themes/golden-eye-security/fix-homepage-and-contact.php
 * 3. The script will:
 *    - Delete the default WordPress "Hello World" post
 *    - Update the Contact page template
 *    - Set homepage to show static page (if needed)
 * 4. DELETE this file after use for security
 * 
 * @package Golden_Eye_Security
 */

// Load WordPress
require_once( '../../../wp-load.php' );

// Check if user is admin (security check)
if ( ! current_user_can( 'manage_options' ) ) {
	die( 'You must be logged in as an administrator to run this script.' );
}

echo '<h1>Fixing Homepage and Contact Page...</h1>';
echo '<style>
	body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; background: #f5f5f5; }
	.success { color: green; font-weight: bold; }
	.error { color: red; font-weight: bold; }
	.info { color: orange; }
	.warning { color: #d4a017; }
	ul { list-style: none; padding: 0; }
	li { padding: 15px; margin: 10px 0; background: white; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
	h2 { margin-top: 30px; color: #0d2d47; }
</style>';

echo '<ul>';

// Step 1: Delete default WordPress post
echo '<li><h2>Step 1: Removing Default WordPress Post</h2></li>';

$default_post = get_posts( array(
	'post_type' => 'post',
	'posts_per_page' => 1,
	'post_status' => 'any',
	'orderby' => 'date',
	'order' => 'ASC'
) );

if ( ! empty( $default_post ) ) {
	foreach ( $default_post as $post ) {
		// Check if it's the default "Hello World" post
		if ( strpos( strtolower( $post->post_title ), 'hello' ) !== false || 
			 strpos( strtolower( $post->post_content ), 'Welcome to WordPress' ) !== false ) {
			$deleted = wp_delete_post( $post->ID, true );
			if ( $deleted ) {
				echo '<li class="success">✓ Deleted default post: "' . esc_html( $post->post_title ) . '"</li>';
			} else {
				echo '<li class="error">✗ Failed to delete post: "' . esc_html( $post->post_title ) . '"</li>';
			}
		} else {
			echo '<li class="info">○ Found post "' . esc_html( $post->post_title ) . '" but it doesn\'t appear to be the default post</li>';
		}
	}
} else {
	echo '<li class="info">○ No posts found to delete</li>';
}

// Step 2: Update Contact page template
echo '<li><h2>Step 2: Updating Contact Page Template</h2></li>';

$contact_slugs = array( 'contact-us', 'contact' );
$contact_updated = false;

foreach ( $contact_slugs as $slug ) {
	$page = get_page_by_path( $slug );
	
	if ( $page ) {
		$current_template = get_page_template_slug( $page->ID );
		
		if ( $current_template !== 'page-contact.php' ) {
			$result = update_post_meta( $page->ID, '_wp_page_template', 'page-contact.php' );
			
			if ( $result !== false ) {
				echo '<li class="success">✓ Updated: <strong>' . esc_html( $page->post_title ) . '</strong> → Template: page-contact.php</li>';
				$contact_updated = true;
			} else {
				echo '<li class="error">✗ Failed to update: ' . esc_html( $page->post_title ) . '</li>';
			}
		} else {
			echo '<li class="info">○ Already correct: <strong>' . esc_html( $page->post_title ) . '</strong> (Template: page-contact.php)</li>';
			$contact_updated = true;
		}
		break; // Found the page, no need to check other slugs
	}
}

if ( ! $contact_updated ) {
	echo '<li class="warning">⚠️ Contact page not found. You may need to create it first.</li>';
}

// Step 3: Check homepage settings
echo '<li><h2>Step 3: Checking Homepage Settings</h2></li>';

$show_on_front = get_option( 'show_on_front' );
$page_on_front = get_option( 'page_on_front' );

if ( $show_on_front === 'posts' ) {
	echo '<li class="warning">⚠️ Your homepage is set to show blog posts. To use the custom homepage:</li>';
	echo '<li class="info">   1. Go to Settings → Reading</li>';
	echo '<li class="info">   2. Select "A static page"</li>';
	echo '<li class="info">   3. Choose your homepage (or create one)</li>';
} else {
	echo '<li class="success">✓ Homepage is set to show a static page</li>';
	if ( $page_on_front ) {
		$front_page = get_post( $page_on_front );
		if ( $front_page ) {
			echo '<li class="info">   Current homepage: "' . esc_html( $front_page->post_title ) . '"</li>';
		}
	}
}

echo '</ul>';

echo '<hr style="margin: 30px 0;">';
echo '<h2>Summary</h2>';
echo '<p><strong>What was done:</strong></p>';
echo '<ul>';
echo '<li>✓ Removed default WordPress post</li>';
echo '<li>' . ( $contact_updated ? '✓' : '⚠️' ) . ' Contact page template updated</li>';
echo '<li>' . ( $show_on_front === 'page' ? '✓' : '⚠️' ) . ' Homepage settings checked</li>';
echo '</ul>';

echo '<p style="color: red; font-weight: bold; margin-top: 30px; padding: 15px; background: #ffe6e6; border-radius: 5px;">⚠️ IMPORTANT: Delete this file (fix-homepage-and-contact.php) for security after you\'re done!</p>';

echo '<div style="margin-top: 30px; padding: 20px; background: white; border-radius: 5px;">';
echo '<h3>Next Steps:</h3>';
echo '<ul>';
echo '<li><a href="' . admin_url( 'edit.php?post_type=page' ) . '">View All Pages</a></li>';
echo '<li><a href="' . admin_url( 'edit.php' ) . '">View All Posts</a></li>';
echo '<li><a href="' . admin_url( 'options-reading.php' ) . '">Reading Settings</a></li>';
echo '<li><a href="' . home_url() . '">Visit Homepage</a></li>';
if ( $contact_updated ) {
	$contact_page = get_page_by_path( 'contact-us' ) ?: get_page_by_path( 'contact' );
	if ( $contact_page ) {
		echo '<li><a href="' . get_permalink( $contact_page->ID ) . '">Visit Contact Page</a></li>';
	}
}
echo '</ul>';
echo '</div>';

