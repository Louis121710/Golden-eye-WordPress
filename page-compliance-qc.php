<?php
/**
 * Template for Compliance & QC page
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
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'compliance-page' ); ?>>
				<!-- Hero Section -->
				<section class="page-hero">
					<h1 class="page-hero-title">Compliance & Quality Control</h1>
					<p class="page-hero-subtitle">Maintaining the highest standards of regulatory compliance and quality assurance to ensure exceptional service delivery and client satisfaction.</p>
					
					<div class="hero-badges-inline">
						<span class="hero-badge-item">PSiRA Registered</span>
						<span class="hero-badge-item">SAIDSA Member</span>
						<span class="hero-badge-item">Quality Assured</span>
					</div>

					<div class="hero-features">
						<div class="hero-feature">
							<div class="hero-feature-icon">📋</div>
							<div class="hero-feature-content">
								<div class="hero-feature-label">Registration</div>
								<strong>PSiRA Compliant</strong>
							</div>
						</div>
						<div class="hero-feature">
							<div class="hero-feature-icon">⭐</div>
							<div class="hero-feature-content">
								<div class="hero-feature-label">Standards</div>
								<strong>Quality Assured</strong>
							</div>
						</div>
						<div class="hero-feature">
							<div class="hero-feature-icon">🔄</div>
							<div class="hero-feature-content">
								<div class="hero-feature-label">Process</div>
								<strong>Continuous Monitoring</strong>
							</div>
						</div>
					</div>
				</section>

				<!-- Main Content -->
				<section class="page-content-section">
					<h2 class="section-title">Quality Control & Compliance Standards</h2>
					<p class="section-intro">Golden Eye Security maintains the highest standards of quality control and regulatory compliance to ensure exceptional service delivery and client satisfaction. Our comprehensive compliance framework ensures we meet and exceed all industry requirements.</p>

					<div class="content-grid">
						<article class="content-card">
							<h3>PSiRA Registration</h3>
							<p>Fully registered and compliant with the Private Security Industry Regulatory Authority (PSiRA) under registration number <strong>05 05 8 4 2228</strong>. All our security personnel are individually PSiRA registered and undergo regular compliance checks.</p>
						</article>

						<article class="content-card">
							<h3>SAIDSA Accreditation</h3>
							<p>Proud member of the South African Intruder Detection Services Association, adhering to industry best practices and standards for alarm monitoring and armed response services. Our SAIDSA membership ensures we maintain the highest operational standards.</p>
						</article>

						<article class="content-card">
							<h3>Quality Management</h3>
							<p>Comprehensive quality control systems with regular internal audits, performance monitoring, and continuous improvement processes to maintain service excellence. Our quality management framework ensures consistent service delivery across all operations.</p>
						</article>

						<article class="content-card">
							<h3>Legal Compliance</h3>
							<p>Strict adherence to all relevant legislation including the Private Security Industry Regulation Act, Occupational Health and Safety Act, and Labour Relations Act. We maintain up-to-date knowledge of all regulatory changes and requirements.</p>
						</article>
					</div>

					<div class="commitment-section">
						<h3>Our Compliance Commitment</h3>
						<p>At Golden Eye Security, compliance is not just a requirement – it's the foundation of our operational excellence. We are committed to maintaining the highest standards of regulatory compliance, quality control, and professional ethics in all our security services.</p>
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

