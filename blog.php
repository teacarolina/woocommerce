<?php
/*Template Name: Blog*/
get_header();?>


<main>
			<section>
				<div class = "tets"></div>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>BLOGG!</h1>
							<?php 
							// the query
							$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
							
							<?php if ( $wpb_all_query->have_posts() ) : ?>
							
							<ul>
							
								<!-- the loop -->
								<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
								<article class="article">
								<?php echo get_the_post_thumbnail(); ?>
								<h2 class="title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php get_the_date(); ?>
									</li>
								
									
								</ul>
								<?php echo get_the_excerpt(); ?>
							</article>
								<?php endwhile; ?>
								<!-- end of the loop -->
							
							</ul>
							
								<?php wp_reset_postdata(); ?>
							
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
							
						</div>
					
					</div>
				</div>
			</section>
		</main>



<script src="js/script.js"></script>
   <?php get_footer();?>
</html>
</body>