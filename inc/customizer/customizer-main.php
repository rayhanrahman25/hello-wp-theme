<?php
define( 'HELLO_CUSTOMIZER_ID', 'hello_customizer_settings' );
define( 'HELLO_CUSTOMIZER_PANEL_ID', 'hello_customizer_panel' );
if ( class_exists( 'kirki' ) ) {
    //======= config settings ====
    Kirki::add_config( HELLO_CUSTOMIZER_ID, array(
        'capability'  => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ) );
    //======== panel settings========
    Kirki::add_panel( HELLO_CUSTOMIZER_PANEL_ID, array(
        'priority'    => 10,
        'title'       => esc_html__( 'Hello Theme Panel', 'hello' ),
        'description' => esc_html__( 'Hello Settings', 'hello' ),
    ) );
    //========================== banner section =========================================
    Kirki::add_section( 'hello_banner_id', array(
        'title'    => esc_html__( 'Banner', 'hello' ),
        'panel'    => HELLO_CUSTOMIZER_PANEL_ID,
        'priority' => 160,
    ) );
    //============= banner controls ===============

    //-------- background Image contor ---------
    Kirki::add_field( HELLO_CUSTOMIZER_ID, [
        'type'        => 'image',
        'settings'    => 'banner_background_img',
        'label'       => esc_html__( 'Banner Background Image', 'hello' ),
        'description' => esc_html__( 'Description Here.', 'hello' ),
        'section'     => 'hello_banner_id',
        'default'     => '10',
    ] );
    // ----------- banner heading -------------
    Kirki::add_field( HELLO_CUSTOMIZER_ID, [
        'type'     => 'text',
        'settings' => 'banner_heading',
        'label'    => esc_html__( 'Banner Title', 'Hello' ),
        'section'  => 'hello_banner_id',
        'default'  => esc_html__( 'Stylish Portfolio', 'hello' ),
        'priority' => 10,
    ] );
    // ----------- banner heading -------------
    Kirki::add_field( HELLO_CUSTOMIZER_ID, [
        'type'     => 'text',
        'settings' => 'banner_sub_heading',
        'label'    => esc_html__( 'Banner Sub Title', 'Hello' ),
        'section'  => 'hello_banner_id',
        'default'  => esc_html__( 'A Free Bootstrap Theme by Start Bootstrap', 'hello' ),
        'priority' => 10,
    ] );
    // ----------- Button Text -------------
    Kirki::add_field( HELLO_CUSTOMIZER_ID, [
        'type'     => 'text',
        'settings' => 'banner_btn_title',
        'label'    => esc_html__( 'Button Title', 'Hello' ),
        'section'  => 'hello_banner_id',
        'default'  => esc_html__( 'Find Out More', 'hello' ),
        'priority' => 10,
    ] );
    // ----------- Button Link -------------
    Kirki::add_field( HELLO_CUSTOMIZER_ID, [
        'type'     => 'link',
        'settings' => 'banner_btn_link',
        'label'    => __( 'Button Link', 'hello' ),
        'section'  => 'hello_banner_id',
        'default'  => 'https://rayhanr.com/',
        'priority' => 10,
    ] );

    //========================== About section =========================================
    Kirki::add_section( 'hello_about_id', array(
        'title'    => esc_html__( 'About', 'hello' ),
        'panel'    => HELLO_CUSTOMIZER_PANEL_ID,
        'priority' => 160,
    ) );
    Kirki::add_field( HELLO_CUSTOMIZER_ID, [
        'type'     => 'text',
        'settings' => 'about_heading',
        'label'    => esc_html__( ' Title', 'Hello' ),
        'section'  => 'hello_about_id',
        'default'  => esc_html__( 'GET MORE THEMES', 'hello' ),
        'priority' => 10,
    ] );
    Kirki::add_field( HELLO_CUSTOMIZER_ID, [
        'type'     => 'text',
        'settings' => 'about_sub_heading',
        'label'    => esc_html__( ' Sub Title', 'Hello' ),
        'section'  => 'hello_about_id',
        'default'  => esc_html__( 'Bulilds Themes For Business', 'hello' ),
        'priority' => 10,
    ] );
    Kirki::add_field( HELLO_CUSTOMIZER_ID, [
        'type'     => 'text',
        'settings' => 'about_btn_title',
        'label'    => esc_html__( ' Button Title', 'Hello' ),
        'section'  => 'hello_about_id',
        'default'  => esc_html__( 'Unplash', 'hello' ),
        'priority' => 10,
    ] );
    Kirki::add_field( HELLO_CUSTOMIZER_ID, [
        'type'     => 'link',
        'settings' => 'about_btn_link',
        'label'    => __( 'Button Link', 'hello' ),
        'section'  => 'hello_about_id',
        'default'  => 'https://rayhanr.com',
        'priority' => 10,
    ] );

}

//========================== sevices section =========================================
Kirki::add_section( 'hello_services_id', array(
    'title'    => esc_html__( 'Services', 'hello' ),
    'panel'    => HELLO_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );

Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'         => 'repeater',
    'label'        => esc_html__( 'Repeater Control', 'hello' ),
    'section'      => 'hello_services_id',
    'priority'     => 10,
    'row_label'    => [
        'type'  => 'text',
        'value' => esc_html__( 'Service', 'hello' ),
    ],
    'button_label' => esc_html__( "Add New Service", 'hello' ),
    'settings'     => 'my_service_repeater_setting',
    'fields'       => [
        'service_title' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Title', 'hello' ),
        ],
        'service_sub_title' => [
            'type'        => 'text',
            'label'       => esc_html__( ' Sub Title', 'hello' ),
            'description' => esc_html__( 'Service Sub Title', 'hello' ),
            'default'     => '',
        ],
        'icon_calss' => [
            'type'        => 'text',
            'label'       => esc_html__( ' Icon Class Name', 'hello' ),
            'description' => esc_html__( 'Service Sub Title', 'hello' ),
            'default'     => '',
        ],
    ],
] );
//========================== Welcome section =========================================
Kirki::add_section( 'hello_welcome_id', array(
    'title'    => esc_html__( 'Welcome', 'hello' ),
    'panel'    => HELLO_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'        => 'image',
    'settings'    => 'welcome_background_img',
    'label'       => esc_html__( 'Welcome Banner', 'hello' ),
    'description' => esc_html__( 'Description Here.', 'hello' ),
    'section'     => 'hello_welcome_id',
    'default'     => '10',
] );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'welcome_title',
    'label'    => esc_html__( ' Welcome Title', 'Hello' ),
    'section'  => 'hello_welcome_id',
    'default'  => esc_html__( 'Welcome to your next website!', 'hello' ),
    'priority' => 10,
] );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'welcome_btn_title',
    'label'    => esc_html__( 'Button Title', 'Hello' ),
    'section'  => 'hello_welcome_id',
    'default'  => esc_html__( 'Download Now!', 'hello' ),
    'priority' => 10,
] );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'link',
    'settings' => 'welcome_btn_link',
    'label'    => __( 'Button Link', 'hello' ),
    'section'  => 'hello_welcome_id',
    'default'  => 'https://rayhanr.com',
    'priority' => 10,
] );
//========================== Portfolio section =========================================
Kirki::add_section( 'hello_portfolio_id', array(
    'title'    => esc_html__( 'portfolio', 'hello' ),
    'panel'    => HELLO_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'portfolio_top_title',
    'label'    => esc_html__( ' Top Title', 'Hello' ),
    'section'  => 'hello_portfolio_id',
    'default'  => esc_html__( 'PORTFOLIO', 'hello' ),
    'priority' => 10,
] );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'portfolio_title',
    'label'    => esc_html__( 'Portfolio Title', 'Hello' ),
    'section'  => 'hello_portfolio_id',
    'default'  => esc_html__( 'Recent Projects', 'hello' ),
    'priority' => 10,
] );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'         => 'repeater',
    'label'        => esc_html__( 'Repeater Control', 'hello' ),
    'section'      => 'hello_portfolio_id',
    'priority'     => 10,
    'row_label'    => [
        'type'  => 'text',
        'value' => esc_html__( 'Portfoilo', 'hello' ),
    ],
    'button_label' => esc_html__( "Add New Portfolio", 'hello' ),
    'settings'     => 'my_portfolio_repeater_setting',
    'fields'       => [
        'portfolio_title' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Portfolio Title', 'hello' ),
        ],
        'portfolio_sub_title' => [
            'type'        => 'text',
            'label'       => esc_html__( ' Portfolio Sub Title', 'hello' ),
            'default'     => '',
        ],
        'portfolio_img_field' => [
            'type'        => 'image',
            'label'       => esc_html__( 'Portfolio Image', 'hello' ),
            'default'     => '',
        ],
    ],
] );
//========================== Call To Action  Section =========================================
Kirki::add_section( 'hello_callaction_id', array(
    'title'    => esc_html__( 'Call To Action', 'hello' ),
    'panel'    => HELLO_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'callaction_title',
    'label'    => esc_html__( 'Call Action Title', 'Hello' ),
    'section'  => 'hello_callaction_id',
    'default'  => esc_html__( 'The buttons below are impossible to resist...', 'hello' ),
    'priority' => 10,
] );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'left_btn_title',
    'label'    => esc_html__( 'Left Button Title', 'Hello' ),
    'section'  => 'hello_callaction_id',
    'default'  => esc_html__( 'Click Me', 'hello' ),
    'priority' => 10,
] );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'right_btn_title',
    'label'    => esc_html__( 'Right Button Title', 'Hello' ),
    'section'  => 'hello_callaction_id',
    'default'  => esc_html__( 'Look at Me', 'hello' ),
    'priority' => 10,
] );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'link',
    'settings' => 'left_btn_link',
    'label'    => __( 'Button Link', 'hello' ),
    'section'  => 'hello_callaction_id',
    'default'  => 'https://rayhanr.com',
    'priority' => 10,
] );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'link',
    'settings' => 'right_btn_link',
    'label'    => __( 'Button Link', 'hello' ),
    'section'  => 'hello_callaction_id',
    'default'  => 'https://rayhanr.com',
    'priority' => 10,
] );
//================================== Blog Section ===============================
Kirki::add_section( 'hello_blog_id', array(
    'title'    => esc_html__( 'Blog Page Section', 'hello' ),
    'panel'    => HELLO_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
    
) );
//-------- background Image contor ---------
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'        => 'image',
    'settings'    => 'blog_banner_background_img',
    'label'       => esc_html__( 'Blog Banner Image', 'hello' ),
    'section'     => 'hello_blog_id',
    'default'     => '10',
] );
// ----------- banner heading -------------
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'blog_banner_heading',
    'label'    => esc_html__( 'Blog Banner Title', 'Hello' ),
    'section'  => 'hello_blog_id',
    'default'  => esc_html__( 'Welcome To Blogs', 'hello' ),
    'priority' => 10,
] );
// ----------- banner sub heading -------------
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'banner_sub_heading',
    'label'    => esc_html__( 'Blog  Sub Title', 'Hello' ),
    'section'  => 'hello_blog_id',
    'default'  => esc_html__( 'Hello Theme Created By Rayhan Rahman', 'hello' ),
    'priority' => 10,
] );

//==================================== Team Section ======================================= 
Kirki::add_section( 'hello_team_page', array(
    'title'    => esc_html__( 'Team Page', 'hello' ),
    'panel'    => HELLO_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
//-------- background Image contor ---------
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'        => 'image',
    'settings'    => 'tm_banner_background_img',
    'label'       => esc_html__( 'Team Banner Image', 'hello' ),
    'section'     => 'hello_team_page',
    'default'     => '10',
] );
// ----------- banner heading -------------
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'tm_banner_heading',
    'label'    => esc_html__( 'Team Page Title', 'Hello' ),
    'section'  => 'hello_team_page',
    'default'  => esc_html__( 'Meet The Teams', 'hello' ),
    'priority' => 10,
] );
// ----------------- social links ------------------------
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'tm_facebook',
    'label'    => esc_html__( 'Facebook', 'Hello' ),
    'section'  => 'hello_team_page',
    'default'  => esc_attr__( 'facebook', 'hello' ),
    'priority' => 10,
] );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'tm_twitter',
    'label'    => esc_html__( 'Twitter', 'Hello' ),
    'section'  => 'hello_team_page',
    'default'  => esc_attr__( 'twitter', 'hello' ),
    'priority' => 10,
] );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'tm_linkedin',
    'label'    => esc_html__( 'Linkedin', 'Hello' ),
    'section'  => 'hello_team_page',
    'default'  => esc_attr__( 'linkedin', 'hello' ),
    'priority' => 10,
] );
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'tm_instagram',
    'label'    => esc_html__( 'Instagram', 'Hello' ),
    'section'  => 'hello_team_page',
    'default'  => esc_attr__( 'instagram', 'hello' ),
    'priority' => 10,
] );
// ----------- banner sub heading -------------
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'tm_banner_sub_heading',
    'label'    => esc_html__( 'Team Page  Sub Title', 'Hello' ),
    'section'  => 'hello_team_page',
    'default'  => esc_html__( 'Hello Theme Created By Rayhan Rahman', 'hello' ),
    'priority' => 10,
] );

Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'         => 'repeater',
    'label'        => esc_html__( 'Your Team', 'hello' ),
    'section'      => 'hello_team_page',
    'priority'     => 10,
    'row_label'    => [
        'type'  => 'text',
        'value' => esc_html__( 'Team', 'hello' ),
    ],
    'button_label' => esc_html__( "Add New Member", 'hello' ),
    'settings'     => 'my_team_repeater_setting',
    'fields'       => [
        'tm_title' => [
            'type'        => 'text',
            'label'       => esc_html__( 'T M Name', 'hello' ),
            'default'     => 'Jeffery Riley',
        ],
        'tm_sub_title' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Art Dircetor', 'hello' ),
            'default'     => 'Art Director',
        ],
        'tm_img_field' => [
            'type'        => 'image',
            'label'       => esc_html__( 'T M Photo', 'hello' ),
            'default'     => 'Image',
        ],
    ],
] );

//==================================== Contact Section ======================================= 
Kirki::add_section( 'hello_contact_page', array(
    'title'    => esc_html__( 'Contact Page', 'hello' ),
    'panel'    => HELLO_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
//-------- background Image contor ---------
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'        => 'image',
    'settings'    => 'ct_banner_background_img',
    'label'       => esc_html__( 'Contact Banner Image', 'hello' ),
    'section'     => 'hello_contact_page',
    'default'     => '10',
] );
// ----------- banner heading -------------
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'ct_banner_heading',
    'label'    => esc_html__( 'Contact Page Title', 'Hello' ),
    'section'  => 'hello_contact_page',
    'default'  => esc_html__( 'Contact Us', 'hello' ),
    'priority' => 10,
] );
// ----------- banner sub heading -------------
Kirki::add_field( HELLO_CUSTOMIZER_ID, [
    'type'     => 'text',
    'settings' => 'ct_banner_sub_heading',
    'label'    => esc_html__( 'Team Page  Sub Title', 'Hello' ),
    'section'  => 'hello_contact_page',
    'default'  => esc_html__( 'Hello Theme Created By Rayhan Rahman', 'hello' ),
    'priority' => 10,
] );


