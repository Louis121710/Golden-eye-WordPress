<?php
/**
 * The header template file
 *
 * Displays the site header including:
 * - Emergency hotline banner
 * - Logo and branding
 * - Primary navigation menu
 * - Mobile menu toggle
 *
 * @package Golden_Eye_Security
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="header-top">
			<div class="container">
				<div class="emergency-hotline">
					🚨 24/7 EMERGENCY HOTLINE: <a href="tel:+27186326532">(018) 632 6532</a>
				</div>
			</div>
		</div>

		<div class="header-main">
			<div class="container">
				<div class="header-content">
					<?php
					$logo_path = get_template_directory() . '/assets/images/golden-eye-logo.png';
					$logo_url = get_template_directory_uri() . '/assets/images/golden-eye-logo.png';
					
					if ( has_custom_logo() ) {
						the_custom_logo();
					} elseif ( file_exists( $logo_path ) ) {
						?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
							<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?> Logo" class="custom-logo">
						</a>
						<?php
					} else {
						?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
							<span class="site-title"><?php bloginfo( 'name' ); ?></span>
						</a>
						<?php
					}
					?>

					<?php
					$saidsa_logo_path = get_template_directory() . '/assets/images/saidsa-logo.png';
					$saidsa_logo_url = get_template_directory_uri() . '/assets/images/saidsa-logo.png';
					
					if ( file_exists( $saidsa_logo_path ) ) {
						?>
						<img src="<?php echo esc_url( $saidsa_logo_url ); ?>" alt="SAIDSA Accredited" class="saidsa-badge-logo">
						<?php
					} else {
						?>
						<span class="accreditation-badge">SAIDSA Accredited</span>
						<?php
					}
					?>

					<button class="menu-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'golden-eye-security' ); ?>" aria-expanded="false">
						<span class="menu-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
						<span class="menu-text">Menu</span>
					</button>

					<!-- Mobile Menu Overlay -->
					<div class="mobile-menu-overlay"></div>

					<nav id="site-navigation" class="main-navigation">
						<button class="menu-close" aria-label="<?php esc_attr_e( 'Close menu', 'golden-eye-security' ); ?>">✕</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_id'        => 'primary-menu',
								'container'      => false,
								'fallback_cb'    => 'golden_eye_security_default_menu',
							)
						);
						?>
						<div class="mobile-menu-footer">
							<a href="tel:+27186326532" class="mobile-emergency-btn">🚨 Emergency: (018) 632 6532</a>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>

