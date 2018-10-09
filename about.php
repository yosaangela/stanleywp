<?php
/**
 * Template Name: About
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stanleywp
 */

get_header(); ?>

	<div class="container">
		<div class="row justify-content-center">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'about' ); //the custom templates page

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
	</div>
</div>

<?php

		$leftcol = get_post_meta( get_the_ID(), '_stanleywp_left', true );
		$rightcol = get_post_meta( get_the_ID(), '_stanleywp_right', true );
			?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<p>left</p>
			<?php echo esc_html($leftcol); ?>
		</div>
		<div class="col-md-6">
			<p>right</p>
			<?php echo esc_html($rightcol); ?>
		</div>
	</div>
</div>

<?php
get_footer();
