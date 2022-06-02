<?php


register_nav_menu('primary-header-menu',__( 'Header Menu' ));


register_nav_menus(array(
    'primary' => __('Primary Menu', 'My_First_WordPress_Theme'),
    'secondary' => __('Secondary Menu',       'My_First_WordPress_Theme'),
    'My_custome_menu' => __('finally Menu', 'My_First_WordPress_Theme')
));

add_theme_support( 'post-thumbnails');

add_theme_support( 'title-tag' );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
            'navigation-widgets',
        )
    );
function immigration_sidebar_registration() {

    // Arguments used in all register_sidebar() calls.
    $shared_args = array(
        'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
        'after_title'   => '</h2>',
        'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
        'after_widget'  => '</div></div>',
    );

    // Footer #1.
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name'        => __( 'Footer #1', 'immigration' ),
                'id'          => 'sidebar-1',
                'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'immigration' ),
            )
        )
    );

    // Footer #2.
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name'        => __( 'Footer #2', 'immigration' ),
                'id'          => 'sidebar-2',
                'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'immigration' ),
            )
        )
    );

}

add_action( 'widgets_init', 'immigration_sidebar_registration' );

add_theme_support( 'custom-logo', array(
    'height'               => 100,
    'width'                => 400,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true,
) );


function site_logo()
    {
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

        if ( has_custom_logo() ) {
        echo '<a href="'.get_home_url().'" ><img class="custom-logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
        } else {
        echo '<a href="'.get_home_url().'" ><h3>' . get_bloginfo('name') . '</h3></a>';
        }
    }


function tp_scripts() {
     wp_enqueue_style( 'default', get_stylesheet_uri() );
      wp_enqueue_style( 'bootstrap-min', get_template_directory_uri().'/assets/css/bootstrap.min.css' );

      wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/css/fontawesome.min.css' );
      wp_enqueue_style( 'default-style', get_template_directory_uri().'/assets/css/style.css' );
      wp_enqueue_style( 'swiper-style', get_template_directory_uri().'/assets/css/swiper.min.css' );
      wp_enqueue_style( 'animated-style', get_template_directory_uri().'/assets/css/animate.min.css' );
      wp_enqueue_style( 'fancybox-style', get_template_directory_uri().'/assets/css/fancybox.min.css' );
      wp_enqueue_style( 'odometer-style', get_template_directory_uri().'/assets/css/odometer.min.css' );
       wp_enqueue_style( 'style-default', get_template_directory_uri().'style.css' );

        wp_enqueue_script( 'text-rotater', get_template_directory_uri() . '/assets/js/text-rotater.js');
    wp_enqueue_script( 'jquery-local', get_template_directory_uri() . '/assets/js/jquery.min.js' );
     wp_enqueue_script( 'popper-script', get_template_directory_uri() . '/assets/js/popper.min.js');
       wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
       wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/js/swiper.min.js');

    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/fancybox.min.js');
      wp_enqueue_script( 'odometer', get_template_directory_uri() . '/assets/js/odometer.min.js');
    wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/assets/js/wow.min.js');
  
        wp_enqueue_script( 'steller-jquery', get_template_directory_uri() . '/assets/js/jquery.stellar.js');
         

    wp_enqueue_script( 'isotope-min', get_template_directory_uri() . '/assets/js/isotope.min.js');
    
    wp_enqueue_script( 'default-script', get_template_directory_uri() . '/assets/js/scripts.js');
}
add_action( 'wp_enqueue_scripts', 'tp_scripts' );
?>









