
<div class="well full-width">
<div class="banner">
	
		<div class="row justify-content-center">
			<div id="primary" class="content-area">
				<main id="main" class="site-main text-center" role="main">


					<?php
					while ( have_posts() ) : the_post(); ?>


						
						<img class="is-full" src="<?php echo get_template_directory_uri(); ?>/images/depan.jpg" 
    					alt="Facebook" />
					
						<?php 
						//get_template_part( 'template-parts/content', 'page' );

						

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div><!--  container -->
