<?php
get_header();?>

<h2>Våra butiker</h2>

<?php query_posts($query_string . '&orderby=title&order=ASC');?>
<?php if(have_posts()) : while(have_posts()) : the_post();?>
    <?php
    echo '<div class="entry-content">';?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php
    echo '</div>';
endwhile; endif;?>

<?php
get_footer();?>