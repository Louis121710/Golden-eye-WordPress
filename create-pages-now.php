<?php
/**
 * Quick script to create pages immediately
 * 
 * INSTRUCTIONS:
 * 1. Access this file via your browser: http://your-site.local/wp-content/themes/golden-eye-security/create-pages-now.php
 * 2. Pages will be created automatically
 * 3. DELETE this file after use for security
 * 
 * @package Golden_Eye_Security
 */

// Load WordPress
require_once( '../../../wp-load.php' );

// Check if user is admin (security check)
if ( ! current_user_can( 'manage_options' ) ) {
	die( 'You must be logged in as an administrator to run this script.' );
}

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
		'content' => '<h2>Our Security Services</h2>
		<p>Golden Eye Security offers comprehensive security solutions tailored to protect your business, home, and assets with the highest professional standards and cutting-edge technology.</p>
		
		<h3>Modern Guarding Services</h3>
		<p>Professional security officers providing static guarding, mobile patrols, and access control for commercial, industrial, and residential properties with modern techniques.</p>
		
		<h3>Armed Response</h3>
		<p>24/7 rapid armed response teams ready to handle emergency situations with precision, professionalism, and immediate threat neutralization capabilities.</p>
		
		<h3>Electronic Security</h3>
		<p>Advanced CCTV surveillance, access control systems, and intruder detection technology for comprehensive property protection and remote monitoring.</p>
		
		<h3>Risk Management</h3>
		<p>Comprehensive risk assessment and management strategies tailored to your specific security needs and operational requirements for complete protection.</p>',
		'template' => 'page-products-services.php',
	),
	array(
		'title'   => 'Compliance & QC',
		'slug'    => 'compliance-qc',
		'content' => '<h2>Compliance & Quality Control</h2>
		<p>Golden Eye Security is committed to maintaining the highest standards of compliance and quality control in all our operations.</p>
		
		<h3>PSiRA Registration</h3>
		<p>We are fully registered with the Private Security Industry Regulatory Authority (PSiRA), ensuring all our security personnel meet the required professional standards.</p>
		
		<h3>SAIDSA Accreditation</h3>
		<p>As a member of the South African Intruder Detection Services Association (SAIDSA), we adhere to the highest industry standards and best practices.</p>
		
		<h3>Quality Assurance</h3>
		<p>Our comprehensive quality control systems ensure consistent service delivery and continuous improvement in all aspects of our security operations.</p>',
	),
	array(
		'title'   => 'Training',
		'slug'    => 'training',
		'content' => '<h2>Professional Security Training</h2>
		<p>Golden Eye Security provides comprehensive training programs to ensure our security personnel are equipped with the latest skills and knowledge.</p>
		
		<h3>Initial Training</h3>
		<p>All new security officers undergo rigorous initial training covering security protocols, emergency response, and customer service.</p>
		
		<h3>Ongoing Development</h3>
		<p>Continuous professional development ensures our team stays current with industry best practices and emerging security technologies.</p>
		
		<h3>Specialized Training</h3>
		<p>Specialized training programs are available for specific security roles including armed response, electronic security systems, and risk management.</p>',
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
		'content' => '<h2>Security Infrastructure</h2>
		<p>Golden Eye Security utilizes state-of-the-art infrastructure to deliver reliable and effective security services.</p>
		
		<h3>Technology Systems</h3>
		<p>Our advanced technology infrastructure includes integrated communication systems, monitoring centers, and response coordination platforms.</p>
		
		<h3>Fleet Management</h3>
		<p>Our modern fleet of response vehicles is equipped with GPS tracking and communication systems for rapid deployment and coordination.</p>
		
		<h3>Operations Centers</h3>
		<p>Our 24/7 operations centers serve as the nerve center for coordinating security services and emergency response across our service area.</p>',
	),
);

echo '<h1>Creating Pages...</h1>';
echo '<ul>';

$created = 0;
$skipped = 0;

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

		if ( $page_id && ! is_wp_error( $page_id ) ) {
			// Set page template if specified
			if ( isset( $page['template'] ) ) {
				update_post_meta( $page_id, '_wp_page_template', $page['template'] );
			}
			echo '<li style="color: green;">✓ Created: ' . esc_html( $page['title'] ) . ' (ID: ' . $page_id . ')</li>';
			$created++;
		} else {
			echo '<li style="color: red;">✗ Failed to create: ' . esc_html( $page['title'] ) . '</li>';
		}
	} else {
		echo '<li style="color: orange;">○ Already exists: ' . esc_html( $page['title'] ) . ' (ID: ' . $page_check->ID . ')</li>';
		$skipped++;
	}
}

echo '</ul>';
echo '<hr>';
echo '<p><strong>Summary:</strong> Created ' . $created . ' pages, ' . $skipped . ' already existed.</p>';
echo '<p style="color: red; font-weight: bold;">⚠️ IMPORTANT: Delete this file (create-pages-now.php) for security!</p>';
echo '<p><a href="' . admin_url( 'edit.php?post_type=page' ) . '">View All Pages</a> | <a href="' . home_url() . '">Visit Homepage</a></p>';

