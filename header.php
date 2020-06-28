<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="wrapper" class="hfeed">
            <header id="header">
            <div class="container">
                <div id="branding">
                </div>
                <nav id="menu">
                <?php 
                        $image = get_field('header_afbeelding', 'option');
                        if( !empty( $image ) ): ?>
                            <img class="header-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                        <img class="header-flag" src="https://kameleons.globalgoalscommunity.eu/wp-content/uploads/2020/06/image-7.svg"/>
                </nav>
                <div class="mobilenav">
                <a href="#home" class="active"><img src="https://kameleons.globalgoalscommunity.eu/wp-content/uploads/2020/06/ggclogo-1.svg"></a>
                <div id="myLinks">
                    <a href="#aanmelden">Aanmelden</a>
                    <a href="#challenges">Challenges</a>
                    <a href="#sdgs">Laatste nieuws</a>
                    <a href="#info">Informatie over SDG's</a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
                </div>
                </div>
            </header>
        <div id="container">