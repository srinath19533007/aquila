<?php

/**
 * The Main Template File
 *
 * @package Aquila
 * @since Aquila 1.0
 */
?>
<?php get_header(); ?>
<div class="container text-center">
	<h1><?php single_post_title(); ?></h1>
	<div class="row">
		<?php $index = 0;
		$no_of_columns = 3; ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php if (0 === $index % $no_of_columns) : ?>
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