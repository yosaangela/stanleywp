<div class="container">	
	<div class="col mt-5">
		<p>haii</p>
		<?php 
			//the query
			$args = array('post_type' => 'project', 'posts_per_page' => 6);

			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<div class="home-project">
						<?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
						<div class="clearfix">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
						<p>
							<?php echo mb_strimwidth(strip_tags( get_the_content() ), 0, 120, ' ... '); ?> 
							<a href="<?php the_permalink(); ?>"><?php _e('Read more', 'stanleywp' /* translatable string*/); ?></a>
						</p>
						</div>
					</div>

				 <?php endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
	</div><!--.row -->
</div><!--  .container -->
