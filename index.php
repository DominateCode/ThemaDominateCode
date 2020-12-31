<?php 
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
get_header();?>
<!-- contenido -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-9">
            <?php get_template_part('content','');?>
        </div>
        <div class="col-md-3">
            <aside class="sidebar">
                <?php get_sidebar();?>
            </aside>
        </div>
    </div>
</div>
<?php get_footer();?>