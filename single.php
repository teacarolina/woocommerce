<?php
get_header();?>

<main>
			<section>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<img src="<?php echo get_template_directory_uri(); ?>/img/image2vector.svg" />
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">

        <h1 class="nav-link">Låt dig inspireras av vår blogg</h1>
      </li>
</ul></div>
</nav>
</br></br>
				<div class = "tets"></div>
				<div class="container">
					<div class="row">
						
						<div class="col">
						<div class="header-pic">
</div></div>
						<div id="primary" class="col-xs-12 col-md-9">
						
                		
							<ul>
							
								<!-- the loop -->
                                <?php if(have_posts()) : while(have_posts()) : the_post(); 

?>								<div class="row">
								<div class="col-md-8">
								<h3 class="title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php the_date(); ?>
									</li>
								</ul>
							<?php echo get_the_post_thumbnail(); ?>
							</br></br>
								
								<div class="container"><p><?php the_content();?></p></div>
								<?php //the_excerpt(); ?>
							</div>
							</div>
								<?php endwhile; ?>
								<!-- end of the loop -->
							
							
							
								<?php wp_reset_postdata(); ?>
							
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
							
						</div>
					
					</div>
				</div>
			</section>
		</main>

   <?php get_footer();?>