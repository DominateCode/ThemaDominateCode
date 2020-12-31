<?php
    function theme_img_aboutus() {
        $id = get_theme_mod('img_acercade');
        if ($id != 0) {
            $url = wp_get_attachment_url($id);
            echo '<div class="aligncenter wp-block-image">';
            echo '<img width="256" height="137" src="' . $url . '" alt="" />';
            echo '</div>';
        }
    }
    function theme_img_formhomeproyect(){
        $id = get_theme_mod('img_comenzarproyecto');
        if ($id != 0) {
            $url = wp_get_attachment_url($id);
            echo '<div class="aligncenter wp-block-image">';
            echo '<img width="300" height="300" src="' . $url . '" alt="" />';
            echo '</div>';
        }
    }
    function get_theme_text($control){
        echo get_theme_mod($control);
    }
?>