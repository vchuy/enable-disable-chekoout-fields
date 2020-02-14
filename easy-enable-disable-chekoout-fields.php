<?php
/**
 * Plugin Name: Easy enable disable checkout fields
 * Description: Plugin to easy enable disable checkout fields
 * Plugin URI:  https://www.vchuy-develop.com/easy-enable-disable-checkout-fields/
 * Author URI:  https://www.vchuy-develop.com/
 * Author:      v.chuy
 * Version:      1.0
 *
 * Text Domain: endichefi
 * Domain Path: /languages
 *             
 *
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * 
 */
 
 
 
 add_action( 'plugins_loaded', 'load_plugin_endichefi' );
 
function load_plugin_endichefi() {
	load_plugin_textdomain( 'endichefi', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' ); 
}


add_action('admin_menu', 'add_plugin_page_endichefi');
function add_plugin_page_endichefi(){
	add_options_page( esc_html__( 'Enable disable checkout fields Settings', 'endichefi' ), 'Enable disable checkout fields reviews', 'manage_options', 'endichefi_slug', 'options_page_output_endichefi' );
}

function options_page_output_endichefi(){
	?>
	<div class="wrap">
		<h2><?php echo get_admin_page_title() ?></h2>
<h3><?php echo  esc_attr_e( 'You can turn off any field from the checkout of the woocommerce page. Just mark and save. It is simple.', 'endichefi' ) ?></h3>
		<form action="options.php" method="POST">
			<?php
				settings_fields( 'option_group' );
				do_settings_sections( 'endichefi_page' );
				submit_button();
			?>
		</form>
	</div>
	<?php
}




add_action('admin_init', 'plugin_settings_endichefi');




function plugin_settings_endichefi(){

	register_setting( 'option_group', 'billing_first_name_endichefi', 'sanitize_callback_endichefi');
    register_setting( 'option_group', 'billing_last_name_endichefi', 'sanitize_callback_endichefi' );
    register_setting( 'option_group', 'billing_company_endichefi', 'sanitize_callback_endichefi' );
    register_setting( 'option_group', 'billing_address_1_endichefi', 'sanitize_callback_endichefi' );

    register_setting( 'option_group', 'billing_address_2_endichefi', 'sanitize_callback_endichefi' );
    register_setting( 'option_group', 'billing_city_endichefi', 'sanitize_callback_endichefi' );
    register_setting( 'option_group', 'billing_postcode_endichefi', 'sanitize_callback_endichefi' );
    register_setting( 'option_group', 'billing_country_endichefi', 'sanitize_callback_endichefi' );
    register_setting( 'option_group', 'billing_state_endichefi', 'sanitize_callback_endichefi' );	
    register_setting( 'option_group', 'billing_phone_endichefi', 'sanitize_callback_endichefi' );	
    register_setting( 'option_group', 'order_comments_endichefi', 'sanitize_callback_endichefi' );		
	
	

	
	add_settings_section( 'section_id_05',  esc_html__( 'Main settings', 'endichefi' ), '', 'endichefi_page' ); 
	
	

	add_settings_field('endichefi_field1', esc_html__( 'Billing first name', 'endichefi' ), 'fill_options_field_endichefi_1', 'endichefi_page', 'section_id_05' );
	add_settings_field('endichefi_field2', esc_html__( 'Billing last name', 'endichefi' ), 'fill_options_field_endichefi_2', 'endichefi_page', 'section_id_05' );
	
	add_settings_field('endichefi_field3', esc_html__( 'Billing company', 'endichefi' ), 'fill_options_field_endichefi_3', 'endichefi_page', 'section_id_05' );
	add_settings_field('endichefi_field4', esc_html__( 'Billing address 1', 'endichefi' ), 'fill_options_field_endichefi_4', 'endichefi_page', 'section_id_05' );

	add_settings_field('endichefi_field5', esc_html__( 'Billing address 2', 'endichefi' ), 'fill_options_field_endichefi_5', 'endichefi_page', 'section_id_05' );	
	add_settings_field('endichefi_field6', esc_html__( 'Billing city', 'endichefi' ), 'fill_options_field_endichefi_6', 'endichefi_page', 'section_id_05' );	
	add_settings_field('endichefi_field7', esc_html__( 'Billing postcode', 'endichefi' ), 'fill_options_field_endichefi_7', 'endichefi_page', 'section_id_05' );	
	add_settings_field('endichefi_field8', esc_html__( 'Billing country', 'endichefi' ), 'fill_options_field_endichefi_8', 'endichefi_page', 'section_id_05' );	
	add_settings_field('endichefi_field9', esc_html__( 'Billing state', 'endichefi' ), 'fill_options_field_endichefi_9', 'endichefi_page', 'section_id_05' );		
	add_settings_field('endichefi_field10', esc_html__( 'Billing phone', 'endichefi' ), 'fill_options_field_endichefi_10', 'endichefi_page', 'section_id_05' );		
	add_settings_field('endichefi_field11', esc_html__( 'Order comments', 'endichefi' ), 'fill_options_field_endichefi_11', 'endichefi_page', 'section_id_05' );		
}


function fill_options_field_endichefi_1(){
	$val = get_option('billing_first_name_endichefi');
	$val = $val ? $val['checkbox'] : null;
	?>
	<label><input type="checkbox" name="billing_first_name_endichefi[checkbox]" value="1" <?php checked( 1, $val ) ?> /> <?php echo  esc_attr_e( 'Check', 'endichefi' ) ?></label>
	<?php
}



function fill_options_field_endichefi_2(){
	$val = get_option('billing_last_name_endichefi');
	$val = $val ? $val['checkbox'] : null;
	?>
	<label><input type="checkbox" name="billing_last_name_endichefi[checkbox]" value="1" <?php checked( 1, $val ) ?> />  <?php echo  esc_attr_e( 'Check', 'endichefi' ) ?></label>
	<?php
}



function fill_options_field_endichefi_3(){
	$val = get_option('billing_company_endichefi');
	$val = $val ? $val['checkbox'] : null;
	?>
	<label><input type="checkbox" name="billing_company_endichefi[checkbox]" value="1" <?php checked( 1, $val ) ?> />  <?php echo  esc_attr_e( 'Check', 'endichefi' ) ?></label>
	<?php
}



function fill_options_field_endichefi_4(){
	$val = get_option('billing_address_1_endichefi');
	$val = $val ? $val['checkbox'] : null;
	?>
	<label><input type="checkbox" name="billing_address_1_endichefi[checkbox]" value="1" <?php checked( 1, $val ) ?> />  <?php echo  esc_attr_e( 'Check', 'endichefi' ) ?></label>
	<?php
}


function fill_options_field_endichefi_5(){
	$val = get_option('billing_address_2_endichefi');
	$val = $val ? $val['checkbox'] : null;
	?>
	<label><input type="checkbox" name="billing_address_2_endichefi[checkbox]" value="1" <?php checked( 1, $val ) ?> />  <?php echo  esc_attr_e( 'Check', 'endichefi' ) ?></label>
	<?php
}


function fill_options_field_endichefi_6(){
	$val = get_option('billing_city_endichefi');
	$val = $val ? $val['checkbox'] : null;
	?>
	<label><input type="checkbox" name="billing_city_endichefi[checkbox]" value="1" <?php checked( 1, $val ) ?> />  <?php echo  esc_attr_e( 'Check', 'endichefi' ) ?></label>
	<?php
}


function fill_options_field_endichefi_7(){
	$val = get_option('billing_postcode_endichefi');
	$val = $val ? $val['checkbox'] : null;
	?>
	<label><input type="checkbox" name="billing_postcode_endichefi[checkbox]" value="1" <?php checked( 1, $val ) ?> />  <?php echo  esc_attr_e( 'Check', 'endichefi' ) ?></label>
	<?php
}


function fill_options_field_endichefi_8(){
	$val = get_option('billing_country_endichefi');
	$val = $val ? $val['checkbox'] : null;
	?>
	<label><input type="checkbox" name="billing_country_endichefi[checkbox]" value="1" <?php checked( 1, $val ) ?> />  <?php echo  esc_attr_e( 'Check', 'endichefi' ) ?></label>
	<?php
}


function fill_options_field_endichefi_9(){
	$val = get_option('billing_state_endichefi');
	$val = $val ? $val['checkbox'] : null;
	?>
	<label><input type="checkbox" name="billing_state_endichefi[checkbox]" value="1" <?php checked( 1, $val ) ?> />  <?php echo  esc_attr_e( 'Check', 'endichefi' ) ?></label>
	<?php
}


function fill_options_field_endichefi_10(){
	$val = get_option('billing_phone_endichefi');
	$val = $val ? $val['checkbox'] : null;
	?>
	<label><input type="checkbox" name="billing_phone_endichefi[checkbox]" value="1" <?php checked( 1, $val ) ?> />  <?php echo  esc_attr_e( 'Check', 'endichefi' ) ?></label>
	<?php
}


function fill_options_field_endichefi_11(){
	$val = get_option('order_comments_endichefi');
	$val = $val ? $val['checkbox'] : null;
	?>
	<label><input type="checkbox" name="order_comments_endichefi[checkbox]" value="1" <?php checked( 1, $val ) ?> />  <?php echo  esc_attr_e( 'Check', 'endichefi' ) ?></label>
	<?php
}











function sanitize_callback_endichefi( $options ){ 

	foreach( $options as $name => & $val ){
		if( $name == 'input' )
			$val = strip_tags( $val );

		if( $name == 'checkbox' )
			$val = intval( $val );
	}

	return $options;
}





add_filter( 'woocommerce_checkout_fields' , 'customize_checkout_fields_endichefi' );
  
function customize_checkout_fields_endichefi( $fields ) {
	
$billing_first_name_endichefi = get_option( 'billing_first_name_endichefi');
$billing_first_name_endichefi = $billing_first_name_endichefi ? $billing_first_name_endichefi['checkbox'] : null;
if( $billing_first_name_endichefi == '1' ) {  unset($fields['billing']['billing_first_name']); }

$billing_last_name_endichefi = get_option( 'billing_last_name_endichefi');
$billing_last_name_endichefi = $billing_last_name_endichefi ? $billing_last_name_endichefi['checkbox'] : null;
if( $billing_last_name_endichefi == '1' ) { unset($fields['billing']['billing_last_name']); }


$billing_company_endichefi = get_option( 'billing_company_endichefi');
$billing_company_endichefi = $billing_company_endichefi ? $billing_company_endichefi['checkbox'] : null;
if( $billing_company_endichefi == '1' ) { unset($fields['billing']['billing_company']); }


$billing_address_1_endichefi = get_option( 'billing_address_1_endichefi');
$billing_address_1_endichefi = $billing_address_1_endichefi ? $billing_address_1_endichefi['checkbox'] : null;
if( $billing_address_1_endichefi == '1' ) { unset($fields['billing']['billing_address_1']); }




$billing_address_2_endichefi = get_option( 'billing_address_2_endichefi');
$billing_address_2_endichefi = $billing_address_2_endichefi ? $billing_address_2_endichefi['checkbox'] : null;
if( $billing_address_2_endichefi == '1' ) { unset($fields['billing']['billing_address_2']); }


$billing_city_endichefi = get_option( 'billing_city_endichefi');
$billing_city_endichefi = $billing_city_endichefi ? $billing_city_endichefi['checkbox'] : null;
if( $billing_city_endichefi == '1' ) { unset($fields['billing']['billing_city']); }


$billing_postcode_endichefi = get_option( 'billing_postcode_endichefi');
$billing_postcode_endichefi = $billing_postcode_endichefi ? $billing_postcode_endichefi['checkbox'] : null;
if( $billing_postcode_endichefi == '1' ) { unset($fields['billing']['billing_postcode']); }


$billing_country_endichefi = get_option( 'billing_country_endichefi');
$billing_country_endichefi = $billing_country_endichefi ? $billing_country_endichefi['checkbox'] : null;
if( $billing_country_endichefi == '1' ) {unset($fields['billing']['billing_country']);}


$billing_state_endichefi = get_option( 'billing_state_endichefi');
$billing_state_endichefi = $billing_state_endichefi ? $billing_state_endichefi['checkbox'] : null;
if( $billing_state_endichefi == '1' ) { unset($fields['billing']['billing_state']); }


$billing_phone_endichefi = get_option( 'billing_phone_endichefi');
$billing_phone_endichefi = $billing_phone_endichefi ? $billing_phone_endichefi['checkbox'] : null;
if( $billing_phone_endichefi == '1' ) { unset($fields['billing']['billing_phone']); }


$order_comments_endichefi = get_option( 'order_comments_endichefi');
$order_comments_endichefi = $order_comments_endichefi ? $order_comments_endichefi['checkbox'] : null;
if( $order_comments_endichefi == '1' ) { unset($fields['order']['order_comments']); }





	
 
    return $fields;
	
	}


