<?php
/**
 * Template for Infrastructure page
 *
 * @package Golden_Eye_Security
 */

get_header();
?>

<main id="main" class="site-main">
	<div class="container">
		<?php
		while ( have_posts() ) {
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'infrastructure-page' ); ?>>
				<!-- Hero Section -->
				<section class="page-hero">
					<h1 class="page-hero-title">Infrastructure & Operations</h1>
					<p class="page-hero-subtitle">State-of-the-art operational infrastructure supporting nationwide security services with reliable technology, modern resources, and comprehensive coverage.</p>
					
					<div class="hero-badges-inline">
						<span class="hero-badge-item">24/7 Control Room</span>
						<span class="hero-badge-item">Modern Fleet</span>
						<span class="hero-badge-item">Nationwide Coverage</span>
					</div>

					<div class="hero-features">
						<div class="hero-feature">
							<div class="hero-feature-icon">🏢</div>
							<div class="hero-feature-content">
								<div class="hero-feature-label">Facilities</div>
								<strong>Nationwide Presence</strong>
							</div>
						</div>
						<div class="hero-feature">
							<div class="hero-feature-icon">📡</div>
							<div class="hero-feature-content">
								<div class="hero-feature-label">Technology</div>
								<strong>Advanced Systems</strong>
							</div>
						</div>
						<div class="hero-feature">
							<div class="hero-feature-icon">🚗</div>
							<div class="hero-feature-content">
								<div class="hero-feature-label">Fleet</div>
								<strong>Modern Vehicles</strong>
							</div>
						</div>
					</div>
				</section>

				<!-- Main Content -->
				<section class="page-content-section">
					<h2 class="section-title">Operational Capabilities & Infrastructure</h2>
					<p class="section-intro">Golden Eye Security maintains comprehensive infrastructure to support our nationwide security operations and ensure reliable service delivery. Our operational capabilities are designed to provide rapid response, effective monitoring, and professional security services across all regions.</p>

					<div class="content-grid">
						<article class="content-card">
							<h3>Control Room Operations</h3>
							<p>24/7 operational control room equipped with advanced monitoring systems, communication infrastructure, and incident management capabilities for coordinated response. Our control room serves as the central hub for all security operations and emergency coordination.</p>
						</article>

						<article class="content-card">
							<h3>Response Vehicle Fleet</h3>
							<p>Modern, well-maintained response vehicles equipped with necessary security equipment, communication systems, and GPS tracking for rapid deployment. Our fleet is regularly serviced and upgraded to ensure reliability and efficiency in emergency response situations.</p>
						</article>

						<article class="content-card">
							<h3>Communication Systems</h3>
							<p>Robust communication infrastructure including digital radio systems, mobile communications, and integrated digital platforms for seamless coordination. Our communication systems ensure real-time information sharing and rapid response coordination across all operations.</p>
						</article>

						<article class="content-card">
							<h3>Regional Operations</h3>
							<p>Strategic regional offices and operational bases across key locations in South Africa to ensure local presence and rapid response capabilities. Our regional infrastructure supports localized service delivery while maintaining national standards.</p>
						</article>
					</div>

					<div class="coverage-section">
						<h3>Nationwide Coverage</h3>
						<div class="coverage-grid">
							<div class="coverage-item">
								<h4>North West Province</h4>
								<p><strong>Head Office:</strong> Lichtenburg<br>Comprehensive coverage across the province</p>
							</div>
							<div class="coverage-item">
								<h4>Western Cape</h4>
								<p><strong>Regional Office:</strong> Somerset West<br>Expanding coverage in the Cape region</p>
							</div>
							<div class="coverage-item">
								<h4>Free State</h4>
								<p><strong>Regional Operations:</strong> Bloemfontein<br>Strategic presence in central South Africa</p>
							</div>
						</div>
					</div>

					<div class="commitment-section">
						<h3>Infrastructure Excellence</h3>
						<p>Our investment in modern infrastructure and operational capabilities ensures we can deliver professional security services with reliability, efficiency, and rapid response times. We continuously upgrade our systems and facilities to maintain the highest standards of service delivery across all regions.</p>
					</div>
				</section>
			</article>
			<?php
		}
		?>
	</div>
</main>

<?php
get_footer();

