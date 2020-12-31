<?php
if (!function_exists('post_meta')) :
    function post_meta(){
        $global_post_date = get_theme_mod('global_post_date_author_setting','show-date-author');
        if($global_post_date =='show-date-author') {
            ?>
            <div class="mg-blog-meta">
                <span class="mg-blog-date"><i class="fa fa-clock-o"></i>
                <a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>">
                <?php echo esc_html(get_the_date('M j, Y')); ?></a></span>
                <a class="auth" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><i class="fa fa-user-circle-o"></i> 
                <?php the_author(); ?></a>
                <?php edit_post_link( __( 'Edit', 'newsup' ), '<span class="post-edit-link"><i class="fa fa-edit"></i>', '</span>' ); ?> 
            </div>
        <?php } 
        elseif($global_post_date =='show-date-only') {
            ?>
            <div class="mg-blog-meta">
                <span class="mg-blog-date"><i class="fa fa-clock-o"></i>
                <a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>">
                <?php echo esc_html(get_the_date('M j, Y')); ?></a></span>
                <?php edit_post_link( __( 'Edit', 'newsup' ), '<span class="post-edit-link"><i class="fa fa-edit"></i>', '</span>' ); ?>
            </div>
        <?php } 
        elseif($global_post_date =='show-author-only') {
            ?>
            <div class="mg-blog-meta">
                <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><i class="fa fa-user-circle-o"></i> 
                <?php the_author(); ?></a>
                <?php edit_post_link( __( 'Edit', 'newsup' ), '<span class="post-edit-link"><i class="fa fa-edit"></i>', '</span>' ); ?>
            </div>
        <?php } elseif($global_post_date =='hide-date-author') { } ?>
<?php }
endif;

if (!function_exists('get_options')):
    function get_options($key) {
        if (empty($key)) {
            return;
        }
    
        $value = '';
        $default       = array();
        $default_value = null;
    
        if (is_array($default) && isset($default[$key])) {
            $default_value = $default[$key];
        }
    
        if (null !== $default_value) {
            $value = get_theme_mod($key, $default_value);
        } else {
            $value = get_theme_mod($key);
        }
    
        return $value;
    }
endif;

if (!function_exists('post_categories')) :
    function post_categories($separator = '&nbsp'){
        $global_show_categories = get_options('global_show_categories');
        if ($global_show_categories == 'no') {
            return;
        }

        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {

            global $post;

            $post_categories = get_the_category($post->ID);
            if ($post_categories) {
                $output = '';
                foreach ($post_categories as $post_category) {
                    $t_id = $post_category->term_id;
                    $color_id = "category_color_" . $t_id;

                    // retrieve the existing value(s) for this meta field. This returns an array
                    $term_meta = get_option($color_id);
                    $color_class = ($term_meta) ? $term_meta['color_class_term_meta'] : 'category-color-1';

                    $output .= '<a class="newsup-categories ' . esc_attr($color_class) . '" href="' . esc_url(get_category_link($post_category)) . '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'newsup'), $post_category->name)) . '"> 
                                 ' . esc_html($post_category->name) . '
                             </a>';
                }
                $output .= '';
                echo $output;

            }
        }
    }
endif;

function get_url_image($post_id, $size = 'newsup-featured')
{
    if (has_post_thumbnail($post_id)) {
        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), $size);
        $url = $thumb['0'];
    } else {
        $url = '';
    }

    return $url;
}

function image_post_page($post){
    $post_image_type = get_theme_mod('post_image_type','newsup_post_img_hei');
    $url = get_url_image($post->ID, 'newsup-medium');
    if ( $post_image_type == 'newsup_post_img_hei' ) {
    if($url) { ?>
        <img src="<?php echo esc_url($url);?>" class="card-img card-post-img">
    <?php } 
    }
    elseif ( $post_image_type == 'newsup_post_img_acc' )  {
    if(has_post_thumbnail()) { ?>
            
    <div class="col-12 col-md-6">
            <div class="mg-post-thumb img">
    <?php echo '<a href="'.esc_url(get_the_permalink()).'">';
        the_post_thumbnail( '', array( 'class'=>'img-responsive' ) );
        echo '</a>'; ?>
            
            </div>
    </div> <?php } 
    } 
} 
?>