 <div class="slide">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg" alt="The Last of us"></div>
                <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg" alt="The Last of us"></div>
                <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg" alt="The Last of us"></div>
            </div>
            <script>
                $(document).ready(function() {                
                  $("#owl-demo").owlCarousel({  
                    autoPlay: 3000, //Set AutoPlay to 3 seconds              
                    navigation : false, // Show next and prev buttons
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem:true                                
                  });
                });
            </script>
        </div>