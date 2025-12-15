<?php
/**
 * The main template file
 *
 * @package Golden_Eye_Security
 */

get_header();
?>

<main id="main" class="site-main">
	<?php
	if ( is_front_page() ) {
		// Front page - use custom homepage template
		get_template_part( 'template-parts/content', 'home' );
	} elseif ( is_home() ) {
		// Blog page - show posts
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			}
		} else {
			get_template_part( 'template-parts/content', 'none' );
		}
	} else {
		// Standard page/post template
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			}
		} else {
			get_template_part( 'template-parts/content', 'none' );
		}
	}
	?>
</main>

<?php
get_footer();

