<?php
/**
 * Force Update Contact Page Template
 * 
 * This script will find and update the contact page template
 * 
 * INSTRUCTIONS:
 * 1. Make sure you're logged into WordPress as an administrator
 * 2. Visit: http://your-site.local/wp-content/themes/golden-eye-security/force-update-contact.php
 * 3. DELETE this file after use
 * 
 * @package Golden_Eye_Security
 */

// Load WordPress
require_once( '../../../wp-load.php' );

// Check if user is admin
if ( ! current_user_can( 'manage_options' ) ) {
	die( 'You must be logged in as an administrator.' );
}

echo '<h1>Force Updating Contact Page...</h1>';
echo '<style>
	body { font-family: Arial, sans-serif; max-width: 900px; margin: 50px auto; padding: 20px; background: #f5f5f5; }
	.success { color: green; font-weight: bold; background: #d4edda; padding: 15px; border-radius: 5px; margin: 10px 0; }
	.error { color: red; font-weight: bold; background: #f8d7da; padding: 15px; border-radius: 5px; margin: 10px 0; }
	.info { color: #0c5460; background: #d1ecf1; padding: 15px; border-radius: 5px; margin: 10px 0; }
	.warning { color: #856404; background: #fff3cd; padding: 15px; border-radius: 5px; margin: 10px 0; }
	.code { background: #f4f4f4; padding: 10px; border-radius: 5px; font-family: monospace; margin: 10px 0; }
	ul { list-style: none; padding: 0; }
	li { padding: 10px; margin: 5px 0; }
</style>';

// Find contact page by multiple methods
$contact_page = null;
$found_method = '';

// Method 1: Try by slug
$slugs_to_try = array( 'contact-us', 'contact', 'contactus' );
foreach ( $slugs_to_try as $slug ) {
	$page = get_page_by_path( $slug );
	if ( $page ) {
		$contact_page = $page;
		$found_method = "Found by slug: '{$slug}'";
		break;
	}
}

// Method 2: Try by title
if ( ! $contact_page ) {
	$pages = get_pages( array(
		'meta_key' => '_wp_page_template',
		'meta_value' => 'page-contact.php'
	) );
	
	if ( empty( $pages ) ) {
		// Try finding by title
		$all_pages = get_pages();
		foreach ( $all_pages as $page ) {
			$title_lower = strtolower( $page->post_title );
			if ( strpos( $title_lower, 'contact' ) !== false ) {
				$contact_page = $page;
				$found_method = "Found by title: '{$page->post_title}'";
				break;
			}
		}
	} else {
		$contact_page = $pages[0];
		$found_method = "Found by existing template";
	}
}

if ( $contact_page ) {
	echo '<div class="success">✓ ' . esc_html( $found_method ) . '</div>';
	echo '<div class="info">Page ID: ' . $contact_page->ID . '<br>';
	echo 'Page Title: ' . esc_html( $contact_page->post_title ) . '<br>';
	echo 'Page Slug: ' . esc_html( $contact_page->post_name ) . '</div>';
	
	// Get current template
	$current_template = get_page_template_slug( $contact_page->ID );
	echo '<div class="info">Current Template: ' . ( $current_template ? esc_html( $current_template ) : 'Default' ) . '</div>';
	
	// Update template
	$result = update_post_meta( $contact_page->ID, '_wp_page_template', 'page-contact.php' );
	
	if ( $result !== false ) {
		echo '<div class="success">✓ SUCCESS! Contact page template updated to: page-contact.php</div>';
		
		// Verify it was updated
		$new_template = get_page_template_slug( $contact_page->ID );
		if ( $new_template === 'page-contact.php' ) {
			echo '<div class="success">✓ Verified: Template is now correctly set!</div>';
		} else {
			echo '<div class="warning">⚠️ Warning: Template might not have updated. Current: ' . esc_html( $new_template ) . '</div>';
		}
		
		// Clear any caches
		if ( function_exists( 'wp_cache_flush' ) ) {
			wp_cache_flush();
			echo '<div class="info">✓ WordPress cache cleared</div>';
		}
		
		echo '<div class="info">';
		echo '<strong>Next Steps:</strong><br>';
		echo '1. Clear your browser cache (Ctrl+F5 or Cmd+Shift+R)<br>';
		echo '2. Visit the contact page: <a href="' . get_permalink( $contact_page->ID ) . '" target="_blank">' . get_permalink( $contact_page->ID ) . '</a><br>';
		echo '3. If it still doesn\'t work, try visiting: <a href="' . get_permalink( $contact_page->ID ) . '?nocache=' . time() . '" target="_blank">Contact Page (No Cache)</a>';
		echo '</div>';
		
	} else {
		echo '<div class="error">✗ FAILED to update template. Please try manually.</div>';
		echo '<div class="info">';
		echo '<strong>Manual Steps:</strong><br>';
		echo '1. Go to <a href="' . admin_url( 'post.php?post=' . $contact_page->ID . '&action=edit' ) . '">Edit this page</a><br>';
		echo '2. In the right sidebar, find "Page Attributes"<br>';
		echo '3. Under "Template", select "Contact Page" or "page-contact.php"<br>';
		echo '4. Click "Update"';
		echo '</div>';
	}
	
} else {
	echo '<div class="error">✗ Contact page not found!</div>';
	echo '<div class="warning">';
	echo '<strong>Available Pages:</strong><br>';
	$all_pages = get_pages();
	if ( empty( $all_pages ) ) {
		echo 'No pages found.';
	} else {
		echo '<ul>';
		foreach ( $all_pages as $page ) {
			$template = get_page_template_slug( $page->ID );
			echo '<li>' . esc_html( $page->post_title ) . ' (Slug: ' . esc_html( $page->post_name ) . ', Template: ' . ( $template ? esc_html( $template ) : 'Default' ) . ')</li>';
		}
		echo '</ul>';
	}
	echo '</div>';
	
	echo '<div class="info">';
	echo '<strong>Create Contact Page:</strong><br>';
	echo '1. Go to <a href="' . admin_url( 'post-new.php?post_type=page' ) . '">Add New Page</a><br>';
	echo '2. Title: "Contact Us"<br>';
	echo '3. Slug: "contact-us"<br>';
	echo '4. Template: Select "Contact Page" or "page-contact.php"<br>';
	echo '5. Publish';
	echo '</div>';
}

echo '<hr style="margin: 30px 0;">';
echo '<div style="background: #fff3cd; padding: 20px; border-radius: 5px; border-left: 4px solid #ffc107;">';
echo '<strong style="color: #856404;">⚠️ SECURITY WARNING:</strong><br>';
echo 'Please DELETE this file (force-update-contact.php) after you\'re done for security!';
echo '</div>';

echo '<div style="margin-top: 20px;">';
echo '<a href="' . admin_url( 'edit.php?post_type=page' ) . '" style="padding: 10px 20px; background: #0d2d47; color: white; text-decoration: none; border-radius: 5px; margin-right: 10px;">View All Pages</a>';
if ( $contact_page ) {
	echo '<a href="' . get_permalink( $contact_page->ID ) . '" style="padding: 10px 20px; background: #d4af37; color: #0d2d47; text-decoration: none; border-radius: 5px; margin-right: 10px; font-weight: bold;">Visit Contact Page</a>';
}
echo '<a href="' . home_url() . '" style="padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 5px;">Visit Homepage</a>';
echo '</div>';

