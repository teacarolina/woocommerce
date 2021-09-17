<?php
function add_bootstrap(){
    wp_enqueue_style("bs_css", "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css");
}
add_action("wp_enqueue_scripts", "add_bootstrap");
?>