<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {wp_enqueue_style('parent_style', get_template_directory_uri() . '/style.css'); 
    wp_enqueue_style('twentynineteen-child-theme-fonts', 'https://fonts.googleapis.com/css?family=Raleway&display' );
 wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css',array('parent_style' ),wp_get_theme()->get('Version'));}


 
//code slide 28 - deze code komt in functions.php van het ChildTheme
 
function twentynineteen_the_posts_navigation() {
 the_posts_pagination(
 array(
 'mid_size' => 2,
 'prev_text' => '&laquo; <span class="nav-prev-text">Newer</span>',
 'next_text' => '<span class="nav-next-text">Older</span> &raquo;',
 )
 );
}
 
//code slide 31/32 - deze code komt in functions.php van het ChildTheme
 
function sport_titles ($title, $id=null){
 if ( in_category( 'sport', $id ) ) {
 $title = "Sport: " . $title;
 }
 return $title;
}


add_filter('the_title', 'sport_titles', 10, 2);
 
function twentynineteen_child_theme_setup(){
 remove_action( 'widgets_init', 'twentynineteen_widgets_init' );

register_nav_menus(
			array(
				'menu-2' => __( 'Secondary', 'twentynineteen' ),
				
			)
		);

 }

 
 add_action('after_setup_theme', 'twentynineteen_child_theme_setup');


 function twentynineteen_posted_by() {
		
    }


    
    
