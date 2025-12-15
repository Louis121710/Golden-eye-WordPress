<?php
/**
 * Script to update all pages with their correct templates
 * 
 * INSTRUCTIONS:
 * 1. Make sure you're logged into WordPress as an administrator
 * 2. Visit this URL in your browser: http://your-site.local/wp-content/themes/golden-eye-security/update-page-templates.php
 * 3. The script will update all pages automatically
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

$page_templates = array(
	'contact-us' => 'page-contact.php',
	'contact' => 'page-contact.php', // Alternative slug
	'request-quote' => 'page-request-quote.php',
	'products-services' => 'page-products-services.php',
	'compliance-qc' => 'page-compliance-qc.php',
	'training' => 'page-training.php',
	'equity' => 'page-equity.php',
	'infrastructure' => 'page-infrastructure.php',
);

echo '<h1>Updating Page Templates...</h1>';
echo '<style>
	body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
	.success { color: green; }
	.error { color: red; }
	.info { color: orange; }
	ul { list-style: none; padding: 0; }
	li { padding: 10px; margin: 5px 0; background: #f5f5f5; border-radius: 5px; }
</style>';
echo '<ul>';

$updated = 0;
$not_found = 0;
$errors = 0;

foreach ( $page_templates as $slug => $template ) {
	$page = get_page_by_path( $slug );
	
	if ( $page ) {
		$current_template = get_page_template_slug( $page->ID );
		
		if ( $current_template !== $template ) {
			$result = update_post_meta( $page->ID, '_wp_page_template', $template );
			
			if ( $result !== false ) {
				echo '<li class="success">✓ Updated: <strong>' . esc_html( $page->post_title ) . '</strong> → Template: ' . esc_html( $template ) . '</li>';
				$updated++;
			} else {
				echo '<li class="error">✗ Failed to update: ' . esc_html( $page->post_title ) . '</li>';
				$errors++;
			}
		} else {
			echo '<li class="info">○ Already correct: <strong>' . esc_html( $page->post_title ) . '</strong> (Template: ' . esc_html( $template ) . ')</li>';
		}
	} else {
		echo '<li class="error">✗ Page not found: ' . esc_html( $slug ) . '</li>';
		$not_found++;
	}
}

echo '</ul>';
echo '<hr>';
echo '<p><strong>Summary:</strong></p>';
echo '<ul>';
echo '<li>Updated: ' . $updated . ' pages</li>';
echo '<li>Already correct: ' . ( count( $page_templates ) - $updated - $not_found - $errors ) . ' pages</li>';
echo '<li>Not found: ' . $not_found . ' pages</li>';
if ( $errors > 0 ) {
	echo '<li>Errors: ' . $errors . ' pages</li>';
}
echo '</ul>';

if ( $not_found > 0 ) {
	echo '<p class="info">⚠️ Some pages were not found. You may need to create them first using the <a href="create-pages-now.php">create-pages-now.php</a> script.</p>';
}

echo '<p style="color: red; font-weight: bold; margin-top: 30px;">⚠️ IMPORTANT: Delete this file (update-page-templates.php) for security!</p>';
echo '<p><a href="' . admin_url( 'edit.php?post_type=page' ) . '">View All Pages</a> | <a href="' . home_url() . '">Visit Homepage</a></p>';

