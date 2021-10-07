<footer id="footer">
        
        <div class="row justify-content-around mb-0 pt-5 mx-4">
            
            <div class="col-xl-2 col-md-4 order-xl-1 order-4 mr-xl-0 my-auto">
                
                <ul class="list-unstyled mt-md-3 mt-5">
                    
                    <li class="li-footer">Sociala Medier</li>
                    
                    <li class="social li-footer"> 

 <?php dynamic_sidebar('social_media');?>
                </li>
                </ul>
                <ul class="list-unstyled my-xl-4 my-md-3">
                    <li class="li-footer">Copyright</li>
                    <li class="li-footer">&#9400; Porslin Arkivet 2021</li>
                </ul>
            </div>
            <div class="col-xl-2 col-md-3 pt-4 order-1">
                <ul class="list-unstyled">
              
                    <?php dynamic_sidebar('categories');?>
           
                </ul>
            </div>
      
            <div class="col-xl-auto col-md-3 pt-4 my-sm-0 order-md-3 order-sm-1 ">
                <ul class="list-unstyled">
               
                    <?php dynamic_sidebar('about_us');?>
                </ul>
            </div>
            <div class="col-xl-auto col-md-6 col-12 pt-4 my-sm-0 order-6 ">
            <label for="email" class="mb-3"><b>Prenumerera på vårt nyhetsbrev och få 10% rabatt</b></label>
            <ul class="list-unstyled"><?php dynamic_sidebar('newsletter');?></ul></div>
  
        </div>
        <div class="row justify-content-center px-3 py-3 pt-5">
            <div class="col text-center">
                <p class="mb-0">Detta är en testbutik gjord i utbildningssyfte.</p>
                <p>Grupp 11 - Emilia, Tea, Susanna, Ivy och Mohammed.</p>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>