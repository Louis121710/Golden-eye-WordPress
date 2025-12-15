<?php
/**
 * Template for Training page
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
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'training-page' ); ?>>
				<!-- Hero Section -->
				<section class="page-hero">
					<h1 class="page-hero-title">Training & Development</h1>
					<p class="page-hero-subtitle">Comprehensive training programs to ensure our security personnel are equipped with the latest skills, knowledge, and techniques in security services.</p>
					
					<div class="hero-badges-inline">
						<span class="hero-badge-item">PSiRA Certified</span>
						<span class="hero-badge-item">Continuous Development</span>
						<span class="hero-badge-item">Professional Standards</span>
					</div>

					<div class="hero-features">
						<div class="hero-feature">
							<div class="hero-feature-icon">🎓</div>
							<div class="hero-feature-content">
								<div class="hero-feature-label">Qualification</div>
								<strong>Certified Training</strong>
							</div>
						</div>
						<div class="hero-feature">
							<div class="hero-feature-icon">🔄</div>
							<div class="hero-feature-content">
								<div class="hero-feature-label">Continuous</div>
								<strong>Ongoing Development</strong>
							</div>
						</div>
						<div class="hero-feature">
							<div class="hero-feature-icon">📚</div>
							<div class="hero-feature-content">
								<div class="hero-feature-label">Curriculum</div>
								<strong>Comprehensive Programs</strong>
							</div>
						</div>
					</div>
				</section>

				<!-- Main Content -->
				<section class="page-content-section">
					<h2 class="section-title">Professional Security Training Programs</h2>
					<p class="section-intro">Golden Eye Security invests significantly in continuous training and development to ensure our personnel are equipped with the latest skills, knowledge, and techniques required for professional security services. Our training programs are designed to meet PSiRA requirements and industry best practices.</p>

					<div class="content-grid">
						<article class="content-card">
							<h3>Basic Security Training</h3>
							<p>Comprehensive foundational training covering security fundamentals, legal aspects, communication skills, and basic operational procedures as required by PSiRA. All security officers complete this mandatory training before deployment.</p>
						</article>

						<article class="content-card">
							<h3>Specialized Skills Development</h3>
							<p>Advanced training in electronic security systems, armed response tactics, risk assessment methodologies, and specialized security scenarios. Includes hands-on training with modern security equipment and technology.</p>
						</article>

						<article class="content-card">
							<h3>Continuous Professional Development</h3>
							<p>Ongoing training programs to keep personnel updated with evolving security threats, new technologies, and changing regulatory requirements. Regular refresher courses and skill enhancement workshops.</p>
						</article>

						<article class="content-card">
							<h3>Leadership & Management Training</h3>
							<p>Management and leadership training programs for supervisory and management positions, focusing on operational excellence, team leadership, and strategic security management.</p>
						</article>
					</div>

					<div class="commitment-section">
						<h3>Training Excellence Commitment</h3>
						<p>Our training programs are developed and delivered by experienced security professionals with extensive industry knowledge. We maintain comprehensive training records and certifications for all personnel, ensuring they are always prepared to handle security challenges with professionalism and expertise.</p>
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

