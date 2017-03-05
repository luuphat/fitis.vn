<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Fitis</title>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="xuantuyen@live.com" name="author">
        <meta content="An Lập" name="keywords">
        <meta content="An Lập" name="description">
        <meta content="INDEX,FOLLOW" name="robots">
        <meta content="article" property="og:type">
        <meta content="http://fitis.vn/" property="og:url">
        <meta content="An Lập" property="og:title">
        <meta content="An Lập" property="og:description">

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link type="image/x-icon" rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/ico.png">       
        <?php wp_head(); ?>

    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="ftxtkey">
                    <form>
                        <input type="text" style="" id="txtkey" name="txtkey" value="">
                    </form>
                </div>
                <a class="header_search search" onclick="showtxtkey()">
                    <img alt="search" src="<?php echo get_template_directory_uri(); ?>/images/search.png" />
                    SEARCH
                </a>

                <a class="header_search search1 an" onclick="hidetxtkey()">
                    <img alt="search" src="<?php echo get_template_directory_uri(); ?>/images/search.png" />
                    SEARCH
                </a>

                <a class="header_phone" href="tel:+84909147247">
                    <img alt="hand phone" src="<?php echo get_template_directory_uri(); ?>/images/handphone.png" />
                    (+84)909 147 247
                </a>

                <div class="header_account">
                    <a>
                        MY ACCOUNT
                    </a>
                    <a>
                        MY WISH LIST
                    </a>
                    <a>
                        SHOPPING CART
                    </a>
                </div>
            </div>
        </div>
        <div class="main-content">