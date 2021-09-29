<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>

<?php


get_header();

?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							
                            
								<div class="text">
									<h1>Sökresultat:</h1>
									
                            
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

<?php get_footer() ?>