<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stanleywp
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div id="primary" class="content-area-full">
				<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() ); ?>
				
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							

					<?php the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>

						</div>
					</div>
				</div>

				<?php endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->

<?php
get_footer();
