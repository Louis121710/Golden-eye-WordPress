<?php
/**
 * Template part for displaying homepage content
 *
 * @package Golden_Eye_Security
 */
?>

<!-- Hero Section -->
<section class="hero-section">
	<div class="container">
		<div class="hero-content">
			<h1>Your Trusted Security Partner</h1>
			<p>Professional security solutions with nationwide coverage. PSiRA registered and SAIDSA accredited for complete peace of mind and comprehensive protection.</p>
			
			<div class="hero-badges">
				<div class="hero-badge">
					<div class="hero-badge-icon">🛡️</div>
					<h3>Accreditation</h3>
					<p>PSiRA Registered</p>
				</div>
				<div class="hero-badge">
					<div class="hero-badge-icon">⭐</div>
					<h3>Quality</h3>
					<p>SAIDSA Member</p>
				</div>
				<div class="hero-badge">
					<div class="hero-badge-icon">🌍</div>
					<h3>Coverage</h3>
					<p>Nationwide Service</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Services Section -->
<section class="services-section">
	<div class="container">
		<h2 class="section-title">Our Security Services</h2>
		<p class="section-subtitle">Comprehensive security solutions tailored to protect your business, home, and assets with the highest professional standards and cutting-edge technology.</p>
		
		<div class="services-grid">
			<div class="service-card">
				<div class="service-icon">👮</div>
				<h3>Modern Guarding Services</h3>
				<p>Professional security officers providing static guarding, mobile patrols, and access control for commercial, industrial, and residential properties with modern techniques.</p>
			</div>
			
			<div class="service-card">
				<div class="service-icon">🔫</div>
				<h3>Armed Response</h3>
				<p>24/7 rapid armed response teams ready to handle emergency situations with precision, professionalism, and immediate threat neutralization capabilities.</p>
			</div>
			
			<div class="service-card">
				<div class="service-icon">📹</div>
				<h3>Electronic Security</h3>
				<p>Advanced CCTV surveillance, access control systems, and intruder detection technology for comprehensive property protection and remote monitoring.</p>
			</div>
			
			<div class="service-card">
				<div class="service-icon">📊</div>
				<h3>Risk Management</h3>
				<p>Comprehensive risk assessment and management strategies tailored to your specific security needs and operational requirements for complete protection.</p>
			</div>
		</div>
	</div>
</section>

<!-- Features Section -->
<section class="features-section">
	<div class="container">
		<div class="features-grid">
			<div class="feature-item">
				<div class="feature-icon">⏰</div>
				<h4>24/7</h4>
				<p>Emergency Response</p>
			</div>
			
			<div class="feature-item">
				<div class="feature-icon">✅</div>
				<h4>100%</h4>
				<p>PSIRA Compliant</p>
			</div>
			
			<div class="feature-item">
				<div class="feature-icon">🌍</div>
				<h4>Nationwide</h4>
				<p>Service Coverage</p>
			</div>
			
			<div class="feature-item">
				<div class="feature-icon">📅</div>
				<h4>15+</h4>
				<p>Years Experience</p>
			</div>
		</div>
	</div>
</section>

<!-- CTA Section -->
<section class="cta-section">
	<div class="container">
		<div class="cta-content">
			<h2>Get Started Today</h2>
			<p>Take the first step towards comprehensive security protection with Golden Eye Security.</p>
			
			<div class="cta-buttons">
				<a href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>" class="btn btn-primary">Get Quote</a>
				<a href="tel:+27186326532" class="btn btn-secondary">Call Now</a>
				<a href="<?php echo esc_url( home_url( '/products-services/' ) ); ?>" class="btn btn-secondary">View Services</a>
			</div>
		</div>
	</div>
</section>

<?php
// Display any page content if set
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		if ( get_the_content() ) {
			?>
			<section class="page-content">
				<div class="container">
					<?php the_content(); ?>
				</div>
			</section>
			<?php
		}
	}
}
?>

