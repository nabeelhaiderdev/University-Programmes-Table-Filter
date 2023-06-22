<?php
// Register Custom Post Type

function register_cpt_team() {
    //CPT Labels
    $cpt_singular_capital 		= 'Programme'; // Name of the post type shown in the menu
    $cpt_plural_capital 		= 'Programmes';
    $cpt_singular_lowercase 	= 'programme';
    $cpt_plural_lowercase 		= 'programmes';

	//CPT Slug & Name
    $cpt_register_key = 'programme';  // This is the registering name of the single CPT post. (Try to keep it singular).
    $cpt_slug = 'programme';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/testimonial/single-testimonial-name

    $labels = array(
        'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'springai_td' ),
        'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'springai_td' ),
        'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'springai_td' ),
        'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'springai_td' ),
        'add_new'               => __( 'Add New ', 'springai_td' ),
        'add_new_item'          => __( 'Add New '.$cpt_singular_capital , 'springai_td' ),
        'new_item'              => __( 'New '.$cpt_singular_capital, 'springai_td' ),
        'edit_item'             => __( 'Edit '.$cpt_singular_capital, 'springai_td' ),
        'update_item'           => __( 'Update '.$cpt_singular_capital, 'springai_td' ),
        'view_item'             => __( 'View  '.$cpt_singular_capital, 'springai_td' ),
        'view_items'             => __( 'View  '.$cpt_plural_capital, 'springai_td' ),
        'all_items'             => __( 'All '.$cpt_plural_capital, 'springai_td' ),
        'search_items'          => __( 'Search '.$cpt_plural_capital, 'springai_td' ),
        'parent_item_colon'     => __( 'Parent: '.$cpt_singular_capital, 'springai_td' ),
        'not_found'             => __( 'No '.$cpt_plural_lowercase.' found.', 'springai_td' ),
        'not_found_in_trash'    => __( 'No '.$cpt_plural_lowercase.' found in Trash.', 'springai_td' ),
        'featured_image'        => _x( $cpt_singular_capital.' Featured Image', 'Overrides the “Featured Image” phrase.', 'springai_td' ),
        'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'springai_td' ),
        'remove_featured_image' => _x( 'Remove '. $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'springai_td' ),
        'use_featured_image'    => _x( 'Use as '.$cpt_singular_lowercase.' image', 'Overrides the “Use as featured image” phrase.', 'springai_td' ),
        'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'springai_td' ),
        'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'springai_td' ),
        'insert_into_item'      => _x( 'Insert into '.$cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'springai_td' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this '.$cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'springai_td' ),
        'filter_items_list'     => _x( 'Filter '.$cpt_plural_lowercase.' list', 'Screen reader text for the filter links.', 'springai_td' ),
        'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'springai_td' ),
        'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'springai_td' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'exclude_from_search'=> true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest' 		 => true,
		'supports'           => array('title', 'thumbnail' ),
		'capability_type'    => 'page', // Set this value for each CPT.
        'has_archive'        => false, // Set this value for each CPT.
        'hierarchical'       => true, // Set this value for each CPT.
        'menu_icon'          => 'dashicons-clipboard', // Set this value for each CPT.
        'rewrite'            => array(
            'slug' 	    	 => $cpt_slug,
            'with_front' 	 => false, // If required only then set this value for each CPT.
        ),


    );
    register_post_type( $cpt_register_key, $args );
}

add_action( 'init', 'register_cpt_team' );



/**
 * Register custom tags for Experiments cpt
 */
function programme_taxonomy_category() {

	//CPT Slug & Name
	$tax_parent 			= 'programme'; // This is registering name of respective CPT.
    $tax_register_key 		= 'programmes';  // This is the registering name of the taxonomy (Try to keep it plural).
    $tax_slug 				= 'programmes'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
	// The slug will become - www.website.com/testimonials/single-testimonial-category

	$labels = array(
		'name'                       => _x( 'Category', 'Taxonomy General Name', 'springai_td' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'springai_td' ),
		'menu_name'                  => __( 'Categories', 'springai_td' ),
		'all_items'                  => __( 'All Items', 'springai_td' ),
		'parent_item'                => __( 'Parent Item', 'springai_td' ),
		'parent_item_colon'          => __( 'Parent Item:', 'springai_td' ),
		'new_item_name'              => __( 'New Item Name', 'springai_td' ),
		'add_new_item'               => __( 'Add New Item', 'springai_td' ),
		'edit_item'                  => __( 'Edit Item', 'springai_td' ),
		'update_item'                => __( 'Update Item', 'springai_td' ),
		'view_item'                  => __( 'View Item', 'springai_td' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'springai_td' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'springai_td' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'springai_td' ),
		'popular_items'              => __( 'Popular Items', 'springai_td' ),
		'search_items'               => __( 'Search Items', 'springai_td' ),
		'not_found'                  => __( 'Not Found', 'springai_td' ),
		'no_terms'                   => __( 'No items', 'springai_td' ),
		'items_list'                 => __( 'Items list', 'springai_td' ),
		'items_list_navigation'      => __( 'Items list navigation', 'springai_td' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite'            => array(
			'slug'       => $tax_slug,
			'with_front' => false, // If required only then set this for each taxonomy.
		),
	);
	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

}

add_action( 'init', 'programme_taxonomy_category', 0 );


/**
 * Register custom tags for Experiments cpt
 */
function programme_taxonomy_level() {

	//CPT Slug & Name
	$tax_parent 			= 'programme'; // This is registering name of respective CPT.
    $tax_register_key 		= 'management-level';  // This is the registering name of the taxonomy (Try to keep it plural).
    $tax_slug 				= 'management-level'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
	// The slug will become - www.website.com/testimonials/single-testimonial-category

	$labels = array(
		'name'                       => _x( 'Management Level', 'Taxonomy General Name', 'springai_td' ),
		'singular_name'              => _x( 'Management Level', 'Taxonomy Singular Name', 'springai_td' ),
		'menu_name'                  => __( 'Management Levels', 'springai_td' ),
		'all_items'                  => __( 'All Items', 'springai_td' ),
		'parent_item'                => __( 'Parent Item', 'springai_td' ),
		'parent_item_colon'          => __( 'Parent Item:', 'springai_td' ),
		'new_item_name'              => __( 'New Item Name', 'springai_td' ),
		'add_new_item'               => __( 'Add New Item', 'springai_td' ),
		'edit_item'                  => __( 'Edit Item', 'springai_td' ),
		'update_item'                => __( 'Update Item', 'springai_td' ),
		'view_item'                  => __( 'View Item', 'springai_td' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'springai_td' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'springai_td' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'springai_td' ),
		'popular_items'              => __( 'Popular Items', 'springai_td' ),
		'search_items'               => __( 'Search Items', 'springai_td' ),
		'not_found'                  => __( 'Not Found', 'springai_td' ),
		'no_terms'                   => __( 'No items', 'springai_td' ),
		'items_list'                 => __( 'Items list', 'springai_td' ),
		'items_list_navigation'      => __( 'Items list navigation', 'springai_td' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite'            => array(
			'slug'       => $tax_slug,
			'with_front' => false, // If required only then set this for each taxonomy.
		),
	);
	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

}

add_action( 'init', 'programme_taxonomy_level', 0 );

// Add meta box callback function
function plugin_name_date_meta_box_callback($post) {
    // Retrieve current values of the date meta fields
    $start_date = get_post_meta($post->ID, 'plugin_name_date', true);
    $end_date = get_post_meta($post->ID, 'plugin_name_end_date', true);

    // Add a nonce field for security
    wp_nonce_field('plugin_name_date_meta_box', 'plugin_name_date_meta_box_nonce');

    // Output the meta box HTML
    ?>
<p>
	<label for="plugin_name_date"><?php esc_html_e('Starting Date:', 'plugin-name'); ?></label>
	<input type="date" id="plugin_name_date" name="plugin_name_date" value="<?php echo esc_attr($start_date); ?>" />
</p>
<p>
	<label for="plugin_name_end_date"><?php esc_html_e('Ending Date:', 'plugin-name'); ?></label>
	<input type="date" id="plugin_name_end_date" name="plugin_name_end_date"
		value="<?php echo esc_attr($end_date); ?>" />
</p>
<?php
}

// Add meta box to the CPT edit screen
function plugin_name_add_meta_boxes() {
    add_meta_box('plugin_name_date_meta_box', 'Date', 'plugin_name_date_meta_box_callback', 'programme', 'normal', 'default');
}
add_action('add_meta_boxes', 'plugin_name_add_meta_boxes');

// Save meta box data
function plugin_name_save_meta_box_data($post_id) {
    // Check if nonce is set and valid
    if (!isset($_POST['plugin_name_date_meta_box_nonce']) || !wp_verify_nonce($_POST['plugin_name_date_meta_box_nonce'], 'plugin_name_date_meta_box')) {
        return;
    }

    // Check if the current user has permission to save the meta box data
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save the starting date meta field
    if (isset($_POST['plugin_name_date'])) {
        update_post_meta($post_id, 'plugin_name_date', sanitize_text_field($_POST['plugin_name_date']));
    }

    // Save the ending date meta field
    if (isset($_POST['plugin_name_end_date'])) {
        update_post_meta($post_id, 'plugin_name_end_date', sanitize_text_field($_POST['plugin_name_end_date']));
    }
}
add_action('save_post', 'plugin_name_save_meta_box_data');
