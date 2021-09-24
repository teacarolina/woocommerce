<?php
get_header();?>


<h2>Våra butiker</h2>

<?php if(have_posts()) : while(have_posts()) : the_post();?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php
    echo '<div class="entry-content">';
    the_content();
    echo '</div>';
endwhile; endif;?>

<?php
get_footer();?>