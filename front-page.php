<?php
/*Template Name: Startsida*/
get_header();?>

<main>
	<section>
        <div class="container">
            <div class="row">
                <div class="col">
		            <div class="">
			            <!-- <img class="head-pic" src=" <?php /*echo get_home_url(); */ ?> wp-content/uploads/2021/09/champagner-1071356_1920.jpg" /> -->
                        <img id="head-pic" src="<?php echo get_template_directory_uri(); ?>/img/headchampagne.jpg" />
		            </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
		                    <div id="category-pics">

                    <?php
                 
                        echo do_shortcode('[product_categories]');
                    ?>

                </div>
                    </div>
                        </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
</main>

<?php
get_footer();?>