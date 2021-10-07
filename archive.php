<?php
get_header();?>


<div class="container">
<h2>Våra butiker</h2>
  <div class="row">
      
<?php query_posts($query_string . '&orderby=title&order=ASC');?>
<?php if(have_posts()) : while(have_posts()) : the_post();?>

<div class="col">

    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <p><?php the_content();?></p>
</div>
    <?php
  
endwhile; endif;?>
</div></div>
<?php
get_footer();?>