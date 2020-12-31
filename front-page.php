<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();?>

<!-- contenido -->
    <div class="cabecera bgazul">
        <div class="position-relative overflow-hidden p-3 p-md-5 text-center">
            <div class="p-lg-5 mx-auto my-5 bgazul context">
                <h1 class="display-4 font-weight-normal"><?php get_theme_text('titulo_header');?></h1>
                <p style="font-size:25px;"><?php get_theme_text('descrip_header');?></p>
                <a class="btn btn-outline-light" href="<?php get_theme_text('link_header');?>"><?php get_theme_text('textbtn_header');?></a>
            </div>
            <div class="devices">
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            </div>
        </div>
    </div>

    <div class="introduccion p-5">
        <h2 class="text-center  colorazul font-weight-bold"><?php get_theme_text('title_acercade');?></h2>
        <div class="row my-5">
            <div class="col-lg-6">
                <?php theme_img_aboutus(); ?>
            </div>
            <div class="col-lg-6">
                <p><?php get_theme_text('text_acercade');?></p> 
            </div>
        </div>
    </div>

    <div class="py-4 servicios sombra-interior bgazul">
        <div class="titulo text-white text-center">
            <h2 style="font-weight:bold;"><?php get_theme_text('title_servicio');?></h2>
            <p><?php get_theme_text('descripcion_servicios');?></p>
        </div>
        <div class="mt-5 px-5 justify-content-center text-center mt-3 mb-5 section-services">
            <div class="card-deck mt-4">
                <div class="card card-h shadow ">
                    <a href="<?php get_theme_text('url_servicio1');?>" class="cs">
                        <div class="card-body">
                            <i class="fa fa-android" style="font-size:36px"></i>
                            <h5 class="card-title mt-3"><strong><?php get_theme_text('title_servicio1');?></strong></h5>
                            <p class="card-text"><?php get_theme_text('text_servicio1');?></p>
                        </div>
                    </a>
                </div>
                <div class="card card-h shadow">
                    <a href="<?php get_theme_text('url_servicio2');?>" class="cs">
                    <div class="card-body">
                        <i class="fa fa-file-text" style="font-size:36px"></i>
                        <h5 class="card-title mt-3"><strong><?php get_theme_text('title_servicio2');?></strong></h5>
                        <p class="card-text"><?php get_theme_text('text_servicio2');?></p>
                    </div>
                    </a>
                </div>
                <div class="card card-h shadow">
                    <a href="<?php get_theme_text('url_servicio3');?>" class="cs">
                    <div class="card-body">
                        <i class="fa fa-code" style="font-size:36px"></i>
                        <h5 class="card-title mt-3"><strong><?php get_theme_text('title_servicio3');?></strong></h5>
                        <p class="card-text"><?php get_theme_text('text_servicio3');?></p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="formcomenzar">
        <div class="p-5">
            <h2 class="text-center colorazul font-weight-bold"><?php get_theme_text('titulo_formhome');?></h2>
            <div class="row my-5">
                <div class="col-lg 6">
                <?php theme_img_formhomeproyect();?>
                </div>
                <div class="col-lg-6">
                    <form  action="/#wpcf7-f1267-p92-o1" method="post" novalidate="novalidate" data-status="init">
                        <label for="your-name">Tu nombre (obligatorio)</label>
                        <input type="text" class="form-control" name="your-name" aria-required="true"><br>
                        <label for="">Tu correo electrónico (obligatorio)</label>
                        <input type="text" class="form-control" name="your-email" aria-required="true"><br>
                        <label for="">Tu numero de teléfono (oblicatorio)</label>
                        <input type="text" class="form-control" aria-required="true"><br>
                        <input type="submit" class="btn btn-primary" name="your-tel" value="Enviar">
                        <span class="ajax-loader"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="homecaleria bgazul sombra-interior text-center p-5 text-white">
        <h2 class="font-weight-bold"><?php get_theme_text('titulo_galeriahome');?></h2>
        <p><?php get_theme_text('descripcion_galeriahome');?></p>
        <a href="<?php get_theme_text('btn_url_galeriahome');?>" class="btn btn-outline-light rounded-pill border-white"><?php get_theme_text('btn_galeriahome');?></a>
    </div>

    <div class="homeblog">
        <div class="p-5">
            <!--<h2 class="text-center colorazul font-weight-bold"><?php //get_theme_text('titulo_articuloshome');?></h2>-->
            <div class=" homepost">
                <?php the_content();?>
            </div>
        </div>
    </div>


<?php get_footer();?>