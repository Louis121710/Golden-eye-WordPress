<?php
/**
 * Template for Contact Us page
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
			<!-- Hero Section -->
			<section class="contact-hero">
				<h1 class="contact-hero-title">Contact Golden Eye Security</h1>
				<p class="contact-hero-subtitle">Get in touch with our team for professional security solutions. We operate nationwide with 24/7 support for all your security needs and emergency situations.</p>
				
				<div class="emergency-banner">
					<a href="tel:+27186326532" class="emergency-link">🚨 EMERGENCY HOTLINE: (018) 632 6532</a>
				</div>

				<div class="contact-quick-info">
					<div class="contact-info-card">
						<div class="contact-icon">📞</div>
						<div class="contact-info-content">
							<div class="contact-label">Head Office</div>
							<div class="contact-value">(018) 632 6532 / (018) 632 4637</div>
						</div>
					</div>
					<div class="contact-info-card">
						<div class="contact-icon">✉️</div>
						<div class="contact-info-content">
							<div class="contact-label">Email</div>
							<div class="contact-value"><a href="mailto:technical@goldeneyesecurity.co.za">technical@goldeneyesecurity.co.za</a></div>
						</div>
					</div>
					<div class="contact-info-card">
						<div class="contact-icon">📍</div>
						<div class="contact-info-content">
							<div class="contact-label">Postal Address</div>
							<div class="contact-value">PO Box 199, Lichtenburg, 2740</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Regional Offices Section -->
			<section class="regional-offices-section">
				<h2 class="section-title">Regional Offices</h2>
				<div class="offices-grid">
					<article class="office-card">
						<div class="office-badge">North West – Head Office</div>
						<h3>Lichtenburg Head Office</h3>
						<div class="office-details">
							<div class="office-detail-item">
								<strong>Tel:</strong> <a href="tel:+27186326532">(018) 632 6532</a> / <a href="tel:+27186324637">(018) 632 4637</a>
							</div>
							<div class="office-detail-item">
								<strong>Fax:</strong> (018) 632 4637
							</div>
							<div class="office-detail-item">
								<strong>Email:</strong> <a href="mailto:technical@goldeneyesecurity.co.za">technical@goldeneyesecurity.co.za</a>
							</div>
							<div class="office-detail-item">
								<strong>Postal:</strong> PO Box 199, Lichtenburg, 2740
							</div>
						</div>
					</article>

					<article class="office-card">
						<div class="office-badge">Western Cape</div>
						<h3>Somerset West</h3>
						<div class="office-details">
							<div class="office-detail-item">
								<strong>Contact:</strong> Mr. F. Hammann
							</div>
							<div class="office-detail-item">
								<strong>Tel:</strong> <a href="tel:+27764410549">076 441 0549</a>
							</div>
							<div class="office-detail-item">
								<strong>Fax:</strong> 086 276 1833
							</div>
							<div class="office-detail-item">
								<strong>Email:</strong> <a href="mailto:cpt@goldeneyesecurity.co.za">cpt@goldeneyesecurity.co.za</a>
							</div>
						</div>
					</article>

					<article class="office-card">
						<div class="office-badge">Free State</div>
						<h3>Bloemfontein</h3>
						<div class="office-details">
							<div class="office-detail-item">
								<strong>Contact:</strong> Mr. M. Tibakanye
							</div>
							<div class="office-detail-item">
								<strong>Tel:</strong> <a href="tel:+27823851228">082 385 1228</a>
							</div>
							<div class="office-detail-item">
								<strong>Email:</strong> <a href="mailto:technical@goldeneyesecurity.co.za">technical@goldeneyesecurity.co.za</a>
							</div>
						</div>
					</article>
				</div>
			</section>

			<!-- Contact Form Section -->
			<section class="contact-form-section">
				<h2 class="section-title">Send Us an Inquiry</h2>
				<p class="section-subtitle">Fill out the form below and our team will respond within 24 hours</p>

				<div class="contact-form-wrapper">
					<?php
					if ( isset( $_GET['contact'] ) && $_GET['contact'] === 'success' ) {
						echo '<div class="form-message form-success">';
						echo 'Thank you! Your inquiry has been sent successfully. We will respond within 24 hours.';
						echo '</div>';
					} elseif ( isset( $_GET['contact'] ) && $_GET['contact'] === 'error' ) {
						echo '<div class="form-message form-error">';
						echo 'Sorry, there was an error sending your inquiry. Please try again or contact us directly.';
						echo '</div>';
					}
					?>
					<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="contact-inquiry-form">
						<?php wp_nonce_field( 'golden_eye_contact_action', 'golden_eye_contact_nonce' ); ?>
						<input type="hidden" name="action" value="golden_eye_contact_form">
						
						<div class="form-row">
							<div class="form-group">
								<label for="first_name">First Name *</label>
								<input type="text" id="first_name" name="first_name" required>
							</div>
							
							<div class="form-group">
								<label for="last_name">Last Name *</label>
								<input type="text" id="last_name" name="last_name" required>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group">
								<label for="company_name">Company Name</label>
								<input type="text" id="company_name" name="company_name" placeholder="If applicable">
							</div>
							
							<div class="form-group">
								<label for="contact_email">Email Address *</label>
								<input type="email" id="contact_email" name="contact_email" required>
							</div>
						</div>

						<div class="form-group">
							<label for="contact_phone">Contact Number</label>
							<input type="tel" id="contact_phone" name="contact_phone" placeholder="+27 ...">
						</div>

						<div class="form-group">
							<label>Products & Services</label>
							<div class="services-checkboxes">
								<label class="checkbox-label">
									<input type="checkbox" name="services[]" value="Modern Guarding">
									<span>Modern Guarding</span>
								</label>
								<label class="checkbox-label">
									<input type="checkbox" name="services[]" value="Armed Response">
									<span>Armed Response</span>
								</label>
								<label class="checkbox-label">
									<input type="checkbox" name="services[]" value="Training">
									<span>Training</span>
								</label>
								<label class="checkbox-label">
									<input type="checkbox" name="services[]" value="CCTV">
									<span>CCTV</span>
								</label>
								<label class="checkbox-label">
									<input type="checkbox" name="services[]" value="Access Control Systems">
									<span>Access Control Systems</span>
								</label>
								<label class="checkbox-label">
									<input type="checkbox" name="services[]" value="Intruder Detection Systems">
									<span>Intruder Detection Systems</span>
								</label>
								<label class="checkbox-label">
									<input type="checkbox" name="services[]" value="Fire Detection Systems">
									<span>Fire Detection Systems</span>
								</label>
								<label class="checkbox-label">
									<input type="checkbox" name="services[]" value="Public Address / Evacuation Systems">
									<span>Public Address / Evacuation Systems</span>
								</label>
								<label class="checkbox-label">
									<input type="checkbox" name="services[]" value="Investigations">
									<span>Investigations</span>
								</label>
								<label class="checkbox-label">
									<input type="checkbox" name="services[]" value="Risk Management in Rural Areas">
									<span>Risk Management in Rural Areas</span>
								</label>
							</div>
						</div>

						<div class="form-group">
							<label for="contact_message">Message / Details *</label>
							<textarea id="contact_message" name="contact_message" rows="6" placeholder="Please share any specific requirements, timelines, or service requests. Our team will respond within 24 hours." required></textarea>
						</div>

						<!-- Honeypot field (hidden from users, bots might fill it) -->
						<div class="form-group honeypot-field" style="position: absolute; left: -9999px; opacity: 0; pointer-events: none;">
							<label for="website_url">Website URL</label>
							<input type="text" id="website_url" name="website_url" tabindex="-1" autocomplete="off">
						</div>

						<!-- Bot Verification -->
						<div class="form-group bot-verification">
							<?php
							// Generate random math question
							$num1 = rand( 1, 10 );
							$num2 = rand( 1, 10 );
							$answer = $num1 + $num2;
							// Store answer in session or use a hash
							$verification_hash = wp_hash( $answer . get_option( 'admin_email' ) );
							?>
							<label for="bot_verification">Security Verification *</label>
							<div class="verification-question">
								<p>To verify you're human, please solve this simple math problem:</p>
								<div class="math-question">
									<strong><?php echo esc_html( $num1 ); ?> + <?php echo esc_html( $num2 ); ?> = ?</strong>
								</div>
								<input type="text" id="bot_verification" name="bot_verification" required pattern="[0-9]+" title="Please enter the correct answer">
								<input type="hidden" name="verification_hash" value="<?php echo esc_attr( $verification_hash ); ?>">
								<input type="hidden" name="verification_answer" value="<?php echo esc_attr( $answer ); ?>">
							</div>
						</div>

						<button type="submit" class="btn btn-primary btn-submit">Send Inquiry</button>
					</form>
				</div>
			</section>
			<?php
		}
		?>
	</div>
</main>

<?php
get_footer();
