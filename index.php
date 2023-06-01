<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Aquila
 * @since Aquila 1.0
 */
?>
<?php get_header(); ?>
<div class="content">
	<h1>Hello World</h1>
	<?php single_post_title(); ?>

	<?php
	if (have_posts()) {

		// Load posts loop.
		while (have_posts()) {
			the_post();

		}
	} else {

	}
	?>
</div>


<?php get_footer(); ?>