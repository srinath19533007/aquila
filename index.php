<?php

/**
 * The Main Template File
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquila
 * @since Aquila 1.0
 */
?>
<?php get_header(); ?>
<div class="container text-center">
	<h1>
		<?php single_post_title(); ?>
	</h1>
	<div class="row">
		<?php $index = 0;
		$no_of_columns = 3; ?>
		<?php if (have_posts()):
			while (have_posts()):
				the_post(); ?>
				<?php if (0 === $index % $no_of_columns): ?>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<?php the_content();
						$index++; ?>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>