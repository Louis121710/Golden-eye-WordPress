<?php
/**
 * The template for displaying all single posts
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
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<div class="entry-meta">
						<span class="posted-on"><?php echo get_the_date(); ?></span>
					</div>
				</header>

				<div class="entry-content">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'golden-eye-security' ),
							'after'  => '</div>',
						)
					);
					?>
				</div>
			</article>
			<?php
		}
		?>
	</div>
</main>

<?php
get_footer();

