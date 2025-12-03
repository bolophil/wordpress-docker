<?php

function alex_portfolio_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus(array(
        'primary' => __( 'Primary Menu', 'alex-portfolio' ),
    ));
}
add_action( 'after_setup_theme', 'alex_portfolio_setup' );

function alex_portfolio_scripts() {
    wp_enqueue_style(
        'alex-portfolio-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'alex_portfolio_scripts' );
