<?php
	
// Add RSS links to <head> section
automatic_feed_links();

// Load jQuery
if ( !is_admin() ) {
   wp_deregister_script('jquery');
   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
   wp_enqueue_script('jquery');
}

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// Register the Top Navigation Menu //	
function register_top_navigation() {
register_nav_menu('top_nav_menu', __('Top Navigation Menu'));
}
add_action('init', 'register_top_navigation');

// Register the Main Navigation Menu //	
function register_main_navigation() {
register_nav_menu('main_nav_menu', __('Main Navigation Menu'));
}
add_action('init', 'register_main_navigation');

// REGISTER THE THEME WIDGETS //    
function nudestrap_widgets_init() {
	// Primary Sidebar Widget Area, located in the sidebar. Shows up on all pages except the home page.
	register_sidebar(array(
		'name' => 'Sidebar',
		'id'   => 'sidebar-widgets',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	
	register_sidebar(array(
		'name' => 'Footer 1',
		'id'   => 'footer-widget-one',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	
	register_sidebar(array(
		'name' => 'Footer 2',
		'id'   => 'footer-widget-two',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	
	register_sidebar(array(
		'name' => 'Footer 3',
		'id'   => 'footer-widget-three',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	
	register_sidebar(array(
		'name' => 'Footer 4',
		'id'   => 'footer-widget-four',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	
}
/** Register sidebars by running nudestrap_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'nudestrap_widgets_init' );
	
	
// Pagination functions //
function pagination( $pages = '', $range = 2 ) {  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}

function p_link( $i, $title = '' ) {
	if ( $title == '' ) $title = "Page {$i}";
	echo "<a class='page-numbers' href='", esc_html( get_pagenum_link( $i ) ), "' title='{$title}'>{$i}</a> ";
}



?>