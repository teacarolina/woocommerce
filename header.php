<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body class="woocommerce">

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>

<div class="super_container">
    <!-- Header -->
    <header class="header">
        <!-- Top Bar -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918577/phone.png" alt=""></div>+46 8 123 456 78
                        </div>
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918597/mail.png" alt=""></div>info@porslinarkivet.se
                        </div>
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_menu">
                                <ul class="standard_dropdown top_bar_dropdown">
                                  
                                </ul>
                            </div>
                            <div class="top_bar_user">
                                <div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
                                
                                <?php      
				//hämtar menu
wp_nav_menu( array( 
 'theme_location' => 'top_header',
    'container_class' => 'custom-menu-class' ) );   
    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Header Main -->
        <div class="header_main">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo"><h3 class="titleloggo">Porslin Arkivet</h3></div>
                        </div>
                    </div> <!-- Search -->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                <?php 
				//hämtar search från WP
				get_search_form();?>
                                       <div class="custom_dropdown" style="display: none;">
                                            <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">Alla kategorier</span> <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                <li><a class="clc" href="#">Kategorier</a></li>
                                                <li><a class="clc" href="#">Bestick</a></li>
                                                <li><a class="clc" href="#">Tallrikar</a></li>
                                                <li><a class="clc" href="#">Glas</a></li>
                                                </ul>
                                            </div>
                                        </div> 
                                </div>
                            </div>
                        </div>
                    </div> <!-- Wishlist -->
                    <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                
                            </div> <!-- Cart -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
                                        <div class="cart_count"><span><?php global $woocommerce; 
    echo $woocommerce->cart->cart_contents_count;?></span></div>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><?php       
				//hämtar menu
wp_nav_menu( array( 
    'theme_location' => 'middle_header', 
    'container_class' => 'custom-menu-class' ) );  ?></div>
                                        <div class="cart_price"><?php global $woocommerce; 
    //visar totalbelopp av varor *1.25 för att få med moms
    echo $woocommerce->cart->cart_contents_total*1.25; ?> SEK</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Main Navigation -->
        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main_nav_content d-flex flex-row">
                            <!-- Categories Menu -->
                            <!-- Main Nav Menu -->
                            <div class="main_nav_menu">
                                <ul class="standard_dropdown main_nav_dropdown">
                                <?php       
				//hämtar menu
wp_nav_menu( array( 
    'theme_location' => 'header', 
    'container_class' => 'custom-menu-class' ) );  ?>

                        

                                </ul>
                            </div> <!-- Menu Trigger -->
                            <div class="menu_trigger_container ml-auto">
                                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                    <div class="menu_burger">
                                        <div class="menu_trigger_text">menu</div>
                                        <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav> <!-- Menu -->
        <div class="page_menu">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page_menu_content">
                            <div class="page_menu_search">
                                <form action="#"> <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products..."> </form>
                            </div>
                            <ul class="page_menu_nav">
                                
                                <li class="page_menu_item"> <?php       
				//hämtar menu
wp_nav_menu( array( 
    'theme_location' => 'header', 
    'container_class' => 'custom-menu-class' ) );  ?> </li>
                                
                            </ul>
                            <div class="menu_contact">
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+46 8 123 456 78
                                </div>
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">info@porslinarkivet.se</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
   
</div>