<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html <?php language_attributes();?>>
<head>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <meta charset="<?php bloginfo( 'charset' );?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<?php wp_body_open(); ?>
<!--Contenido del navegador y de la cabecera-->
<nav class="navbar navbar-expand-lg navbar-light bgazul ">
    <a class="navbar-brand text-light font-weight-bold" href="/">
        <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
                    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            }else{
                    echo  get_bloginfo( 'name' ) ;
            }       
        ?>
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <?php
            wp_nav_menu(array(
                'menu'            => 'menu-principal',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarNavDropdown',
                'menu_class'      => 'navbar-nav ml-auto',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'item_spacing'    => 'preserve',
                'depth'           => 0,
                'walker'          => '',
                'theme_location'  => '',
            )); ?>
        </ul>
    </div>
</nav>