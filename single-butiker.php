<?php
get_header();?>

<h2>Vår butik</h2>

<? if(have_posts()) : while( have_posts() ): the_post();?>

<?php the_title();?>
<?php the_content();?>
 
<? endwhile; else: endif;?>

<?php
get_footer();?>