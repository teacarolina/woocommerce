<?php
/*Template Name: Startsida*/
get_header();

$data = get_field('kampanj', get_the_ID());
$data1 = get_field('kampanj2', get_the_ID());

?>

<main>
	<section class="container">
        <div class="container">
            <div class="row">
                <div class="col">
		            <div class="header-pic">
                        <img id="head-pic" src="<?php echo get_template_directory_uri(); ?>/img/headchampagne.jpg" />
                        
                        <?php
                            //echo do_shortcode('[product_categories]');
                        ?>
                    </div>
                    

                    </div>
                </div>
            </div>
        </div>
        <br/>
        <?php if(have_posts()) : while(have_posts()) : the_post(); the_content();?>
                            <?php
                    
                endwhile; endif;?>

            <div class="promo">
                <div class="wrapper" style = "background-image: url(<?php echo $data['image']['url'] ?>)">
                    <div class="text"><?= $data['text'] ?></div>
                    <div class="text2"><?= $data['text2'] ?></div>
                    <div class="text3"><?= $data['text_2'] ?></div>
                </div>
                <div class="wrapper" style = "background-image: url(<?php echo $data1['bild']['url'] ?>)">
                    <div class="text"><?= $data1['text3'] ?></div>
                    <a class="link" href="<?= $data1['link'] ?>">Till kampanjen</a>
                </div>
            </div>
	</section>
</main>

<?php
get_footer();?>