
<div class="footer">
  <div class="menu-footer py-5">

  <?php
  if (
    is_active_sidebar( 'sidebar-2' ) ||
    is_active_sidebar( 'sidebar-3' ) ||
    is_active_sidebar( 'sidebar-4' ) ||
    is_active_sidebar( 'sidebar-5' ) ) :
  ?>

<aside <?php dominatecode_footer_sidebar_class(); ?> role="complementary">
	<div class="row mx-3">
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div class="widget-column footer-widget-1 col-lg-3">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
			<div class="widget-column footer-widget-2 col-lg-3">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
			<div class="widget-column footer-widget-3 col-lg-3">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
			<div class="widget-column footer-widget-4 col-lg-3">
				<?php dynamic_sidebar( 'sidebar-5' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>


    </div><!-- .footer-widgets-wrapper -->
  </aside><!-- .footer-widgets -->
  <?php endif; ?>
  </div>
  <div class="copy p-3">
    <?php wp_footer(); ?>
    <p class="m-0 text-center ">Copyright &copy; <?php bloginfo('name'); echo ' '.date('Y'); ?> </p>    
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>