<?php
//======================== require once ===========================
require_once('inc/customizer/kirki-installer.php');
require_once('inc/customizer/customizer-main.php');


function hello_setup() {
    load_theme_textdomain( 'hello', get_template_directory() . '/languages' );
    add_theme_support( "automaic-feed-links" );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'topmenu' => esc_html( 'Top Menu', 'hello' ),
    ) );
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'caption',
    ) );
    add_theme_support( 'custom-selective-refresh-widgets' );

    add_theme_support( 'custom-background', apply_filters( 'hello_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );

}
add_action( 'after_setup_theme', 'hello_setup' );
function hello_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'hello_add_editor_styles' );
function hello_content_width() {
    $GLOBALS['content-width'] = apply_filters( 'hello_content_width', 1170 );
}
add_action( 'after_setup_theme', 'hello_content_width', 0 );

function hello_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Hello', 'hello' ),
        'id'            => 'single_post_widgets',
        'description'   => esc_html__( 'Add widgets here.', 'hello' ),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title ">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'hello_widgets_init' );
//=========================== assets bootstraping ==========================================
function hello_assets() {
    wp_register_style( 'simple_icon', '//cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css',null, '1.0' );
    wp_enqueue_style('simple_icon');
    wp_enqueue_style( 'font-css', get_theme_file_uri( "//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" ), null, '1.0' );
    wp_enqueue_style( 'style-css', get_theme_file_uri( "/assets/css/styles.css" ), null, '1.0' );    
    wp_enqueue_style( "hello-css", get_stylesheet_uri(), null, "1.0" );
    wp_register_script( 'bootstrap_js', get_theme_file_uri( "//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ), null, '1.0', true );
    wp_enqueue_script('bootstrap_js');
    wp_enqueue_script( 'main-js', get_theme_file_uri( "/assets/js/scripts.js" ), null, '1.0', true);  
   
}
add_action( 'wp_enqueue_scripts', 'hello_assets' );

// ====================== carbon Fields code ======================

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( "post_meta", __( " Steps" ) )
        ->where("post_type","=","post")
        ->add_fields( array(
            Field::make( 'text', 'crb_text_step_title', 'Step Title' ),
            Field::make( 'text', 'crb_text_step_1', 'Step One' ),
            Field::make( 'textarea', 'crb_text_step_1_des', 'Step One Description' ),
            Field::make( 'text', 'crb_text_step_2', 'Step Two' ),
            Field::make( 'textarea', 'crb_text_step_2_des', 'Step Two Description' ),
            Field::make( 'text', 'crb_text_step_3', 'Step Three' ),
            Field::make( 'textarea', 'crb_text_step_3_des', 'Step Three Description' ),
            Field::make( 'text', 'crb_text_step_4', 'Step Four' ),
            Field::make( 'textarea', 'crb_text_step_4_des', 'Step Four Description' ),
        ) );
}

