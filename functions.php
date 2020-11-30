<?php

//Suporte de menus do wordpress

//add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

//Adicionar menu global do Wordpress

/*register_nav_menus(
	array(
			'top-menu' => 'Top Menu',
	)
	);*/

//tamanho de imagens
add_image_size('post_image', 1100, 750, true);

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );








function load_css(){

	wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('stylesheet');
	wp_register_style('custom', get_template_directory_uri() . '/app.css', array(), false, 'all');
	wp_enqueue_style('custom');

	wp_enqueue_script('DancingScript', get_template_directory_uri() . '/src/fonts/DancingScript.woff2', array(), false, 'all');
	wp_enqueue_script('DancingScript');
	wp_enqueue_script('BebasNeue', get_template_directory_uri() . '/src/fonts/BebasNeue.woff2', array(), false, 'all');
	wp_enqueue_script('BebasNeue');
	
}

add_action('wp_enqueue_scripts', 'load_css');


function load_js(){

	wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, 'all');
	wp_enqueue_script('custom');

	
}

add_action('wp_enqueue_scripts', 'load_js');


//widgets sidebar


/*register_sidebar(
	array(
		'name' => 'Page Sidebar',
		'id' => 'page-sidebar',	
		'class' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	)
)*/

add_filter('woocommerce_product_add_to_cart_text', 'wh_archive_custom_cart_button_text');   // 2.1 +

function wh_archive_custom_cart_button_text(){
{
    return __('Comprar', 'woocommerce');
}

}




/*CUstom FIeld
 * */
function cfwc_create_custom_field() {
	$args = array(
		'id'            => 'custom_text_field_title',
		'label'         => __( 'Custom Text Field Title', 'cfwc' ),
		'class'					=> 'cfwc-custom-field',
		'desc_tip'      => true,
		'description'   => __( 'Enter the title of your custom text field.', 'ctwc' ),
		
	);
	woocommerce_wp_text_input( $args );
}
add_action( 'woocommerce_product_options_general_product_data', 'cfwc_create_custom_field' );



/**
 * Save the custom field
 * @since 1.0.0
 */
function cfwc_save_custom_field( $post_id ) {
	$product = wc_get_product( $post_id );
	$title = isset( $_POST['custom_text_field_title'] ) ? $_POST['custom_text_field_title'] : '';
	$product->update_meta_data( 'custom_text_field_title', sanitize_text_field( $title ) );
	$product->save();
}
add_action( 'woocommerce_process_product_meta', 'cfwc_save_custom_field' );




/**
 * Display custom field on the front end
 * @since 1.0.0
 */
function cfwc_display_custom_field() {
	global $post;
	// Check for the custom field value
	$product = wc_get_product( $post->ID );
	$title = $product->get_meta( 'custom_text_field_title' );
	if( $title ) {
		// Only display our field if we've got a value for the field title
		printf(
			'<div class="cfwc-custom-field-wrapper"><label for="cfwc-title-field">%s</label><input type="text" id="cfwc-title-field" name="cfwc-title-field" value=""></div>',
			esc_html( $title )
		);
	}
}
add_action( 'woocommerce_before_add_to_cart_button', 'cfwc_display_custom_field' );


add_action( 'woocommerce_before_add_to_cart_button', 'cfwc_display_custom_field2' );

/**
 * Validate the text field
 * @since 1.0.0
 * @param Array 		$passed					Validation status.
 * @param Integer   $product_id     Product ID.
 * @param Boolean  	$quantity   		Quantity
 */
//updated to only check validation if the field is showing.
function cfwc_validate_custom_field( $passed, $product_id, $quantity ) {
	// get the product using the product id
	$product = wc_get_product( $product_id );
	
	//get the title of the custom text field
	$title = $product->get_meta( 'custom_text_field_title' );
	
	//check if it exists
	if( $title ) {
        	// Only check validation if we've got a value for the field title
		if( empty( $_POST['cfwc-title-field'] ) ) {
	    		// Fails validation
		    	$passed = false;
			//show error message
		    	wc_add_notice( __( 'Please enter a value into the text field', 'cfwc' ), 'error' );
		}       
		
    	}
	return $passed;
}
add_filter( 'woocommerce_add_to_cart_validation', 'cfwc_validate_custom_field', 10, 3 );



add_filter( 'woocommerce_add_to_cart_validation', 'cfwc_validate_custom_field2', 10, 3 );
/**
 * Add the text field as item data to the cart object
 * @since 1.0.0
 * @param Array 		$cart_item_data Cart item meta data.
 * @param Integer   $product_id     Product ID.
 * @param Integer   $variation_id   Variation ID.
 * @param Boolean  	$quantity   		Quantity
 */
function cfwc_add_custom_field_item_data( $cart_item_data, $product_id, $variation_id, $quantity ) {
	if( ! empty( $_POST['cfwc-title-field'] ) ) {
		// Add the item data
		$cart_item_data['title_field'] = $_POST['cfwc-title-field'];
		$product = wc_get_product( $product_id ); // Expanded function
		$price = $product->get_price(); // Expanded function
		$cart_item_data['total_price'] = $price + 100; // Expanded function
	}
	return $cart_item_data;
}
add_filter( 'woocommerce_add_cart_item_data', 'cfwc_add_custom_field_item_data', 10, 4 );


/**
 * Display the custom field value in the cart
 * @since 1.0.0
 */
function cfwc_cart_item_name( $name, $cart_item, $cart_item_key ) {
	if( isset( $cart_item['title_field'] ) ) {
	  $name .= sprintf(
			'<p>%s</p>',
			esc_html( $cart_item['title_field'] )
		);
	}
	return $name;
}
add_filter( 'woocommerce_cart_item_name', 'cfwc_cart_item_name', 10, 3 );





/*CUstom FIeld v2
 * */
function cfwc_create_custom_field2() {
	$arg = array(
		'id'            => 'custom_text_field_title2',
		'label'         => __( 'Custom Text Field Title2', 'cfwc2' ),
		'class'					=> 'cfwc-custom-field2',
		'desc_tip'      => true,
		'description'   => __( 'Enter the title of your custom text field.', 'ctwc2' ),
		
	);
	woocommerce_wp_text_input( $arg );
}
add_action( 'woocommerce_product_options_general_product_data', 'cfwc_create_custom_field2' );



/**
 * Save the custom field
 * @since 1.0.0
 */
function cfwc_save_custom_field2( $post_id ) {
	$product = wc_get_product( $post_id );
	$title = isset( $_POST['custom_text_field_title2'] ) ? $_POST['custom_text_field_title2'] : '';
	$product->update_meta_data( 'custom_text_field_title2', sanitize_text_field( $title ) );
	$product->save();
}
add_action( 'woocommerce_process_product_meta', 'cfwc_save_custom_field2' );




/**
 * Display custom field on the front end
 * @since 1.0.0
 */
function cfwc_display_custom_field2() {
	global $post;
	// Check for the custom field value
	$product = wc_get_product( $post->ID );
	$title = $product->get_meta( 'custom_text_field_title2' );
	if( $title ) {
		// Only display our field if we've got a value for the field title
		printf(
			'<div class="cfwc-custom-field2-wrapper"><label for="cfwc-title-field2">%s</label><input type="text" id="cfwc-title-field2" name="cfwc-title-field2" value=""></div>',
			esc_html( $title )
		);
	}
}
add_action( 'woocommerce_before_add_to_cart_button', 'cfwc_display_custom_field2' );

/**
 * Validate the text field
 * @since 1.0.0
 * @param Array 		$passed					Validation status.
 * @param Integer   $product_id     Product ID.
 * @param Boolean  	$quantity   		Quantity
 */
//updated to only check validation if the field is showing.
function cfwc_validate_custom_field2( $passed, $product_id, $quantity ) {
	// get the product using the product id
	$product = wc_get_product( $product_id );
	
	//get the title of the custom text field
	$title = $product->get_meta( 'custom_text_field_title2' );
	
	//check if it exists
	if( $title ) {
        	// Only check validation if we've got a value for the field title
		if( empty( $_POST['cfwc-title-field2'] ) ) {
	    		// Fails validation
		    	$passed = false;
			//show error message
		    	wc_add_notice( __( 'Please enter a value into the text field', 'cfwc2' ), 'error' );
		}       
		
    	}
	return $passed;
}
add_filter( 'woocommerce_add_to_cart_validation', 'cfwc_validate_custom_field2', 10, 3 );
/**
 * Add the text field as item data to the cart object
 * @since 1.0.0
 * @param Array 		$cart_item_data Cart item meta data.
 * @param Integer   $product_id     Product ID.
 * @param Integer   $variation_id   Variation ID.
 * @param Boolean  	$quantity   		Quantity
 */
function cfwc_add_custom_field_item_data2( $cart_item_data, $product_id, $variation_id, $quantity ) {
	if( ! empty( $_POST['cfwc-title-field2'] ) ) {
		// Add the item data
		$cart_item_data['title_field2'] = $_POST['cfwc-title-field2'];
		$product = wc_get_product( $product_id ); // Expanded function
		$price = $product->get_price(); // Expanded function
		$cart_item_data['total_price'] = $price + 100; // Expanded function
	}
	return $cart_item_data;
}
add_filter( 'woocommerce_add_cart_item_data', 'cfwc_add_custom_field_item_data2', 10, 4 );



/**
 * Display the custom field value in the cart
 * @since 1.0.0
 */
function cfwc_cart_item_name2( $name, $cart_item, $cart_item_key ) {
	if( isset( $cart_item['title_field'] ) ) {
	  $name .= sprintf(
			'<p>%s</p>',
			esc_html( $cart_item['title_field'] )
		);
	}
	return $name;
}
add_filter( 'woocommerce_cart_item_name', 'cfwc_cart_item_name', 10, 3 );





?>