<?php
/*Template Name: About Us*/
get_header();?>


<main>
			<section>
	
				<div class="container">
					<div class="row">
						
						<div class="col">
						<div class="header-pic">
                    
                        <?php echo get_the_post_thumbnail(); ?>
<p><?php the_post_thumbnail_caption(); ?></p>
                      
</div></div>
						<div id="primary" class="col-xs-12 col-md-9">
						
							
							<ul>
			

<?php if(have_posts()) : while(have_posts()) : the_post();?>

								<div class="row">
								<div class="col-md-8">
								
							
								
								<div class="container"><p><?php the_content();?></p></div>
                               
							</div>
							</div><?php 
                        endwhile; endif;?>
							
						</div>
					
					</div>
                    
				</div>
                
			</section>
		</main>

   <?php get_footer();?>