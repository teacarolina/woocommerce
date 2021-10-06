

<?php
global $wp_query;
$total_results = $wp_query->found_posts;

?>

<?php


get_header();

?>
<main>
			<section>
				
					  
						<!-- <div class="col-xs-12">  -->
							
                            
						<?php

$args = array(
	's' =>$s,
										
			'post_type' => 'product'
			//'posts_per_page' => 12
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) { ?>
		<div class="row-search"> 
			<?php _e("<h2 style='font-weight:bold;color:#000'>Sökresultat för: ".get_query_var('s')."</h2>");?>
			</div> 
			<div class="container-search"> <?php 
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( "<h2 style='font-weight:bold;color:#000'>Sökresultat: Inga produkter hittade</h2>" );
		}
		wp_reset_postdata(); ?>

		
		<!-- </div> -->
	  
</div>
</section>
</main>

<?php get_footer() ?>