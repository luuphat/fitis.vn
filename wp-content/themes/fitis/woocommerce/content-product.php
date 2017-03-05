<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 3 );
}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] ) {
	$classes[] = 'first';
}
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
	$classes[] = 'last';
}
?>
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
            <?php the_title(); ?>
        </div>
    </li>
