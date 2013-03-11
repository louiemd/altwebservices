<?php

// This theme uses wp_nav_menu() in one location.
register_nav_menu( 'primary', __( 'Primary Menu', 'main-nav' ) );

function astro_add_dropdown_class($classes, $item) {
    global $wpdb;
    $has_children = $wpdb->get_var("
            SELECT COUNT(meta_id) 
            FROM wp_postmeta 
            WHERE meta_key='_menu_item_menu_item_parent'
            AND meta_value='".$item->ID."'
        ");
    // add the class dropdown to the current list
    if ($has_children > 0) array_push($classes,'dropdown'); 
    return $classes;
}
 
add_filter( 'nav_menu_css_class', 'astro_add_dropdown_class', 10, 2);


if ( function_exists('register_sidebar') ) {

	register_sidebar(array(
		'before_widget' => '<div id="%1$s" class="widget well %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle"><em>',
		'after_title' => '</em></h4>',
	));
}

// Post thumbnail

if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 118, 118, true ); // default Post Thumbnail dimensions (cropped)

}