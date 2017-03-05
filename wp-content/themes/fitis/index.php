<?php get_header(); ?>
<?php //get_header('slider'); ?>
<?php if( function_exists('cyclone_slider') ) cyclone_slider('main-slider'); ?>
<?php get_header('3product'); ?>

        <div class="nav_container" id="nav_container">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            <?php //get_header('menu'); ?>

        </div>
<div class="clear">
        <div class="slide_one_product">
            <?php if( function_exists('cyclone_slider') ) cyclone_slider('key-products'); ?>
        </div>

        <div class="container bg_white">
            <div class="title3">
                Featured Products
            </div>
            <ul class="any_product">
            <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2') ) : endif; ?>
            <?php
                $meta_query   = WC()->query->get_meta_query();
                $meta_query[] = array(
                    'key'   => '_featured',
                    'value' => 'yes'
                );
                $args = array(
                    'post_type'   =>  'product',
                    'stock'       =>  1,
                    'showposts'   =>  6,
                    'orderby'     =>  'date',
                    'order'       =>  'DESC',
                    'meta_query'  =>  $meta_query
                );

                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                    <li><div class="any_product_img_rate">
                        <?php 
                            if ( has_post_thumbnail( $loop->post->ID ) ) 
                                echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' ); 
                            else 
                                echo '<a><img alt="product" src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="65px" height="115px" /></a>'; 
                        ?>
                        <!--div class="cont">
                            <div class="stars">
                                <form action="">
                                    <input type="radio" name="star" id="star-5" class="star star-5">
                                    <label for="star-5" class="star star-5"></label>
                                    <input type="radio" name="star" id="star-4" class="star star-4">
                                    <label for="star-4" class="star star-4"></label>
                                    <input type="radio" name="star" id="star-3" class="star star-3">
                                    <label for="star-3" class="star star-3"></label>
                                    <input type="radio" name="star" id="star-2" class="star star-2">
                                    <label for="star-2" class="star star-2"></label>
                                    <input type="radio" name="star" id="star-1" class="star star-1">
                                    <label for="star-1" class="star star-1"></label>
                                </form>
                            </div>
                        </div-->
                        </div>
                        <?php 
                            echo $product->get_price_html(); 
                            //woocommerce_template_loop_add_to_cart( $loop->post, $product );
                        ?>
                        <div class="clear"></div>
                        <div class="any_product_name">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                    </li>

            <?php 
                endwhile;
                wp_reset_query();

            ?>
            
        </div>

        <?php get_template_part('content', 'aboutus'); ?>

        <?php get_template_part('content', 'contactus'); ?>

<?php get_footer(); ?>        