<?php
/*Template Name: Rea*/
get_header();?>


<main>
			<section>
	
				<div class="container">
	
				
			
							<div class="row">
<?php if(have_posts()) : while(have_posts()) : the_post();?>

								<h5><?php the_title();?></h5>
								<div class="col-sm">
								
							
								
								<p><?php the_content();?></p>
                               
							</div>
							</div><?php 
                        endwhile; endif;?>
							
						</div>
					
					</div>
                    
				</div>
                
			</section>
		</main>

   <?php get_footer();?>