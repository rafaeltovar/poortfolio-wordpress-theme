<?php
/**
 * New post_type: work
 */

add_action( 'init', 'poortfolio_create_work_post_type' );

function poortfolio_create_work_post_type() {
	register_post_type( 'work',
    	array(
    		'labels' => array(
    			'name' => __( 'Works', 'poortfolio'),
    			'singular_name' => __( 'Work', 'poortfolio')
    		),  
    		'public' => true,
    		'menu_position' => 5,
    		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
    		'capability_type' => 'post',
    		'has_archive' => true,
    		'rewrite' => array( 'slug' => 'works',
      					 	'with_front' => false),	
      		'register_meta_box_cb' => 'poortfolio_add_work_details_metabox'
      	)
   );
}
 
add_action('admin_init', 'poortfolio_add_work_details_metabox');

function poortfolio_add_work_details_metabox() {
        add_meta_box('poortfolio_work_details', __('Work details', 'poortfolio'), 'poortfolio_render_work_details_metabox', 'work');
}

$poortfolio_work_details_metabox_items = array('wdescription' => __('Description', 'poortfolio'),
        										 	'wtdetails' => __('Technical details', 'poortfolio')
        										 	); 

function poortfolio_render_work_details_metabox() {
        global $post, $poortfolio_work_details_metabox_items;
        
        foreach($poortfolio_work_details_metabox_items as $item_id => $item_name) {
        	// Label
        	echo "<h2>".$item_name."</h2>";
        	
        	//Create The Editor	
        	$editor_setting = array('wpautop' => true, 'media_buttons' => false);
        	$content = get_post_meta($post->ID, $item_id, true);
        	wp_editor($content, $item_id, $editor_setting);

        	//Clear The Room!
        	echo "<div style='clear:both; display:block;'></div>";
        }
}
 
add_action('save_post', 'poortfolio_save_work_details_metabox');

function poortfolio_save_work_details_metabox() {
	global $poortfolio_work_details_metabox_items;
	
	foreach($poortfolio_work_details_metabox_items as $item_id => $item_name) {
     	if(isset($_REQUEST[$item_id])) {
        	update_post_meta($_REQUEST['post_ID'], $item_id, wpautop($_REQUEST[$item_id]));
        }
     }          
}

function works_sections_init() {
  // create a new taxonomy
  register_taxonomy(
    'section',
    'work',
    array(
      'hierarchical' => true,
      'label' => __('Section', 'poortfolio'),
      'sort' => true,
      'args' => array('orderby' => 'term_order'),
      'rewrite' => array('slug' => 'section'),
    )
  );
}

add_action( 'init', 'works_sections_init' );
?>