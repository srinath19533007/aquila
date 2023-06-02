<?php
/**
 * The Main Template File
 *
 * @package Aquila
 * @since Aquila 1.0
 */
?>
<?php get_header(); ?>
<h1 class="text-center">
	<?php single_post_title(); ?>
</h1>
<div class="container">
	<?php $index = 0;
	$no_of_columns = 3; ?>
	<?php if (have_posts()): ?>
		<?php while (have_posts()):
			the_post(); ?>
			<?php if (0 === $index % $no_of_columns): ?>
				<div class="row">
				<?php endif; ?>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<?php get_template_part('template-parts/content'); ?>
				</div>
				<?php $index++;
				if (0 !== $index && 0 === $index % $no_of_columns): ?>
				</div>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php else: ?>
		<?php get_template_part('template-parts/content-none'); ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>