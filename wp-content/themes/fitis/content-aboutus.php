<div id="about-us" class="aboutus">

            <div class="title2">

                    About Us
                <img alt="ico muiten" class="muiten" src="<?php echo get_template_directory_uri(); ?>/images/ico.png" />

            </div>

            <div class="container">
                <div class="content_aboutus">
                    <?php 
                        $aboutus = get_post('61');
                        echo $aboutus->post_content;
                    ?>
                    
                    <div class="chuky">
                        <img alt="chữ ký" src="<?php echo get_template_directory_uri(); ?>/images/chuky.png" />
                    </div>
                </div>
            </div>
        </div>