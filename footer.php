<?php
/**
 * The footer template file
 *
 * Displays the site footer including:
 * - Company information
 * - Contact details
 * - Footer navigation menu
 * - Accreditation badges
 *
 * @package Golden_Eye_Security
 * @since 1.0.0
 */
?>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-content">
				<div class="footer-section">
					<?php
					$footer_logo_path = get_template_directory() . '/assets/images/golden-eye-logo.png';
					$footer_logo_url = get_template_directory_uri() . '/assets/images/golden-eye-logo.png';
					
					if ( has_custom_logo() ) {
						the_custom_logo();
					} elseif ( file_exists( $footer_logo_path ) ) {
						?>
						<img src="<?php echo esc_url( $footer_logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?> Logo" class="footer-logo">
						<?php
					} else {
						?>
						<h3><?php bloginfo( 'name' ); ?></h3>
						<?php
					}
					?>
					<p>Professional security solutions with nationwide coverage. PSiRA registered and SAIDSA accredited for complete peace of mind and comprehensive protection.</p>
				</div>

				<div class="footer-section">
					<h3>Head Office</h3>
					<p>Tel: <a href="tel:+27186326532">(018) 632 6532</a> / <a href="tel:+27186324637">(018) 632 4637</a></p>
					<p>Email: <a href="mailto:technical@goldeneyesecurity.co.za">technical@goldeneyesecurity.co.za</a></p>
				</div>

				<div class="footer-section">
					<h3>Quick Links</h3>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'container'      => false,
							'menu_class'     => 'footer-menu',
							'fallback_cb'    => false,
						)
					);
					?>
				</div>

				<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<div class="footer-section">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>

			<div class="footer-bottom">
				<p>&copy; <?php bloginfo( 'name' ); ?> <?php echo date( 'Y' ); ?> | Professional Security Services</p>
				<div class="footer-badges">
					<span class="footer-badge">PSiRA Registered</span>
					<span class="footer-badge">|</span>
					<span class="footer-badge">SAIDSA Member</span>
					<span class="footer-badge">|</span>
					<span class="footer-badge">Nationwide Coverage</span>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

