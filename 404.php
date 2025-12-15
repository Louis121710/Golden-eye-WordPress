<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Golden_Eye_Security
 */

get_header();
?>

<main id="main" class="site-main">
	<div class="container">
		<section class="error-404 not-found" style="text-align: center; padding: 80px 0;">
			<header class="page-header">
				<h1 class="page-title" style="font-size: 72px; color: var(--primary-color); margin-bottom: 20px;">404</h1>
				<h2 class="page-title">Page Not Found</h2>
			</header>

			<div class="page-content" style="max-width: 600px; margin: 40px auto;">
				<p style="font-size: 18px; margin-bottom: 30px;">Sorry, the page you are looking for could not be found.</p>
				
				<div style="margin-top: 40px;">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Go to Homepage</a>
				</div>
			</div>
		</section>
	</div>
</main>

<?php
get_footer();

