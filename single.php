<?php get_header(); ?>
<div class="container my-5">
  <div class="row">
    <div class="col-lg-9">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php comments_template(); ?>
        <?php endwhile; else: ?>
        <p><?php _e('Lo siento, el post no existe.'); ?></p>
      <?php endif; ?>
    </div>
    <div class="col-lg-3">
      <?php get_sidebar(); ?>    
    </div>
  </div>
</div>
<?php get_footer(); ?>