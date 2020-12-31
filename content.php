<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- mg-posts-sec mg-posts-modul-6 -->
    <div class="mg-posts-sec mg-posts-modul-6">
        <!-- mg-posts-sec-inner -->
        <div class="mg-posts-sec-inner">
            <?php while(have_posts()){ the_post(); ?>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4 my-auto mx-auto">
                            <?php image_post_page($post); ?>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                                <p class="card-text"><small class="text-muted"><?php post_meta(); ?></small></p>
                                <p class="card-text"><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
                                <p class="card-text"><?php post_categories(); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-12 text-center d-md-flex justify-content-center">
                <?php //Previous / next page navigation
                the_posts_pagination( array(
                'prev_text'          => '<i class="fa fa-angle-left"></i>',
                'next_text'          => '<i class="fa fa-angle-right"></i>',
                ) ); ?>
            </div>
        </div>
        <!-- // mg-posts-sec-inner -->
    </div>
    <!-- // mg-posts-sec block_6 -->

    <!--col-md-12-->
</div>