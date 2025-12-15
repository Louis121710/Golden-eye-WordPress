<?php
/**
 * The front page template file
 *
 * This template is used for the front page of the site
 *
 * @package Golden_Eye_Security
 */

get_header();
?>

<main id="main" class="site-main">
	<?php get_template_part( 'template-parts/content', 'home' ); ?>
</main>

<?php
get_footer();

