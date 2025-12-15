<?php
/**
 * Template for Request Quote page
 *
 * @package Golden_Eye_Security
 */

get_header();
?>

<main id="main" class="site-main">
	<div class="container">
		<header class="page-header">
			<h1 class="page-title">Request a Quote</h1>
			<p class="page-subtitle">Get a customized security solution tailored to your specific needs and budget requirements</p>
		</header>

		<div style="max-width: 800px; margin: 40px auto;">
			<div class="quote-form">
				<?php
				if ( isset( $_GET['quote'] ) && $_GET['quote'] === 'success' ) {
					echo '<div class="form-message form-success">';
					echo 'Thank you! Your quote request has been submitted successfully. We will contact you shortly.';
					echo '</div>';
				} elseif ( isset( $_GET['quote'] ) && $_GET['quote'] === 'error' ) {
					echo '<div class="form-message form-error">';
					echo 'Sorry, there was an error submitting your quote request. Please try again.';
					echo '</div>';
				}
				?>
				<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
					<?php wp_nonce_field( 'golden_eye_quote_action', 'golden_eye_quote_nonce' ); ?>
					<input type="hidden" name="action" value="golden_eye_quote_form">
					
					<div class="form-group">
						<label for="quote_name">Name *</label>
						<input type="text" id="quote_name" name="quote_name" required>
					</div>
					
					<div class="form-group">
						<label for="quote_email">Email *</label>
						<input type="email" id="quote_email" name="quote_email" required>
					</div>
					
					<div class="form-group">
						<label for="quote_phone">Phone *</label>
						<input type="tel" id="quote_phone" name="quote_phone" required>
					</div>
					
					<div class="form-group">
						<label for="quote_service">Service Required *</label>
						<select id="quote_service" name="quote_service" required>
							<option value="">Select a service...</option>
							<option value="Modern Guarding Services">Modern Guarding Services</option>
							<option value="Armed Response">Armed Response</option>
							<option value="Electronic Security">Electronic Security</option>
							<option value="Risk Management">Risk Management</option>
							<option value="Multiple Services">Multiple Services</option>
							<option value="Other">Other</option>
						</select>
					</div>
					
					<div class="form-group">
						<label for="quote_location">Location *</label>
						<input type="text" id="quote_location" name="quote_location" placeholder="City, Province" required>
					</div>
					
					<div class="form-group">
						<label for="quote_message">Additional Details</label>
						<textarea id="quote_message" name="quote_message" placeholder="Tell us about your security needs..."></textarea>
					</div>
					
					<button type="submit" class="btn btn-primary">Request Quote</button>
				</form>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();

