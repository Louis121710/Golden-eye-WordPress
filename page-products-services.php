<?php
/**
 * Template for Products & Services page
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
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'products-page' ); ?>>
				<!-- Hero Section -->
				<section class="page-hero">
					<h1 class="page-hero-title">Products & Services</h1>
					<p class="page-hero-subtitle">Comprehensive security solutions tailored to meet your specific needs, from manned guarding to advanced electronic systems and specialized security services.</p>
					
					<div class="hero-badges-inline">
						<span class="hero-badge-item">Manned Guarding</span>
						<span class="hero-badge-item">Electronic Security</span>
						<span class="hero-badge-item">Armed Response</span>
					</div>

					<div class="hero-features">
						<div class="hero-feature">
							<div class="hero-feature-icon">🛡️</div>
							<div class="hero-feature-content">
								<div class="hero-feature-label">Security</div>
								<strong>Manned Guarding</strong>
							</div>
						</div>
						<div class="hero-feature">
							<div class="hero-feature-icon">📹</div>
							<div class="hero-feature-content">
								<div class="hero-feature-label">Electronic</div>
								<strong>CCTV & Alarms</strong>
							</div>
						</div>
						<div class="hero-feature">
							<div class="hero-feature-icon">🚨</div>
							<div class="hero-feature-content">
								<div class="hero-feature-label">Response</div>
								<strong>24/7 Armed Response</strong>
							</div>
						</div>
					</div>
				</section>

				<!-- Main Content -->
				<section class="page-content-section">
					<h2 class="section-title">Our Comprehensive Security Solutions</h2>
					<p class="section-intro">Golden Eye Security offers a complete range of professional security services designed to protect your business, home, and assets. Our solutions combine manned security with advanced technology to provide comprehensive protection.</p>

					<div class="content-grid">
						<article class="content-card">
							<h3>Modern Guarding Services</h3>
							<p>Professional security officers providing static guarding, mobile patrols, and access control for commercial, industrial, and residential properties. Our guards are trained in modern security techniques and customer service.</p>
						</article>

						<article class="content-card">
							<h3>Armed Response</h3>
							<p>24/7 rapid armed response teams equipped to handle emergency situations, alarm activations, and provide immediate security assistance. Our response teams are trained in threat assessment and neutralization.</p>
						</article>

						<article class="content-card">
							<h3>CCTV Surveillance Systems</h3>
							<p>Advanced CCTV installation, monitoring, and maintenance with remote viewing capabilities and intelligent video analytics. Our systems include high-definition cameras and secure data storage.</p>
						</article>

						<article class="content-card">
							<h3>Access Control Systems</h3>
							<p>Electronic access control solutions including biometric systems, card access, and integrated security management platforms. Control and monitor entry points to your facilities with precision.</p>
						</article>

						<article class="content-card">
							<h3>Intruder Detection Systems</h3>
							<p>Comprehensive intruder detection systems with perimeter protection, motion sensors, and immediate alert capabilities. Advanced technology for early threat detection and prevention.</p>
						</article>

						<article class="content-card">
							<h3>Fire Detection & Prevention</h3>
							<p>Fire detection systems, smoke detectors, fire alarms, and emergency evacuation systems with integrated response protocols. Ensure comprehensive fire safety for your property.</p>
						</article>
					</div>

					<div class="specialized-services">
						<h3>Specialized Security Services</h3>
						<div class="services-categories">
							<div class="service-category">
								<h4>Electronic Security</h4>
								<ul>
									<li>CCTV Surveillance</li>
									<li>Access Control</li>
									<li>Intruder Detection</li>
									<li>Fire Detection Systems</li>
									<li>Public Address Systems</li>
								</ul>
							</div>
							<div class="service-category">
								<h4>Physical Security</h4>
								<ul>
									<li>Static Guarding</li>
									<li>Mobile Patrols</li>
									<li>Armed Response</li>
									<li>Access Control</li>
									<li>Perimeter Security</li>
								</ul>
							</div>
							<div class="service-category">
								<h4>Specialized Services</h4>
								<ul>
									<li>Security Investigations</li>
									<li>Risk Management</li>
									<li>Rural Security</li>
									<li>Event Security</li>
									<li>Consulting Services</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="commitment-section">
						<h3>Customized Security Solutions</h3>
						<p>At Golden Eye Security, we understand that every client has unique security requirements. Our approach involves comprehensive security assessment, customized solutions, integrated security approaches, and ongoing support to ensure your specific security needs are met with professionalism and expertise.</p>
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

