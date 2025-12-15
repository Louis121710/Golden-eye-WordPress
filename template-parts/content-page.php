<?php
/**
 * Template part for displaying page content
 *
 * @package Golden_Eye_Security
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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

