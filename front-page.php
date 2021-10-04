<?php
/*Template Name: Startsida*/
get_header();?>

<main>
	<section>
        <div class="container">
            <div class="row">
                <div class="col">
		            <div class="header-pic">
			            <!-- <img class="head-pic" src=" <?php /*echo get_home_url(); */ ?> wp-content/uploads/2021/09/champagner-1071356_1920.jpg" /> -->
                        <img id="head-pic" src="<?php echo get_template_directory_uri(); ?>/img/headchampagne.jpg" />
                        <?php
                   
                 
                   //echo do_shortcode('[product_categories]');
               ?>
                    </div>
                    
                <!-- <div class="container">
                    <div class="row">
                        <div class="col">
		                    <div id="category-pics">
                            
                    

                </div>
                    </div>
                        </div>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <?php if(have_posts()) : while(have_posts()) : the_post(); the_content();?>
                            <?php
                    
                endwhile; endif;?>
	</section>
</main>

<?php
get_footer();?>