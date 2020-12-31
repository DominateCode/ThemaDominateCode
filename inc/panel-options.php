<?php

function my_customize_register( $wp_customize ) {
    $wp_customize->add_panel( 'my_custom_options', array(
      'title' => __( 'Opciones de Tema', 'textdomain' ),
      'priority' => 160,
      'capability' => 'edit_theme_options',
    ));
    // Section header
    $wp_customize->add_section( 'header_section' , array(
      'title' => __( 'Header', 'textdomain' ),
      'panel' => 'my_custom_options',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));

    // Section para Acerca de
    $wp_customize->add_section( 'acercade_section' , array(
      'title' => __( 'Acerca de', 'textdomain' ),
      'panel' => 'my_custom_options',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));
  
    // Section para Nuestros servicios
    $wp_customize->add_section( 'servicios_section' , array(
      'title' => __( 'Nuestros servicios', 'textdomain' ),
      'panel' => 'my_custom_options',
      'priority' => 2,
      'capability' => 'edit_theme_options',
    ));

    // Section para Comenzar Proyecto
    $wp_customize->add_section( 'form_section' , array(
        'title' => __( 'Comenzar proyecto', 'textdomain' ),
        'panel' => 'my_custom_options',
        'priority' => 2,
        'capability' => 'edit_theme_options',
      ));
      
    // Section para Galeria de aplicaciones
    $wp_customize->add_section( 'galeria_section' , array(
        'title' => __( 'Galeria de aplicaciones', 'textdomain' ),
        'panel' => 'my_custom_options',
        'priority' => 2,
        'capability' => 'edit_theme_options',
      ));
    // Section para Articulos
    $wp_customize->add_section( 'articulos_section' , array(
        'title' => __( 'Articulos', 'textdomain' ),
        'panel' => 'my_custom_options',
        'priority' => 2,
        'capability' => 'edit_theme_options',
      ));
    //header header_section
    $wp_customize->add_setting('titulo_header',array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('titulo_header',array(
      'label' => __('Titulo','textdomain'),
      'section' => 'header_section',
      'priority' => 1,
      'type' => 'text'
    ));
    $wp_customize->add_setting('descrip_header',array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('descrip_header',array(
      'label' => __('texto breve','textdomain'),
      'section' => 'header_section',
      'priority' => 1,
      'type' => 'text'
    )); 
    $wp_customize->add_setting('link_header',array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('link_header',array(
      'label' => __('link btn','textdomain'),
      'section' => 'header_section',
      'priority' => 1,
      'type' => 'text'
    ));
    $wp_customize->add_setting('textbtn_header',array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('textbtn_header',array(
      'label' => __('Text boton','textdomain'),
      'section' => 'header_section',
      'priority' => 1,
      'type' => 'text'
    ));
    //Acerca de
    $wp_customize->add_setting('title_acercade',array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('title_acercade',array(
      'label' => __('Titulo','textdomain'),
      'section' => 'acercade_section',
      'priority' => 1,
      'type' => 'text'
    ));
    $wp_customize->add_setting( 'text_acercade', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('text_acercade', array(
      'label' => __( 'Texto breve', 'textdomain' ),
      'section' => 'acercade_section',
      'priority' => 3,
      'type' => 'textarea',
    ));
    $wp_customize->add_setting('img_acercade',
      array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
        'sanitize_callback' => 'absint'
      )
    );

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'img_acercade',
      array(
        'section' => 'acercade_section',
        'label' => __( 'Imagen', 'text-domain' ),
        'flex_width' => false,
        'flex_height' => false,
        'width' => 256,
        'height' => 137,
      ) 
    ));
    //Nuestros servicios
    //titulo
    $wp_customize->add_setting( 'title_servicio', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('title_servicio', array(
      'label' => __( 'Titulo', 'textdomain' ),
      'section' => 'servicios_section',
      'priority' => 2,
      'type' => 'text'
    ));  
    //descripcion
    $wp_customize->add_setting( 'descripcion_servicios', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
      ));
    
    $wp_customize->add_control('descripcion_servicios', array(
    'label' => __( 'Descripcion', 'textdomain' ),
    'section' => 'servicios_section',
    'priority' => 2,
    'type' => 'textarea',
    ));

    //servicio 1
    $wp_customize->add_setting( 'title_servicio1', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
      ));
    
    $wp_customize->add_control('title_servicio1', array(
    'label' => __( 'Titulo servicio 1', 'textdomain' ),
    'section' => 'servicios_section',
    'priority' => 2,
    'type' => 'text',
    ));
    $wp_customize->add_setting( 'text_servicio1', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
      ));
    
    $wp_customize->add_control('text_servicio1', array(
    'label' => __( 'Descripcion servicio 1', 'textdomain' ),
    'section' => 'servicios_section',
    'priority' => 3,
    'type' => 'textarea',
    ));
    $wp_customize->add_setting( 'url_servicio1', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('url_servicio1', array(
    'label' => __( 'Url servicio 1', 'textdomain' ),
    'section' => 'servicios_section',
    'priority' => 4,
    'type' => 'text',
    ));

    //servicio 2
    $wp_customize->add_setting( 'title_servicio2', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
      ));
    
    $wp_customize->add_control('title_servicio2', array(
    'label' => __( 'Titulo servicio 2', 'textdomain' ),
    'section' => 'servicios_section',
    'priority' => 5,
    'type' => 'text',
    ));
    $wp_customize->add_setting( 'text_servicio2', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
      ));
    
    $wp_customize->add_control('text_servicio2', array(
    'label' => __( 'Descripcion servicio 2', 'textdomain' ),
    'section' => 'servicios_section',
    'priority' => 6,
    'type' => 'textarea',
    ));
    $wp_customize->add_setting( 'url_servicio2', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('url_servicio2', array(
    'label' => __( 'Url servicio 2', 'textdomain' ),
    'section' => 'servicios_section',
    'priority' => 7,
    'type' => 'text',
    ));

    //servicio 3
    $wp_customize->add_setting( 'title_servicio3', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
      ));
    
    $wp_customize->add_control('title_servicio3', array(
    'label' => __( 'Titulo servicio 3', 'textdomain' ),
    'section' => 'servicios_section',
    'priority' => 8,
    'type' => 'text',
    ));
    $wp_customize->add_setting( 'text_servicio3', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
      ));
    
    $wp_customize->add_control('text_servicio3', array(
    'label' => __( 'Descripcion servicio 3', 'textdomain' ),
    'section' => 'servicios_section',
    'priority' => 9,
    'type' => 'textarea',
    ));
    $wp_customize->add_setting( 'url_servicio3', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('url_servicio3', array(
    'label' => __( 'Url servicio 3', 'textdomain' ),
    'section' => 'servicios_section',
    'priority' => 10,
    'type' => 'text',
    ));

    //comenzar proyecto
    $wp_customize->add_setting( 'titulo_formhome', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('titulo_formhome', array(
    'label' => __('Titulo', 'textdomain'),
    'section' => 'form_section',
    'priority' => 1,
    'type' => 'text',
    ));
    $wp_customize->add_setting('img_comenzarproyecto',
      array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
        'sanitize_callback' => 'absint'
      )
    );
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'img_comenzarproyecto',
      array(
        'section' => 'form_section',
        'label' => __( 'Imagen', 'text-domain' ),
        'flex_width' => false,
        'flex_height' => false,
        'width' => 300,
        'height' => 300,
      ) 
    ));
    //Seccion galeria de aplicaciones
    $wp_customize->add_setting( 'titulo_galeriahome', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('titulo_galeriahome', array(
      'label' => __('Titulo de Seccion Galeria de aplicaciones', 'textdomain'),
      'section' => 'galeria_section',
      'priority' => 1,
      'type' => 'text'
    ));

    $wp_customize->add_setting( 'descripcion_galeriahome', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
    ));
  
    $wp_customize->add_control('descripcion_galeriahome', array(
      'label' => __('Descripción de Seccion Galeria de aplicaciones', 'textdomain'),
      'section' => 'galeria_section',
      'priority' => 1,
      'type' => 'textarea'
    ));

    $wp_customize->add_setting( 'btn_url_galeriahome', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('btn_url_galeriahome', array(
    'label' => __('Url boton', 'textdomain'),
    'section' => 'galeria_section',
    'priority' => 1,
    'type' => 'text',
    ));
    $wp_customize->add_setting( 'btn_galeriahome', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('btn_galeriahome', array(
    'label' => __('Text boton', 'textdomain'),
    'section' => 'galeria_section',
    'priority' => 1,
    'type' => 'text',
    ));

    //Section ultimos articulos
    $wp_customize->add_setting( 'titulo_articuloshome', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('titulo_articuloshome', array(
    'label' => __('Titulo ultimos articulos', 'textdomain'),
    'section' => 'articulos_section',
    'priority' => 1,
    'type' => 'text',
    ));
  }
  add_action( 'customize_register', 'my_customize_register' );
?>