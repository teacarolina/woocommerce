


<form action="#" class="header_search_form clearfix"> <input type="search" required="required" class="header_search_input" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Sök efter produkt..">
<div>
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <!-- <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" /> -->
        <!-- <input type="submit" id="searchsubmit"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" /> -->
    </div>

<button type="submit" class="header_search_button trans_300" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png" alt=""></button>
                                    </form>