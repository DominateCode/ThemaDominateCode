<?php

function widgets_footer() {
	$args = array(
		'before_widget' => '<section id="%1$s" class="widget %2$s my-4"> <div class="widget-wrap">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	);
     
	register_sidebar( array(
		'name'        => esc_html__( 'Sidebar', 'dominatecode' ),
		'id'          => 'sidebar-1',
		'description' => esc_html__( 'Add widgets here.', 'dominatecode' ),
		) + $args
	);

	register_sidebar( array(
		'name'        => esc_html__( 'Footer 1', 'dominatecode' ),
		'id'          => 'sidebar-2',
		'description' => esc_html__( 'Add widgets here to appear in your footer.', 'dominatecode' ),
		) + $args
	);

	register_sidebar( array(
		'name'        => esc_html__( 'Footer 2', 'dominatecode' ),
		'id'          => 'sidebar-3',
		'description' => esc_html__( 'Add widgets here to appear in your footer.', 'dominatecode' ),
		) + $args
	);

	register_sidebar( array(
		'name'        => esc_html__( 'Footer 3', 'dominatecode' ),
		'id'          => 'sidebar-4',
		'description' => esc_html__( 'Add widgets here to appear in your footer.', 'dominatecode' ),
		) + $args
    );
    register_sidebar( array(
		'name'        => esc_html__( 'Footer 4', 'dominatecode' ),
		'id'          => 'sidebar-5',
		'description' => esc_html__( 'Add widgets here to appear in your footer.', 'dominatecode' ),
		) + $args
	);
}
add_action( 'widgets_init', 'widgets_footer' );

function dominatecode_footer_sidebar_class() {
	$count = 0;
	if ( is_active_sidebar( 'sidebar-2' ) ) {
		$count++;
	}
	if ( is_active_sidebar( 'sidebar-3' ) ) {
		$count++;
	}
	if ( is_active_sidebar( 'sidebar-4' ) ) {
		$count++;
    }
    if ( is_active_sidebar( 'sidebar-5' ) ) {
		$count++;
	}

	$class = '';

	switch ( $count ) {
	    case '1':
			$class = 'one';
			break;
		case '2':
			$class = 'two';
			break;
		case '3':
			$class = 'three';
			break;
		case '4':
			$class = 'four';
			break;
	}
	if ( $class ) {
		echo 'class="widget-area footer-widget-area ' . esc_attr( $class ) . '"';
	}
}

?>