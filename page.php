<?php
/**
 * Single Page Template
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
<div id="primary" class="container">
		<main id="main" class="site-main mt-5" role="main">
			<?php if ( have_posts() ) : ?>
				<div class="container">
					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header class="mb-5">
							<h1 class="page-title screen-reader-text">
								<?php single_post_title(); ?>
							</h1>
						</header>
						<?php endif; ?>

					<div class="row">
						<?php
						$index         = 0;
						$no_of_columns = 3;

						while ( have_posts() ) : the_post();

							if ( 0 === $index % $no_of_columns ) {
								?>
								<div class="col-lg-4 col-md-6 col-sm-12">
								<?php
							}

							get_template_part( 'template-parts/content' );

							$index ++;

							if ( 0 !== $index && 0 === $index % $no_of_columns ) {
								?>
								</div>
								<?php
							}

						endwhile;
						?>
					</div>
				</div>
			<?php

			else :

				get_template_part( 'template-parts/content-none' );

			endif;

			// aquila_pagination();
			?>
		</main>
</div>
<?php get_footer(); ?>