<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Include all the needed files
 *
 * (!) Note for Clients: please, do not modify this or other theme's files. Use child theme instead!
 */

if ( ! defined( 'US_ACTIVATION_THEMENAME' ) ) {
	define( 'US_ACTIVATION_THEMENAME', 'Impreza' );
}

$us_theme_supports = array(
	'plugins' => array(
		'js_composer' => '/framework/plugins-support/js_composer/js_composer.php',
		'Ultimate_VC_Addons' => '/framework/plugins-support/Ultimate_VC_Addons.php',
		'revslider' => '/framework/plugins-support/revslider.php',
		'contact-form-7' => NULL,
		'gravityforms' => '/framework/plugins-support/gravityforms.php',
		'woocommerce' => '/framework/plugins-support/woocommerce/woocommerce.php',
		'codelights' => '/framework/plugins-support/codelights.php',
		'wpml' => '/framework/plugins-support/wpml.php',
		'bbpress' => '/framework/plugins-support/bbpress.php',
		'tablepress' => '/framework/plugins-support/tablepress.php',
		'the-events-calendar' => '/framework/plugins-support/the_events_calendar.php',
		'us-header-builder' => '/framework/plugins-support/us_header_builder.php',
		'tiny_mce' => '/framework/plugins-support/tiny_mce.php',
	),
);

require dirname( __FILE__ ) . '/framework/framework.php';

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

//Judges
add_action( 'init', 'register_post_judge', 0 );
function register_post_judge() {
	$args = array(
		'label'  => _x(
			'Judge', 'Post Type General Name', 'text_domain' ),
		'labels' => array(
			'name' => _x(
				'Judge', 'Post Type General Name', 'text_domain' ),
			'singular_name' => _x(
				'Judge', 'Post Type Singular Name', 'text_domain' ),
			'add_new' => __( 'Add', 'text_domain' ),
			'add_new_item' => __( 'Add', 'text_domain' ),
			'edit_item' => __( 'Edit', 'text_domain' ),
			'new_item' => __( 'New', 'text_domain' ),
			'view_item' => __( 'View', 'text_domain' ),
			'search_items' => __( 'search', 'text_domain' ),
			'not_found' => __( 'not found', 'text_domain' ),
			'not_found_in_trash' => __( 'not found in trash', 'text_domain' ),
			'parent_item_colon' => null,
			'all_items' => __( 'All', 'text_domain' ),
			'archives' => __( 'archives', 'text_domain' ),
			'insert_into_item' => __( 'insert', 'text_domain' ),
			'uploaded_to_this_item' => _x(
				'uploaded to', 'text_domain' ),
			'featured_image' => __( 'featured', 'text_domain' ),
			'set_featured_image' => __( 'set featured', 'text_domain' ),
			'remove_featured_image' => __( 'remove featured', 'text_domain' ),
			'use_featured_image' => __( 'use featured', 'text_domain' ),
			'menu_name' => __( 'בתי משפט', 'text_domain' ),
			'name_admin_bar' => __( 'בתי משפט', 'text_domain' ),
			'items_list' => __( 'List', 'text_domain' ),
			'items_list_navigation' => __( 'Nav', 'text_domain' ),
		),
		'description' => '',
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-welcome-learn-more',
		'map_meta_cap' => null,
		'hierarchical' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'custom-fields',
			'revisions',
			'page-attributes',
			'post-formats',
		),
		'has_archive' => true,
		'rewrite' => array(
			'slug' => 'judge',
			'with_front' => true,
			'feeds' => false,
			'pages' => true,
		),
		'permalink_epmask' => EP_PERMALINK,
		'query_var' => true,
		'can_export' => true,
		'delete_with_user' => null,
		'show_in_rest' => false,
		'rest_base' => 'judge',
		'_builtin' => false,
	);
	register_post_type( 'judge', $args );
}

//Cases
add_action( 'init', 'register_post_cases', 0 );
function register_post_cases() {
	$args = array(
		'label'  => _x(
			'Cases', 'Post Type General Name', 'text_domain' ),
		'labels' => array(
			'name' => _x(
				'Cases', 'Post Type General Name', 'text_domain' ),
			'singular_name' => _x(
				'Cases', 'Post Type Singular Name', 'text_domain' ),
			'add_new' => __( 'Add', 'text_domain' ),
			'add_new_item' => __( 'Add', 'text_domain' ),
			'edit_item' => __( 'Edit', 'text_domain' ),
			'new_item' => __( 'New', 'text_domain' ),
			'view_item' => __( 'View', 'text_domain' ),
			'search_items' => __( 'search', 'text_domain' ),
			'not_found' => __( 'not found', 'text_domain' ),
			'not_found_in_trash' => __( 'not found in trash', 'text_domain' ),
			'parent_item_colon' => null,
			'all_items' => __( 'All', 'text_domain' ),
			'archives' => __( 'archives', 'text_domain' ),
			'insert_into_item' => __( 'insert', 'text_domain' ),
			'uploaded_to_this_item' => _x(
				'uploaded to', 'text_domain' ),
			'featured_image' => __( 'featured', 'text_domain' ),
			'set_featured_image' => __( 'set featured', 'text_domain' ),
			'remove_featured_image' => __( 'remove featured', 'text_domain' ),
			'use_featured_image' => __( 'use featured', 'text_domain' ),
			'menu_name' => __( 'סוגי תביעות', 'text_domain' ),
			'name_admin_bar' => __( 'סוגי תביעות', 'text_domain' ),
			'items_list' => __( 'List', 'text_domain' ),
			'items_list_navigation' => __( 'Nav', 'text_domain' ),
		),
		'description' => '',
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-book',
		'map_meta_cap' => null,
		'hierarchical' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'custom-fields',
			'revisions',
			'page-attributes',
			'post-formats',
		),
		'has_archive' => true,
		'rewrite' => array(
			'slug' => 'cases',
			'with_front' => true,
			'feeds' => false,
			'pages' => true,
		),
		'permalink_epmask' => EP_PERMALINK,
		'query_var' => true,
		'can_export' => true,
		'delete_with_user' => null,
		'show_in_rest' => false,
		'rest_base' => 'cases',
		'_builtin' => false,
	);
	register_post_type( 'cases', $args );
}

//Lids
add_action( 'init', 'register_post_leads', 0 );
function register_post_leads() {
	$args = array(
		'label'  => _x(
			'Leads', 'Post Type General Name', 'text_domain' ),
		'labels' => array(
			'name' => _x(
				'Leads', 'Post Type General Name', 'text_domain' ),
			'singular_name' => _x(
				'Leads', 'Post Type Singular Name', 'text_domain' ),
			'add_new' => __( 'להוסיף', 'text_domain' ),
			'add_new_item' => __( 'להוסיף', 'text_domain' ),
			'edit_item' => __( 'Edit', 'text_domain' ),
			'new_item' => __( 'New', 'text_domain' ),
			'view_item' => __( 'View', 'text_domain' ),
			'search_items' => __( 'search', 'text_domain' ),
			'not_found' => __( 'not found', 'text_domain' ),
			'not_found_in_trash' => __( 'not found in trash', 'text_domain' ),
			'parent_item_colon' => null,
			'all_items' => __( 'הכול', 'text_domain' ),
			'archives' => __( 'archives', 'text_domain' ),
			'insert_into_item' => __( 'insert', 'text_domain' ),
			'uploaded_to_this_item' => _x(
				'uploaded to', 'text_domain' ),
			'featured_image' => __( 'featured', 'text_domain' ),
			'set_featured_image' => __( 'set featured', 'text_domain' ),
			'remove_featured_image' => __( 'remove featured', 'text_domain' ),
			'use_featured_image' => __( 'use featured', 'text_domain' ),
			'menu_name' => __( 'הגשת תביעה', 'text_domain' ),
			'name_admin_bar' => __( 'הגשת תביעה', 'text_domain' ),
			'items_list' => __( 'List', 'text_domain' ),
			'items_list_navigation' => __( 'Nav', 'text_domain' ),
		),
		'description' => '',
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-portfolio',
		'map_meta_cap' => null,
		'hierarchical' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'custom-fields',
			'revisions',
			'page-attributes',
			'post-formats',
		),
		'has_archive' => true,
		'rewrite' => array(
			'slug' => 'lids',
			'with_front' => true,
			'feeds' => false,
			'pages' => true,
		),
		'permalink_epmask' => EP_PERMALINK,
		'query_var' => true,
		'can_export' => true,
		'delete_with_user' => null,
		'show_in_rest' => false,
		'rest_base' => 'lids',
		'_builtin' => false,
	);
	register_post_type( 'lids', $args );
}
//Second leads
add_action( 'init', 'register_post_second_leads', 0 );
function register_post_second_leads() {
	$args = array(
		'label'  => _x(
			'Second Leads', 'Post Type General Name', 'text_domain' ),
		'labels' => array(
			'name' => _x(
				'Second Leads', 'Post Type General Name', 'text_domain' ),
			'singular_name' => _x(
				'Second Leads', 'Post Type Singular Name', 'text_domain' ),
			'add_new' => __( 'להוסיף', 'text_domain' ),
			'add_new_item' => __( 'להוסיף', 'text_domain' ),
			'edit_item' => __( 'Edit', 'text_domain' ),
			'new_item' => __( 'New', 'text_domain' ),
			'view_item' => __( 'View', 'text_domain' ),
			'search_items' => __( 'search', 'text_domain' ),
			'not_found' => __( 'not found', 'text_domain' ),
			'not_found_in_trash' => __( 'not found in trash', 'text_domain' ),
			'parent_item_colon' => null,
			'all_items' => __( 'הכול', 'text_domain' ),
			'archives' => __( 'archives', 'text_domain' ),
			'insert_into_item' => __( 'insert', 'text_domain' ),
			'uploaded_to_this_item' => _x(
				'uploaded to', 'text_domain' ),
			'featured_image' => __( 'featured', 'text_domain' ),
			'set_featured_image' => __( 'set featured', 'text_domain' ),
			'remove_featured_image' => __( 'remove featured', 'text_domain' ),
			'use_featured_image' => __( 'use featured', 'text_domain' ),
			'menu_name' => __( 'תביעת ספאם', 'text_domain' ),
			'name_admin_bar' => __( 'תביעת ספאם', 'text_domain' ),
			'items_list' => __( 'List', 'text_domain' ),
			'items_list_navigation' => __( 'Nav', 'text_domain' ),
		),
		'description' => '',
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-portfolio',
		'map_meta_cap' => null,
		'hierarchical' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'custom-fields',
			'revisions',
			'page-attributes',
			'post-formats',
		),
		'has_archive' => true,
		'rewrite' => array(
			'slug' => 'second_lids',
			'with_front' => true,
			'feeds' => false,
			'pages' => true,
		),
		'permalink_epmask' => EP_PERMALINK,
		'query_var' => true,
		'can_export' => true,
		'delete_with_user' => null,
		'show_in_rest' => false,
		'rest_base' => 'second_lids',
		'_builtin' => false,
	);
	register_post_type( 'second_lids', $args );
}

add_action( 'init', 'register_post_third_leads', 0 );
function register_post_third_leads() {
	$args = array(
		'label'  => _x(
			'Third Leads', 'Post Type General Name', 'text_domain' ),
		'labels' => array(
			'name' => _x(
				'Third Leads', 'Post Type General Name', 'text_domain' ),
			'singular_name' => _x(
				'Third Leads', 'Post Type Singular Name', 'text_domain' ),
			'add_new' => __( 'להוסיף', 'text_domain' ),
			'add_new_item' => __( 'להוסיף', 'text_domain' ),
			'edit_item' => __( 'Edit', 'text_domain' ),
			'new_item' => __( 'New', 'text_domain' ),
			'view_item' => __( 'View', 'text_domain' ),
			'search_items' => __( 'search', 'text_domain' ),
			'not_found' => __( 'not found', 'text_domain' ),
			'not_found_in_trash' => __( 'not found in trash', 'text_domain' ),
			'parent_item_colon' => null,
			'all_items' => __( 'הכול', 'text_domain' ),
			'archives' => __( 'archives', 'text_domain' ),
			'insert_into_item' => __( 'insert', 'text_domain' ),
			'uploaded_to_this_item' => _x(
				'uploaded to', 'text_domain' ),
			'featured_image' => __( 'featured', 'text_domain' ),
			'set_featured_image' => __( 'set featured', 'text_domain' ),
			'remove_featured_image' => __( 'remove featured', 'text_domain' ),
			'use_featured_image' => __( 'use featured', 'text_domain' ),
			'menu_name' => __( 'כתב הגנה', 'text_domain' ),
			'name_admin_bar' => __( 'כתב הגנה', 'text_domain' ),
			'items_list' => __( 'List', 'text_domain' ),
			'items_list_navigation' => __( 'Nav', 'text_domain' ),
		),
		'description' => '',
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-portfolio',
		'map_meta_cap' => null,
		'hierarchical' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'custom-fields',
			'revisions',
			'page-attributes',
			'post-formats',
		),
		'has_archive' => true,
		'rewrite' => array(
			'slug' => 'third_lids',
			'with_front' => true,
			'feeds' => false,
			'pages' => true,
		),
		'permalink_epmask' => EP_PERMALINK,
		'query_var' => true,
		'can_export' => true,
		'delete_with_user' => null,
		'show_in_rest' => false,
		'rest_base' => 'third_lids',
		'_builtin' => false,
	);
	register_post_type( 'third_lids', $args );
}

function my_styles() {

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, false );
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_styles' );

add_action('wp_ajax_success_payment', 'success_payment');
add_action('wp_ajax_nopriv_success_payment', 'success_payment');
function success_payment(){

	$lid_id = $_GET['lid_id'];

	if($lid_id){
		update_field('paid','1', $lid_id);
	}
	die();

}
add_action('wp_ajax_delete_lid', 'delete_lid');
add_action('wp_ajax_nopriv_delete_lid', 'delete_lid');
function delete_lid(){

	$lid_id = $_GET['lid_id'];

	if($lid_id){
       // wp_delete_post( $lid_id);

		$updated = wp_update_post(
			array(
				'ID' => $lid_id,
				'post_status' => 'draft'

			)
		);
	}
	die();

}




function PostVars($vars,$PostVarsURL)
{
	$urlencoded = http_build_query($vars);
    #init curl connection
	if( function_exists( "curl_init" ))
	{
		$CR = curl_init();
		curl_setopt($CR, CURLOPT_URL, $PostVarsURL);
		curl_setopt($CR, CURLOPT_POST, 1);
		curl_setopt($CR, CURLOPT_FAILONERROR, true);
		curl_setopt($CR, CURLOPT_POSTFIELDS, $urlencoded );
		curl_setopt($CR, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($CR, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($CR, CURLOPT_FAILONERROR,true);
        #actual curl execution perfom
		$r = curl_exec( $CR );
		$error = curl_error ( $CR );
        # some error , send email to developer
		if( !empty( $error )) {

			echo $error;

			die();
		}
		curl_close( $CR );
		return $r;
	}
	else
	{
		echo "No curl_init" ;
		die();
	}
}

function cardcomPay($new_lid, $title_lid, $finishsumm, $client_email, $client_first_name, $client_last_name ){

	$lang = 'he';
	$currency = 'ils';

	/*For Cardcom*/

	if ( $currency == 'usd' ) {
		$currency_pay_card = '2';
	}
	elseif ($currency =='eur'){
		$currency_pay_card = '978';
	}
	elseif ( $currency == 'ils'){
		$currency_pay_card = '1';
	}

    #Global Definetions :
    $TerminalNumber =  get_field('terminal_number', 'options'); // 1000; # Company terminal
    $UserName =  get_field('user_name', 'options'); // 'barak9611';   # API User
    $CreateInvoice = true;  # to Create Invoice (Need permissions to create invoice )
    $IsIframe = false; //  # Iframe or Redirect
    $Operation = 1;  # = 1 - Bill Only , 2- Bill And Create Token , 3 - Token Only , 4 - Suspended Deal (Order).

    #Create Post Information
    // Account vars
    $vars = array();
    $vars['TerminalNumber'] = $TerminalNumber;
    $vars['UserName'] = $UserName;
    $vars["APILevel"] = "10"; // req
    $vars['codepage'] = '65001'; // unicode
    $vars["Operation"] = $Operation;

    $vars["CreditType"] = '1';

    $vars['DefaultNumOfPayments'] = '1';

    $vars["Language"] = $lang; //  'en';   // page languge he- hebrew , en - english , ru , ar
    $vars["CoinID"] = $currency_pay_card; // billing coin , 1- NIS , 2- USD other , article :  http://kb.cardcom.co.il/article/AA-00247/0

    $vars['ProductName'] = $title_lid; // Product Name , will show if no invoice will be created.

    // Indicator Url \ Notify URL . after use -  http://kb.cardcom.co.il/article/AA-00240/0

    $vars["ReturnValue"] = "1234"; // Optional , ,recommended , value that will be return and save in CardCom system

    $vars["ShowInvoiceHead"] = "true"; //  if show & edit Invoice Details on the page.
    $vars["InvoiceHeadOperation"] = "1"; //  0 = no create & show Invoice.  1 =(default)create Invoice.  2 = show Details Invoice but not create Invoice !

    if ($CreateInvoice) {
        // article for invoice vars:  http://kb.cardcom.co.il/article/AA-00244/0
    	$vars['IsCreateInvoice'] = "true";
        // customer info :
        $vars["InvoiceHead.CustName"] = $client_first_name[0]. ' ' .$client_last_name[0]; // customer name
        $vars["InvoiceHead.SendByEmail"] = "true"; // will the invoice be send by email to the customer
        $vars["InvoiceHead.Language"] = "he"; // he or en only
        $vars["InvoiceHead.Email"] = $client_email[0];

        // products info

        $vars["InvoiceLines1.Description"] = $title_lid;
        $vars["InvoiceLines1.Price"] = floatval($finishsumm);
        $vars["InvoiceLines1.Quantity"] = "1";
        $vars["InvoiceLines1.IsPriceIncludeVAT"] = "true";


    }
    $vars["SumToBill"] =  floatval($finishsumm);// Sum To Bill

    $sucessU = home_url() . '/thank-you/?summ=' . $finishsumm . '&full_name=' . $client_first_name;
    $vars['SuccessRedirectUrl'] = $sucessU ;


    $vars['ErrorRedirectUrl'] = get_home_url()."/wp-admin/admin-ajax.php?action=delete_lid&lid_id=" . $new_lid; // Error Page

    // Other Optional vars :

    //$vars["CancelType"] = "2"; # show Cancel button on start ,

    $vars["CancelUrl"] = get_home_url()."/wp-admin/admin-ajax.php?action=delete_lid&lid_id=" . $new_lid;

    $vars['IndicatorUrl'] = get_home_url()."/wp-admin/admin-ajax.php?action=success_payment" .
    "&lid_id=" . $new_lid;

    // Send Data To Bill Gold Server
    $r = PostVars($vars, 'https://secure.cardcom.solutions/Interface/LowProfile.aspx');
    parse_str($r, $responseArray);


    # Is Deal
    if ($responseArray['ResponseCode'] == "0") {
        # Iframe or  Redirect User :
    	if ($IsIframe) {

    		$iframe = '<iframe runat="server"  ID="TestIfame" width="700px" height="700px" src="' . $responseArray['url'] . '"></iframe>';
    		return $iframe;

        } else  // redirect
        {
        	return $responseArray['url'];
        }

    } # Show Error to developer only
    else {

    	return $r;
    }
    /// pay end
}
add_action('wp_ajax_register_new_lid', 'register_new_lid');
add_action('wp_ajax_nopriv_register_new_lid', 'register_new_lid');
function register_new_lid(){

	$files1 = isset($_FILES['step3_file4_1'])? $_FILES['step3_file4_1'] : false;
	$files2 = isset($_FILES['step3_file4_2'])? $_FILES['step3_file4_2'] : false;
	$files3 = isset($_FILES['step3_file4_3'])? $_FILES['step3_file4_3'] : false;
	$files4 = isset($_FILES['step3_file4_4'])? $_FILES['step3_file4_4'] : false;
	$files5 = isset($_FILES['step3_file4_5'])? $_FILES['step3_file4_5'] : false;
	$files6 = isset($_FILES['step3_file4_6'])? $_FILES['step3_file4_6'] : false;
	$files7 = isset($_FILES['step3_file4_7'])? $_FILES['step3_file4_7'] : false;
	$files8 = isset($_FILES['step3_file4_8'])? $_FILES['step3_file4_8'] : false;
	$files9 = isset($_FILES['step3_file4_9'])? $_FILES['step3_file4_9'] : false;
	$files10 = isset($_FILES['step3_file4_10'])? $_FILES['step3_file4_10'] : false;
    //print_r($files);
    //print_r($_POST);
	$client_passport    = $_POST['client_passport'];
	$client_first_name  = $_POST['client_first_name'];
	$client_last_name   = $_POST['client_last_name'];
	$client_city        = $_POST['client_city'];
	$client_street      = $_POST['client_street'];
	$client_index       = $_POST['client_index'];
	$client_numb_flour  = $_POST['client_numb_flour'];
	$client_numb_house  = $_POST['client_numb_house'];
	$client_fax         = $_POST['client_fax'];
	$client_phone       = $_POST['client_phone'];
	$client_email       = $_POST['client_email'];
	$client_second_phone = $_POST['client_second_phone'];
	$pay_sum            = $_POST['pay_sum'];

	$client_count           = count($client_first_name);

	$company_owner_passport = $_POST['step3_input3_1'];
	$name_diller            = $_POST["step3_input4"];
	$company_name           = $_POST['step3_input2_1'];
	$company_id_number      = $_POST['step3_input1'];
	$passport               = $_POST['passport'];
	$first_name             = $_POST['first_name'];
	$last_name              = $_POST['last_name'];
	$city                   = $_POST['city'];
	$street                 = $_POST['street'];
	$index                  = $_POST['index'];
	$numb_flour             = $_POST['numb_flour'];
	$numb_house             = $_POST['numb_house'];
	$fax                    = $_POST['fax'];
	$phone         = $_POST['phone'];
	$email         = $_POST['email'];
	$second_phone  = $_POST['second_phone'];
	$mesto         = $_POST['step3_input2'];
	$usherb        = $_POST['step3_input10'];
	$rashodi       = $_POST['step3_input11'];
	$defendant_count = count($index);
	$defendant_type  = $_POST['step2_2_radio1'];
	$sud    = $_POST['step3_select2'];
	$reason = $_POST['step3_select1'];
	$date   = $_POST['step3_input3'];
	$check1 = isset($_POST['step4_check1'])? $_POST['step4_check1'] : 0;
	$less_then_five = isset($_POST['step4_check2'])? $_POST['step4_check2'] : 0;
	$not_company    = isset($_POST['step4_check4'])? $_POST['step4_check4'] : 0;
	$sign  = isset($_POST['step4_check3'])? $_POST['step4_check3'] : 0;
	$desc1 = $_POST['step3_textarea1'];
	$desc2 = $_POST['step3_textarea2'];
	$summ1 = $_POST['summ'];
	$finishsumm = $_POST['edit_summ'];
	$case = $_POST['step3_select1'];
	foreach ($client_first_name as $value) {
		$name = $value;
	}

	$title_lid = $name;

	$args = array(
		'post_author' => 0,
        'post_status' => 'publish', // (Draft | Pending | Publish)
        'post_title' => $title_lid,
        'post_type' => 'lids'
    );


	$new_lid = wp_insert_post($args);

	if ($files1) {



		$file1 = array(
			'name' =>     $files1['name'],
			'type' =>     $files1['type'],
			'tmp_name' => $files1['tmp_name'],
			'error' =>    $files1['error'],
			'size' =>     $files1['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file1, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file', $file_id, $new_lid);


	}

	if ($files2) {
		$file2 = array(
			'name' => $files2['name'],
			'type' => $files2['type'],
			'tmp_name' => $files2['tmp_name'],
			'error' => $files2['error'],
			'size' => $files2['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file2, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file1', $file_id, $new_lid);

	}
	if ($files3) {
		$file3 = array(
			'name' => $files3['name'],
			'type' => $files3['type'],
			'tmp_name' => $files3['tmp_name'],
			'error' => $files3['error'],
			'size' => $files3['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file3, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file2', $file_id, $new_lid);

	}
	if ($files4) {
		$file4 = array(
			'name'     => $files4['name'],
			'type'     => $files4['type'],
			'tmp_name' => $files4['tmp_name'],
			'error'    => $files4['error'],
			'size'     => $files4['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file4, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file4', $file_id, $new_lid);

	}
	if ($files5) {
		$file5 = array(
			'name'     => $files5['name'],
			'type'     => $files5['type'],
			'tmp_name' => $files5['tmp_name'],
			'error'    => $files5['error'],
			'size'     => $files5['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file5, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file5', $file_id, $new_lid);

	}

	if ($files6) {
		$file6 = array(
			'name'     => $files6['name'],
			'type'     => $files6['type'],
			'tmp_name' => $files6['tmp_name'],
			'error'    => $files6['error'],
			'size'     => $files6['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file6, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file6', $file_id, $new_lid);

	}

	if ($files7) {
		$file7 = array(
			'name'     => $files7['name'],
			'type'     => $files7['type'],
			'tmp_name' => $files7['tmp_name'],
			'error'    => $files7['error'],
			'size'     => $files7['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file7, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file7', $file_id, $new_lid);

	}

	if ($files8) {
		$file8 = array(
			'name'     => $files8['name'],
			'type'     => $files8['type'],
			'tmp_name' => $files8['tmp_name'],
			'error'    => $files8['error'],
			'size'     => $files8['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file8, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file8', $file_id, $new_lid);

	}

	if ($files9) {
		$file9 = array(
			'name'     => $files9['name'],
			'type'     => $files9['type'],
			'tmp_name' => $files9['tmp_name'],
			'error'    => $files9['error'],
			'size'     => $files9['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file9, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file9', $file_id, $new_lid);

	}

	if ($files10) {
		$file10 = array(
			'name'     => $files10['name'],
			'type'     => $files10['type'],
			'tmp_name' => $files10['tmp_name'],
			'error'    => $files10['error'],
			'size'     => $files10['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file10, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file10', $file_id, $new_lid);

	}







//add all clients to repeater field
	$clients_array = array();
	for($i = 0; $i < $client_count; $i++) {

		$clients_array []= array(
			'client_passport' => isset($client_passport[$i]) ? $client_passport[$i] : '-',
			'client_first_name' => isset($client_first_name[$i]) ? $client_first_name[$i] : '-',
			'client_last_name' => isset($client_last_name[$i]) ? $client_last_name[$i] : '-',
			'client_city' => isset($client_city[$i]) ? $client_city[$i] : '-',
			'client_street' => isset($client_street[$i]) ? $client_street[$i] : '-',
			'client_index' => isset($client_index[$i]) ? $client_index[$i] : '-',
			'client_numb_flour' => isset($client_numb_flour[$i]) ? $client_numb_flour[$i] : '-',
			'client_numb_house' => isset($client_numb_house[$i]) ? $client_numb_house[$i] : '-',
			'client_fax' => isset($client_fax[$i]) ? $client_fax[$i] : '-',
			'client_phone' => isset($client_phone[$i]) ? $client_phone[$i] : '-',
			'client_email' => isset($client_email[$i]) ? $client_email[$i] : '-',
			'client_second_phone' => isset($client_second_phone[$i]) ? $client_second_phone[$i] : '-'
		);

	}

    //add all companies to repeater field
	$defendant_array = array();
	for($i = 0; $i < $defendant_count; $i++) {

		$defendant_array []= array(
			'company_name' => isset($company_name[$i]) ? $company_name[$i] : '-',
			'company_id_number' => isset($company_id_number[$i])? $company_id_number[$i] : '-',
			'company_owner_passport' => isset($company_owner_passport[$i]) ? $company_owner_passport[$i] : '-',
			'name_diller' => isset($name_diller[$i]) ? $name_diller[$i] : '-',
			'passport' => isset($passport[$i]) ? $passport[$i] : '-',
			'first_name' => isset($first_name[$i]) ? $first_name[$i] : '-',
			'last_name' => isset($last_name[$i]) ? $last_name[$i] : '-',
			'city' => isset($city[$i]) ? $city[$i] : '-',
			'street' => isset($street[$i]) ? $street[$i] : '-',
			'index' => isset($index[$i]) ? $index[$i] : '-',
			'numb_flour' => isset($numb_flour[$i]) ? $numb_flour[$i] : '-',
			'numb_house' => isset($numb_house[$i]) ? $numb_house[$i] : '-',
			'fax' => isset($fax[$i]) ? $fax[$i] : '-',
			'phone' => isset($phone[$i]) ? $phone[$i] : '-',
			'email' => isset($email[$i]) ? $email[$i] : '-',
			'second_phone' => isset($second_phone[$i]) ? $second_phone[$i] : '-'
		);
	}

    //email to admin
	$clients_mail = array();
	for($i = 0; $i < $client_count; $i++) {

		$clients_mail []= array(
			'client_passport' => $client_passport[$i],
			'client_first_name' => $client_first_name[$i],
			'client_last_name' => $client_last_name[$i],
			'client_city' => $client_city[$i],
			'client_street' =>  $client_street[$i],
			'client_index' =>  $client_index[$i],
			'client_numb_flour' => $client_numb_flour[$i],
			'client_numb_house' => $client_numb_house[$i],
			'client_fax' => $client_fax[$i],
			'client_phone' =>  $client_phone[$i],
			'client_email' => $client_email[$i],
			'client_second_phone' => $client_second_phone[$i],
			'passport' => $passport[$i],
			'first_name' => $first_name[$i],
			'last_name' => $last_name[$i],
			'city' => $city[$i],
			'street' => $street[$i],
			'index' =>  $index[$i],
			'numb_flour' => $numb_flour[$i],
			'numb_house' => $numb_house[$i],
			'fax' => $fax[$i],
			'phone' =>  $phone[$i],
			'email' => $email[$i],
			'second_phone' =>  $second_phone[$i],
		);

	}


	$defendant_mail = array();
	for($i = 0; $i < $defendant_count; $i++) {

		$defendant_mail []= array(
			'company_name' => $company_name[$i],
			'company_id_number' => $company_id_number[$i],
			'company_owner_passport' => $company_owner_passport[$i],
			'name_diller' => $name_diller[$i],
			'passport' => $passport[$i],
			'first_name' => $first_name[$i],
			'last_name' => $last_name[$i],
			'city' => $city[$i],
			'street' => $street[$i],
			'index' => $index[$i],
			'numb_flour' => $numb_flour[$i],
			'numb_house' => $numb_house[$i],
			'fax' => $fax[$i],
			'phone' => $phone[$i],
			'email' => $email[$i],
			'second_phone' => $second_phone[$i],
		);
	}
	foreach ($clients_mail as  $value) {
		$msg .= "<strong>התובעת:</strong>" . '<br />';
		$msg .= "<strong>שם פרטי: </strong>"  . $value['client_first_name'] . "<br />";      
		$msg .= "<strong>שם משפחה:</strong>" . $value['client_last_name'] . "<br />";
		$msg .= "<strong>ת.ז:</strong>" . $value["client_passport"] . "<br />";
		if(!empty( $value['client_phone'])):
			$msg .= "<strong>טלפון נייד:</strong>" . $value['client_phone'] . "<br />";
		endif;
		if(!empty($value['client_second_phone'])):
			$msg .= "<strong>טלפון נוסף:</strong>" . $value['client_second_phone'] . "<br />";
		endif;
		if(!empty($value['client_email'] )):
			$msg .= "<strong> דואל: </strong>" . $value['client_email'] . '<br />';
		endif;
		if(!empty($value["client_index"])):
			$msg .= "<strong>מיקוד: </strong>" . $value["client_index"] . "<br />"; 
		endif;
		if(!empty($value['client_numb_flour'] )):
			$msg .= "<strong>מספר:</strong>" . $value['client_numb_flour'] . "<br />"; 
		endif;    
		$msg .= "<strong>רחוב:</strong>" . $value['client_street'] . "<br />";      
		$msg .= "<strong> עיר: </strong>" . $value["client_city"] . "<br />";
		if(!empty($value['client_numb_house'] )):
			$msg .= "<strong>דירה: </strong> " . $value['client_numb_house'] . "<br />";
		endif;
		if(!empty($value['client_fax'])):
			$msg .= "<strong>פקס: </strong>" . $value["client_fax"] . "<br />"; 
		endif;


		$msg .= "<hr>";

        # code...
	}


	foreach ($defendant_mail as $value) {
          # code...

		$msg .= "<strong>הנתבעת:</strong> <br />";
		if(!empty( $value['company_name'])):
			$msg .= "<strong>שם החברה: </strong>"  . $value['company_name'] . "<br />"; 
		endif;
		if(!empty( $value['company_id_number'])):
			$msg .= "<strong>.ח.פ: </strong>"  . $value['company_id_number'] . "<br />"; 
		endif;
		if(!empty($value['company_owner_passport'])):
			$msg .= "<strong>ת.ז/ עוסק מורשה: </strong>"  . $value['company_owner_passport'] . "<br />"; 
		endif;
		if(!empty($value['company_owner_passport'] )):
			$msg .= "<strong>שם עוסק מורשה: </strong>"  . $value['name_diller'] . "<br />"; 
		endif;
		if(!empty( $value['first_name'])):
			$msg .= "<strong>שם פרטי: </strong>"  . $value['first_name'] . "<br />";  
		endif;
		if(!empty( $value['last_name'])):    
			$msg .= "<strong>שם משפחה:</strong>" . $value['last_name'] . "<br />";
		endif;
		if(!empty($value["passport"])):
			$msg .= "<strong>ת.ז:</strong>" . $value["passport"] . "<br />";
		endif;
		if(!empty( $value['phone'])):
			$msg .= "<strong>טלפון נייד:</strong>" . $value['phone'] . "<br />";
		endif;
		if(!empty($value['second_phone'])):
			$msg .= "<strong>טלפון נוסף:</strong>" . $value['second_phone'] . "<br />";
		endif;
		if(!empty($value['email'] )):
			$msg .= "<strong> דואל: </strong>" . $value['email'] . '<br />';
		endif;
		if(!empty($value["index"])):
			$msg .= "<strong>מיקוד: </strong>" . $value["index"] . "<br />"; 
		endif;
		if(!empty($value['numb_flour'] )):
			$msg .= "<strong>מספר:</strong>" . $value['numb_flour'] . "<br />"; 
		endif;    
		$msg .= "<strong>רחוב:</strong>" . $value['street'] . "<br />";      
		$msg .= "<strong> עיר: </strong>" . $value["city"] . "<br />";
		if(!empty($value['client_numb_house'] )):
			$msg .= "<strong>דירה: </strong> " . $value['numb_house'] . "<br />";
		endif;
		if(!empty($value['fax'])):
			$msg .= "<strong>פקס: </strong>" . $value["fax"] . "<br />"; 
		endif;
		$msg .= "<hr />";

	}



    // update it
	$clients_updates = update_field('clients', $clients_array, $new_lid);
	update_field('defendant', $defendant_array, $new_lid);
	update_field('usherb',$usherb, $new_lid);
	update_field('rashodi',$rashodi,$new_lid);
	update_field('judge', $judge, $new_lid);
	update_field('case', $case, $new_lid);
	update_field('finishsumm', $pay_sum, $new_lid);
	update_field('date', $date, $new_lid);
	update_field('reason', $reason, $new_lid);
	update_field('sud',$sud, $new_lid);
	update_field('desc1', $desc1, $new_lid);
	update_field('desc2', $desc2, $new_lid);
	update_field('less_then_five', $less_then_five, $new_lid);
	update_field('not_company', $not_company, $new_lid);
	update_field('sign', $sign, $new_lid);
	update_field('confidation',$check1, $new_lid);
	update_field('mesto',$mesto, $new_lid);

	if($defendant_type =='0'){
		update_field('private_person', 1, $new_lid);
	}
	elseif ($defendant_type == '1'){
		update_field('company', 1, $new_lid);
	}
	else{
		update_field('company_person', 1, $new_lid);
	}

	update_field('paid', '0', $new_lid);

	$payment = cardcomPay($new_lid, $title_lid, $pay_sum, $client_email, $client_first_name, $client_last_name );
    //
 //
	$mail_content .= home_url().'/wp-admin/post.php?post='.$new_lid.'&action=edit';
	$title_form = "פנייה מאתר בנושא: הגשת תביעה";
	if(!empty($case) || !empty($date) || !empty($desc1) || !empty($desc2) || !empty($mesto)):
		$msg .= "<strong>למידע נוסף</strong><br />";
	endif;
	if(!empty($case)):
		$msg .= "<strong>סוג תביעה:</strong> " . " " . $case . "<br />";
	endif;
	if(!empty($mesto)):
		$msg .= "<strong>מקום האירוע:</strong> " . " " . $mesto . "<br />";
	endif;
	if(!empty($date)):
		$msg .= "<strong>תאריך האירוע:</strong> " . " " . $date . "<br />";
	endif;

	$msg .= "<strong>בית המשפט:</strong> " . " " . $sud . "<br />";

	if(!empty( $desc1)):
		$msg .= "<strong>תיאור האירוע: </strong> " . " " . $desc1 . "<br />";
	endif;
	if(!empty( $desc2)):
		$msg .= "<strong>תיאור הנזק: </strong> "  . " "  . $desc2 . "<br />";
	endif;
	if(!empty($usherb)):
		$msg .= "<br /><strong>נזק כספי על סך:</strong> ". " " . $usherb; 
	endif;
	if(!empty($rashodi)):
		$msg .= "<br /><strong>הוצאות משפטיות:</strong> " . " " . $rashodi; 
	endif;
	$msg .= "<br /><strong>סהכ לתשלום:</strong> " . " " . $pay_sum;
	$msg .= "<br /><strong>Url:</strong> " . $mail_content;
	$msg .= "<hr />";
     //email to admin
	$to = 'taclick100@gmail.com, yagoda304@gmail.com, office1taclick@gmail.com';
	$headers = "Content-type: text/html; charset=utf-8 \r\n";
	$headers .= "From: or.com@email.com ";



	$succes_mail = mail($to,$title_form,$msg, $headers);
    //


	if($succes_mail && $new_lid && $payment){
		echo json_encode( array('success' => true, 'message' => $clients_array, 'redirect' => $payment));
	}else{
		echo json_encode( array('success' => false, 'message' => $clients_array, 'redirect' => $payment));
	}

	die();
}
add_action('wp_ajax_register_second_lid', 'register_second_lid');
add_action('wp_ajax_nopriv_register_second_lid', 'register_second_lid');
function register_second_lid(){

	$files1         = isset($_FILES['step3_file1_1'])? $_FILES['step3_file1'] : false;
	$files1_1       = isset($_FILES['step3_file1_2'])? $_FILES['step3_file1_1'] : false;
	$files1_2       = isset($_FILES['step3_file1_3'])? $_FILES['step3_file1_2'] : false;
	$files1_3       = isset($_FILES['step3_file1_4'])? $_FILES['step3_file1_3'] : false;
	$files1_4       = isset($_FILES['step3_file1_5'])? $_FILES['step3_file1_4'] : false;
	
	$files2           = isset($_FILES['step3_file2_1'])? $_FILES['step3_file2'] : false;
	$files2_1         = isset($_FILES['step3_file2_2'])? $_FILES['step3_file2_1'] : false;
	$files2_2         = isset($_FILES['step3_file2_3'])? $_FILES['step3_file2_2'] : false;
	$files2_3         = isset($_FILES['step3_file2_4'])? $_FILES['step3_file2_3'] : false;
	$files2_4         = isset($_FILES['step3_file2_5'])? $_FILES['step3_file2_4'] : false;


	$files4         = isset($_FILES['step3_file4_1'])? $_FILES['step3_file4'] : false;
	$files4_1       = isset($_FILES['step3_file4_2'])? $_FILES['step3_file4_1'] : false;
	$files4_2       = isset($_FILES['step3_file4_3'])? $_FILES['step3_file4_2'] : false;
	$files4_3       = isset($_FILES['step3_file4_4'])? $_FILES['step3_file4_3'] : false;
	$files4_4       = isset($_FILES['step3_file4_5'])? $_FILES['step3_file4_4'] : false;

	$date1          = $_POST['step3_input4'];
	$date2          = $_POST['step3_input5'];
	$date3          = $_POST['step3_input6'];
	$sud            = $_POST['step3_select2'];
    //print_r($_POST);
	$client_passport   = $_POST['client_passport'];
	$client_first_name = $_POST['client_first_name'];
	$client_last_name  = $_POST['client_last_name'];
	$client_city       = $_POST['client_city'];
	$client_street     = $_POST['client_street'];
	$client_index      = $_POST['client_index'];
	$client_numb_flour = $_POST['client_numb_flour'];
	$client_numb_house = $_POST['client_numb_house'];
	$client_fax        = $_POST['client_fax'];
	$client_phone      = $_POST['client_phone'];
	$client_email      = $_POST['client_email'];
	$client_second_phone = $_POST['client_second_phone'];

	$client_count = count($client_first_name);


	$company_name           = $_POST['step3_input2_1'];
	$company_id_number      = $_POST['step3_input1_n'];
	$company_owner_passport = $_POST['step3_input3_1'];
	$name_diller            = $_POST["step3_input4_1"];
	$passport               = $_POST['passport'];
	$first_name             = $_POST['first_name'];
	$last_name              = $_POST['last_name'];
	$city                   = $_POST['city'];
	$street  = $_POST['street'];
	$index   = $_POST['index'];
	$numb_flour = $_POST['numb_flour'];
	$numb_house = $_POST['numb_house'];
	$fax   = $_POST['fax'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$second_phone    = $_POST['second_phone'];
	$ictochnik_phone = $_POST['step2_input1'];
	$istochnik_email = $_POST['step2_input2'];
	$istochnik = array();
	if(!empty($ictochnik_phone)){
		$istochnik = $ictochnik_phone;
	}
	else if(!empty($istochnik_email)){
		$istochnik = $istochnik_email;
	}
	//print_r($istochnik);
	$defendant_count = count($index);
	$defendant_type  = $_POST['step2_2_radio2'];

	$judge  = isset($_POST['judge']) ? $_POST['judge'] : '-';
	$reason = isset($_POST['step3_select1']) ? $_POST['step3_select1'] : '-';
	$txt1   = $_POST['step3_input2'];
	$txt2   = $_POST['step3_input3'];
	$date   = $_POST['step3_input4'];
	$date1  = $_POST['step3_input5'];
	$date2  = $_POST['step3_input6'];
	$usherb = $_POST['step3_input10'];
	$rashodi = $_POST['step3_input11'];
	$count_msg      = $_POST['step3_input8'];
	$less_then_five = isset($_POST['less_then_five'])? $_POST['less_then_five'] : 0;
	$not_company = isset($_POST['not_company'])? $_POST['not_company'] : 0;
	$sign  = isset($_POST['sign'])? $_POST['sign'] : 0;
	$desc  = $_POST['step3_textarea1'];
	$summ_count = $_POST['step4_input1'];
	$finishsumm = isset($_POST['pay_sum']) ? $_POST['pay_sum'] : 0;
	$check1  = isset($_POST['step3_check1'])? $_POST['step3_check1'] : 0;
	$check2  = isset($_POST['step3_check2'])? $_POST['step3_check2'] : 0;
	$check3  = isset($_POST['step3_check3'])? $_POST['step3_check3'] : 0;

	foreach ($client_first_name as $value) {
		$name = $value;
	}

	$title_lid = $name;

	$args = array(
		'post_author' => 0,
        'post_status' => 'publish', // (Draft | Pending | Publish)
        'post_title' => $title_lid,
        'post_type' => 'second_lids'
    );


	$new_lid = wp_insert_post($args);

	if ($files) {
		$file = array(
			'name' => $files['name'],
			'type' => $files['type'],
			'tmp_name' => $files['tmp_name'],
			'error' => $files['error'],
			'size' => $files['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file', $file_id, $new_lid);

	}

	if ($files1) {
		$file1 = array(
			'name' => $files1['name'],
			'type' => $files1['type'],
			'tmp_name' => $files1['tmp_name'],
			'error' => $files1['error'],
			'size' => $files1['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file1, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file2', $file_id, $new_lid);

	}
	if ($files1_1) {
		$file1_1 = array(
			'name' => $files1_1['name'],
			'type' => $files1_1['type'],
			'tmp_name' => $files1_1['tmp_name'],
			'error' => $files1_1['error'],
			'size' => $files1_1['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file1_1, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file_1_1', $file_id, $new_lid);

	}
	if ($files1_2) {
		$file1_2 = array(
			'name' => $files1_2['name'],
			'type' => $files1_2['type'],
			'tmp_name' => $files1_2['tmp_name'],
			'error' => $files1_2['error'],
			'size' => $files1_2['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file1_2, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file_1_2', $file_id, $new_lid);

	}
	if ($files1_3) {
		$file1_3 = array(
			'name'     => $files1_3['name'],
			'type'     => $files1_3['type'],
			'tmp_name' => $files1_3['tmp_name'],
			'error'    => $files1_3['error'],
			'size'     => $files1_3['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file1_3, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file_1_3', $file_id, $new_lid);

	}
	if ($files1_4) {
		$file1_4 = array(
			'name'     => $files1_4['name'],
			'type'     => $files1_4['type'],
			'tmp_name' => $files1_4['tmp_name'],
			'error'    => $files1_4['error'],
			'size'     => $files1_4['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file1_4, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file_1_4', $file_id, $new_lid);

	}




	if ($files2) {
		$file2 = array(
			'name'     => $files2['name'],
			'type'     => $files2['type'],
			'tmp_name' => $files2['tmp_name'],
			'error'    => $files2['error'],
			'size'     => $files2['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file2, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file3', $file_id, $new_lid);

	}

	if ($files2_1) {
		$file2_1 = array(
			'name'     => $files2_1['name'],
			'type'     => $files2_1['type'],
			'tmp_name' => $files2_1['tmp_name'],
			'error'    => $files2_1['error'],
			'size'     => $files2_1['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file2_1, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file_2_1', $file_id, $new_lid);

	}
	if ($files2_2) {
		$file2_2 = array(
			'name'     => $files2_2['name'],
			'type'     => $files2_2['type'],
			'tmp_name' => $files2_2['tmp_name'],
			'error'    => $files2_2['error'],
			'size'     => $files2_2['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file2_2, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file_2_2', $file_id, $new_lid);

	}
	if ($files2_3) {
		$file2_3 = array(
			'name'     => $files2_3['name'],
			'type'     => $files2_3['type'],
			'tmp_name' => $files2_3['tmp_name'],
			'error'    => $files2_3['error'],
			'size'     => $files2_3['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file2_3, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file_2_3', $file_id, $new_lid);

	}
	if ($files2_4) {
		$file2_4 = array(
			'name'     => $files2_4['name'],
			'type'     => $files2_4['type'],
			'tmp_name' => $files2_4['tmp_name'],
			'error'    => $files2_4['error'],
			'size'     => $files2_4['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file2_4, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file_2_4', $file_id, $new_lid);

	}

	if ($files4) {
		$file4 = array(
			'name' => $files4['name'],
			'type' => $files4['type'],
			'tmp_name' => $files4['tmp_name'],
			'error' => $files4['error'],
			'size' => $files4['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file4, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file4', $file_id, $new_lid);

	}
	if ($files4_1) {
		$file4_1 = array(
			'name'      => $files4_1['name'],
			'type'      => $files4_1['type'],
			'tmp_name'  => $files4_1['tmp_name'],
			'error'     => $files4_1['error'],
			'size'      => $files4_1['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file4_1, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file4_1', $file_id, $new_lid);

	}
	if ($files4_2) {
		$file4_2 = array(
			'name'      => $files4_2['name'],
			'type'      => $files4_2['type'],
			'tmp_name'  => $files4_2['tmp_name'],
			'error'     => $files4_2['error'],
			'size'      => $files4_2['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file4_2, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file4_2', $file_id, $new_lid);

	}
	if ($files4_3) {
		$file4_3 = array(
			'name'      => $files4_3['name'],
			'type'      => $files4_3['type'],
			'tmp_name'  => $files4_3['tmp_name'],
			'error'     => $files4_3['error'],
			'size'      => $files4_3['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file4_3, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file4_3', $file_id, $new_lid);

	}
	if ($files4_4) {
		$file4_4 = array(
			'name'      => $files4_4['name'],
			'type'      => $files4_4['type'],
			'tmp_name'  => $files4_4['tmp_name'],
			'error'     => $files4_4['error'],
			'size'      => $files4_4['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file4_4, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file4_4', $file_id, $new_lid);

	}
        // update it
	$clients_updates = update_field('clients', $clients_array, $new_lid);
	if($clients_updates){
		update_field('defendant', $defendant_array, $new_lid);
	}
	$usherb = $_POST['step3_input10'];
	$rashodi = $_POST['step3_input11'];
	update_field('usherb', $usherb, $new_lid);
	update_field('rashodi', $rashodi, $new_lid);
	update_field('summ_count',$summ_count,$new_lid);
	update_field('count_ms',$count_msg, $new_lid);
	update_field('desc', $desc, $new_lid);
	update_field('finishsumm', $finishsumm, $new_lid);
	update_field('postavshik',$txt1,$new_lid);
	update_field('otpravitel_delo',$txt2,$new_lid);
	update_field('date',$date,$new_lid);
	update_field('date2',$date1,$new_lid);
	update_field('date3',$date2,$new_lid);
	update_field('reason', $reason, $new_lid);
	update_field('sud',$sud,$new_lid);
	update_field('step1',$check1,$new_lid);
	update_field('step2',$check2,$new_lid);
	update_field('step3',$check3,$new_lid);




//add all clients to repeater field
	$clients_array = array();
	for($i = 0; $i < $client_count; $i++) {

		$clients_array []= array(
			'client_passport' => isset($client_passport[$i]) ? $client_passport[$i] : '-',
			'client_first_name' => isset($client_first_name[$i]) ? $client_first_name[$i] : '-',
			'client_last_name' => isset($client_last_name[$i]) ? $client_last_name[$i] : '-',
			'client_city' => isset($client_city[$i]) ? $client_city[$i] : '-',
			'client_street' => isset($client_street[$i]) ? $client_street[$i] : '-',
			'client_index' => isset($client_index[$i]) ? $client_index[$i] : '-',
			'client_numb_flour' => isset($client_numb_flour[$i]) ? $client_numb_flour[$i] : '-',
			'client_numb_house' => isset($client_numb_house[$i]) ? $client_numb_house[$i] : '-',
			'client_fax' => isset($client_fax[$i]) ? $client_fax[$i] : '-',
			'client_phone' => isset($client_phone[$i]) ? $client_phone[$i] : '-',
			'client_email' => isset($client_email[$i]) ? $client_email[$i] : '-',
			'client_second_phone' => isset($client_second_phone[$i]) ? $client_second_phone[$i] : '-'
		);

	}

    //add all companies to repeater field
	$defendant_array = array();
	for($i = 0; $i < $defendant_count; $i++) {

		$defendant_array []= array(
			'company_name' => isset($company_name[$i]) ? $company_name[$i] : '-',
			'company_id_number' => isset($company_id_number[$i])? $company_id_number[$i] : '-',
			'company_owner_passport' => isset($company_owner_passport[$i]) ? $company_owner_passport[$i] : '-',
			'name_diller' => isset($name_diller[$i]) ? $name_diller[$i]: '-',
			'passport' => isset($passport[$i]) ? $passport[$i] : '-',
			'first_name' => isset($first_name[$i]) ? $first_name[$i] : '-',
			'last_name' => isset($last_name[$i]) ? $last_name[$i] : '-',
			'city' => isset($city[$i]) ? $city[$i] : '-',
			'street' => isset($street[$i]) ? $street[$i] : '-',
			'index' => isset($index[$i]) ? $index[$i] : '-',
			'numb_flour' => isset($numb_flour[$i]) ? $numb_flour[$i] : '-',
			'numb_house' => isset($numb_house[$i]) ? $numb_house[$i] : '-',
			'fax' => isset($fax[$i]) ? $fax[$i] : '-',
			'phone' => isset($phone[$i]) ? $phone[$i] : '-',
			'email' => isset($email[$i]) ? $email[$i] : '-',
			'second_phone' => isset($second_phone[$i]) ? $second_phone[$i] : '-',
			'istochnik_msg'  => isset($ictochnik_phone[$i]) ? $ictochnik_phone[$i] : $istochnik_email[$i],

		);
	}
     // update it
	$clients_updates = update_field('clients', $clients_array, $new_lid);
	if($clients_updates){
		update_field('defendant', $defendant_array, $new_lid);
	}

	$clients_mail = array();
	for($i = 0; $i < $client_count; $i++) {

		$clients_mail []= array(
			'client_passport' => $client_passport[$i],
			'client_first_name' => $client_first_name[$i],
			'client_last_name' => $client_last_name[$i],
			'client_city' => $client_city[$i],
			'client_street' =>  $client_street[$i],
			'client_index' =>  $client_index[$i],
			'client_numb_flour' => $client_numb_flour[$i],
			'client_numb_house' => $client_numb_house[$i],
			'client_fax' => $client_fax[$i],
			'client_phone' =>  $client_phone[$i],
			'client_email' => $client_email[$i],
			'client_second_phone' => $client_second_phone[$i],
			'passport' => $passport[$i],
			'first_name' => $first_name[$i],
			'last_name' => $last_name[$i],
			'city' => $city[$i],
			'street' => $street[$i],
			'index' =>  $index[$i],
			'numb_flour' => $numb_flour[$i],
			'numb_house' => $numb_house[$i],
			'fax' => $fax[$i],
			'phone' =>  $phone[$i],
			'email' => $email[$i],
			'second_phone' =>  $second_phone[$i],
		);

	}



	$defendant_mail = array();
	for($i = 0; $i < $defendant_count; $i++) {

		$defendant_mail []= array(
			'company_name' => $company_name[$i],
			'company_id_number' => $company_id_number[$i],
			'company_owner_passport' => $company_owner_passport[$i],
			'name_diller' => $name_diller[$i],
			'passport' => $passport[$i],
			'first_name' => $first_name[$i],
			'last_name' => $last_name[$i],
			'city' => $city[$i],
			'street' => $street[$i],
			'index' => $index[$i],
			'numb_flour' => $numb_flour[$i],
			'numb_house' => $numb_house[$i],
			'fax' => $fax[$i],
			'phone' => $phone[$i],
			'email' => $email[$i],
			'second_phone' => $second_phone[$i],
			'istochnick_email' => $istochnik_email[$i],
			'istochnik_phone'  => $ictochnik_phone[$i],
		);
	}

	foreach ($clients_mail as  $value) {
		$msg .= "<strong>התובעת:</strong>" . '<br />';
		$msg .= "<strong>שם פרטי: </strong>"  . $value['client_first_name'] . "<br />";      
		$msg .= "<strong>שם משפחה:</strong>" . $value['client_last_name'] . "<br />";
		$msg .= "<strong>ת.ז:</strong>" . $value["client_passport"] . "<br />";


		if(!empty( $value['client_phone'])):
			$msg .= "<strong>טלפון נייד:</strong>" . $value['client_phone'] . "<br />";
		endif;
		if(!empty($value['client_second_phone'])):
			$msg .= "<strong>טלפון נוסף:</strong>" . $value['client_second_phone'] . "<br />";
		endif;
		if(!empty($value['client_email'] )):
			$msg .= "<strong> דואל: </strong>" . $value['client_email'] . '<br />';
		endif;
		if(!empty($value["client_index"])):
			$msg .= "<strong>מיקוד: </strong>" . $value["client_index"] . "<br />"; 
		endif;
		if(!empty($value['client_numb_flour'] )):
			$msg .= "<strong>מספר:</strong>" . $value['client_numb_flour'] . "<br />"; 
		endif;    
		$msg .= "<strong>רחוב:</strong>" . $value['client_street'] . "<br />";      
		$msg .= "<strong> עיר: </strong>" . $value["client_city"] . "<br />";
		if(!empty($value['client_numb_house'] )):
			$msg .= "<strong>דירה: </strong> " . $value['client_numb_house'] . "<br />";
		endif;
		if(!empty($value['client_fax'])):
			$msg .= "<strong>פקס: </strong>" . $value["client_fax"] . "<br />"; 
		endif;


		$msg .= "<hr>";
	}
	foreach ($defendant_mail as $value) {

		$msg .= "<strong>הנתבעת:</strong> <br />";

		if(!empty($value['istochnick_email'])):
			$msg .= 'מקור ההודעה: ' . $value['istochnick_email'] . "<br />";
		endif;
		if(!empty($value['istochnik_phone'])):
			$msg .= 'מקור ההודעה: ' . $value['istochnik_phone'] . "<br />";
		endif;

		if(!empty( $value['company_name'])):
			$msg .= "<strong>שם החברה: </strong>"  . $value['company_name'] . "<br />"; 
		endif;
		if(!empty( $value['company_id_number'])):
			$msg .= "<strong>.ח.פ: </strong>"  . $value['company_id_number'] . "<br />"; 
		endif;
		if(!empty($value['company_owner_passport'])):
			$msg .= "<strong>ת.ז/ עוסק מורשה: </strong>"  . $value['company_owner_passport'] . "<br />"; 
		endif;
		if(!empty($value['name_diller'])):
			$msg .= "<strong>שם עוסק מורשה: </strong>"  . $value['name_diller'] . "<br />"; 
		endif;
		if(!empty( $value['first_name'])):
			$msg .= "<strong>שם פרטי: </strong>"  . $value['first_name'] . "<br />";  
		endif;
		if(!empty( $value['last_name'])):    
			$msg .= "<strong>שם משפחה:</strong>" . $value['last_name'] . "<br />";
		endif;
		if(!empty($value["passport"])):
			$msg .= "<strong>ת.ז:</strong>" . $value["passport"] . "<br />";
		endif;
		if(!empty( $value['phone'])):
			$msg .= "<strong>טלפון נייד:</strong>" . $value['phone'] . "<br />";
		endif;
		if(!empty($value['second_phone'])):
			$msg .= "<strong>טלפון נוסף:</strong>" . $value['second_phone'] . "<br />";
		endif;
		if(!empty($value['email'] )):
			$msg .= "<strong> דואל: </strong>" . $value['email'] . '<br />';
		endif;
		if(!empty($value["index"])):
			$msg .= "<strong>מיקוד: </strong>" . $value["index"] . "<br />"; 
		endif;
		if(!empty($value['numb_flour'] )):
			$msg .= "<strong>מספר:</strong>" . $value['numb_flour'] . "<br />"; 
		endif;    
		$msg .= "<strong>רחוב:</strong>" . $value['street'] . "<br />";      
		$msg .= "<strong> עיר: </strong>" . $value["city"] . "<br />";
		if(!empty($value['client_numb_house'] )):
			$msg .= "<strong>דירה: </strong> " . $value['numb_house'] . "<br />";
		endif;
		if(!empty($value['fax'])):
			$msg .= "<strong>פקס: </strong>" . $value["fax"] . "<br />"; 
		endif;
		$msg .= "<hr />";

	}



	if($defendant_type =='0'){
		update_field('private_person', 1, $new_lid);
	}
	elseif ($defendant_type =='1'){
		update_field('company', 1, $new_lid);
	}
	else{
		update_field('company_person', 1, $new_lid);
	}

	update_field('paid', '0', $new_lid);

	$payment = cardcomPay($new_lid, $title_lid, $finishsumm, $client_email, $client_first_name, $client_last_name );
	/*echo $check1 . "<br />";
	echo $check2 . "<br />";
	echo $check3 . "<br />";*/

	$to = 'taclick100@gmail.com, yagoda304@gmail.com, office1taclick@gmail.com';
	$headers = "Content-type: text/html; charset=utf-8 \r\n";
	$headers .= "From: or.com@email.com ";
	$mail_content = '';
	$mail_content .= home_url().'/wp-admin/post.php?post='.$new_lid.'&action=edit';
	$title_form = "פנייה מאתר בנושא: תביעת ספאם";
	if(!empty($reason) || !empty($date) || !empty($date1) || !empty($date2) || !empty($desc) || !empty($txt1) || !empty($txt2) || !empty($count_msg)):
		$msg .= "<strong>למידע נוסף</strong><br />";
	endif;
	if(!empty($count_msg)):
		$msg .= "<strong>מס׳ ההודעות שהתקבלו:</strong>" . $count_msg . "<br />";
	endif;
	if(!empty($reason)):
		$msg .= "<strong>סוג תביעה:</strong>" . $reason . "<br />";
	endif;
	if(!empty($txt1)):
		$msg .= "<strong>הספק הינו:</strong>" . $txt1 . "<br />";
	endif;
	if(!empty($txt2)):
		$msg .= "<strong>השולח עוסק ב:</strong>" . $txt2 . "<br />";
	endif;
	if(!empty($sud)):
		$msg .= "<strong>בית המשפט:</strong>" . $sud . "<br />";
	endif;

	if(!empty($date)):
		$msg .= "<strong>תאריך הרשמה לשירותי ההודעות של הנתבע - לא ידוע:</strong>" . $date . "<br />";
	elseif(isset($check1) && !empty($check1)):
		$msg .= "<strong>תאריך הרשמה לשירותי ההודעות של הנתבע - לא ידוע</strong><br />";
	endif;
	if(!empty($date1)):
		$msg .= "<strong>תאריך בקשת הסרה משירותי ההודעות של הנתבע:</strong>" . $date1 . "<br />";
	elseif(isset($check2) && !empty($check2)):
		$msg .= "<strong>תאריך בקשת הסרה משירותי ההודעות של הנתבע - לא ידוע</strong><br />";
	endif;
	if(!empty($date2)):
		$msg .= "<strong>תאריך בקשת הסרה נוספת משירותי ההודעות של הנתבע:</strong>" . $date2 . "<br />";
	elseif(isset($check3) && !empty($check3)):
		$msg .= "<strong>תאריך בקשת הסרה נוספת משירותי ההודעות של הנתבע - לא ידוע</strong><br />";
	endif;
	
	if(!empty( $desc)):
		$msg .= "<strong>נימוקי התביעה: </strong>" . $desc . "<br />";
	endif;
	$msg .= "<br /> נזק כספי:" . $usherb;
	if(!empty($rashodi)):
		$msg .= "<br /> הוצאות משפטיות:" . $rashodi;
	endif;
	$msg .= "<br />סהכ לתשלום:"   . $finishsumm;
	$msg .= "<br />סכום התביעה:" . $summ_count;
	$msg .= "<br />Url: " . $mail_content;
	$msg .= "<hr />";

	$succes_mail = mail($to,$title_form,$msg, $headers);

	if($succes_mail && $new_lid && $payment){
		echo json_encode( array('success' => true, 'message' => $clients_array, 'redirect' => $payment));
	}else{
		echo json_encode( array('success' => false, 'message' => $clients_array, 'redirect' => $payment));
	}

	die();
}
add_action('wp_ajax_register_third_lid', 'register_third_lid');
add_action('wp_ajax_nopriv_register_third_lid', 'register_third_lid');
function register_third_lid(){
	$files = $_FILES['step4_file1'];
	$files2 = $_FILES['step4_file1_1'];
	$files3 = $_FILES['step4_file1_2'];
	$files4 = $_FILES['step4_file1_3'];
	$files5 = $_FILES['step4_file1_4'];
	$files6 = $_FILES['step4_file1_5'];
	$files7 = $_FILES['step4_file1_6'];
	$files8 = $_FILES['step4_file1_7'];
	$files9 = $_FILES['step4_file1_8'];
	$files10 = $_FILES['step4_file1_9'];
	$client_passport   = $_POST['client_passport'];
	$client_first_name = $_POST['client_first_name'];
	$client_last_name  = $_POST['client_last_name'];
	$client_city       = $_POST['client_city'];
	$client_street     = $_POST['client_street'];
	$client_index      = $_POST['client_index'];
	$client_numb_flour = $_POST['client_numb_flour'];
	$client_numb_house = $_POST['client_numb_house'];
	$client_fax        = $_POST['client_fax'];
	$client_phone      = $_POST['client_phone'];
	$client_email      = $_POST['client_email'];
	$client_second_phone = $_POST['client_second_phone'];

	$client_count = count($client_first_name);  

	$company_owner_passport = $_POST['step3_input3'];
	$name_diller            = $_POST["step3_input4"];
	$company_name           = $_POST['step3_input2_1'];
	$company_id_number      = $_POST['step3_input1'];
	$passport               = $_POST['passport'];
	$first_name             = $_POST['first_name'];
	$last_name              = $_POST['last_name'];
	$city                   = $_POST['city'];
	$street                 = $_POST['street'];
	$index                  = $_POST['index'];
	$numb_flour             = $_POST['numb_flour'];
	$numb_house             = $_POST['numb_house'];
	$fax                    = $_POST['fax'];
	$phone                  = $_POST['phone'];
	$email                  = $_POST['email'];
	$second_phone           = $_POST['second_phone'];
	$defendant_count        = count($index);
	$defendant_type         = $_POST['step3_1_radio1'];
	$txt                    = $_POST['step4_textarea1'];
	$reason                 = isset($_POST['reason']) ? $_POST['reason'] : '-';
	$date                   = $_POST['step1_input3'];
	$id                     = $_POST['step1_input1'];
	$finishsumm = isset($_POST['pay_sum']) ? $_POST['pay_sum'] : 0;
	$desc  = $_POST['desc'];
	$summ1 = $_POST['summ'];
	$sud   = $_POST['step1_select1'];
	$date   = $_POST['step1_input3'];
	$countryPrice = $_POST['step1_select1'];
	$UserSumm     = $_POST['step4_input1'];
	$paySum       = $_POST['pay_sum'];
	

	foreach ($client_first_name as $value) {
		$name = $value;
	}

	$title_lid = $name;

	$args = array(
		'post_author' => 0,
        'post_status' => 'publish', // (Draft | Pending | Publish)
        'post_title' => $title_lid,
        'post_type' => 'third_lids'
    );


	$new_lid = wp_insert_post($args);

	if ($files) {
		$file = array(
			'name' => $files['name'],
			'type' => $files['type'],
			'tmp_name' => $files['tmp_name'],
			'error' => $files['error'],
			'size' => $files['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file1', $file_id, $new_lid);

	}

	if ($files2) {
		$file2 = array(
			'name'     => $files2['name'],
			'type'     => $files2['type'],
			'tmp_name' => $files2['tmp_name'],
			'error'    => $files2['error'],
			'size'     => $files2['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file2, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file2', $file_id, $new_lid);

	}

	if ($files3) {
		$file3 = array(
			'name'     => $files3['name'],
			'type'     => $files3['type'],
			'tmp_name' => $files3['tmp_name'],
			'error'    => $files3['error'],
			'size'     => $files3['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file3, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file3', $file_id, $new_lid);

	}
	if ($files4) {
		$file4 = array(
			'name'     => $files4['name'],
			'type'     => $files4['type'],
			'tmp_name' => $files4['tmp_name'],
			'error'    => $files4['error'],
			'size'     => $files4['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file4, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file4', $file_id, $new_lid);

	}

	if ($files5) {
		$file5 = array(
			'name'     => $files5['name'],
			'type'     => $files5['type'],
			'tmp_name' => $files5['tmp_name'],
			'error'    => $files5['error'],
			'size'     => $files5['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file5, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file5', $file_id, $new_lid);

	}
	if ($files6) {
		$file6 = array(
			'name'     => $files6['name'],
			'type'     => $files6['type'],
			'tmp_name' => $files6['tmp_name'],
			'error'    => $files6['error'],
			'size'     => $files6['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file6, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file6', $file_id, $new_lid);

	}

	if ($files7) {
		$file7 = array(
			'name'     => $files7['name'],
			'type'     => $files7['type'],
			'tmp_name' => $files7['tmp_name'],
			'error'    => $files7['error'],
			'size'     => $files7['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file7, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file7', $file_id, $new_lid);

	}


	if ($files8) {
		$file8 = array(
			'name'     => $files8['name'],
			'type'     => $files8['type'],
			'tmp_name' => $files8['tmp_name'],
			'error'    => $files8['error'],
			'size'     => $files8['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file8, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file8', $file_id, $new_lid);

	}


	if ($files9) {
		$file9 = array(
			'name'     => $files9['name'],
			'type'     => $files9['type'],
			'tmp_name' => $files9['tmp_name'],
			'error'    => $files9['error'],
			'size'     => $files9['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file9, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file9', $file_id, $new_lid);

	}

	if ($files10) {
		$file10 = array(
			'name'     => $files10['name'],
			'type'     => $files10['type'],
			'tmp_name' => $files10['tmp_name'],
			'error'    => $files10['error'],
			'size'     => $files10['size']
		);

		$upload_overrides = array('test_form' => false);
		$upload = wp_handle_upload($file10, $upload_overrides);

		$filename = $upload['file'];
		$filetype = wp_check_filetype(basename($filename), null);
		$wp_upload_dir = wp_upload_dir();

		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit'
		);

		$file_id = wp_insert_attachment($attachment, $filename, $new_lid);

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata($file_id, $filename);
		wp_update_attachment_metadata($file_id, $attach_data);

		update_field('attach_file10', $file_id, $new_lid);

	}








//add all clients to repeater field
	$clients_array = array();
	for($i = 0; $i < $client_count; $i++) {

		$clients_array []= array(
			'client_passport' => isset($client_passport[$i]) ? $client_passport[$i] : '-',
			'client_first_name' => isset($client_first_name[$i]) ? $client_first_name[$i] : '-',
			'client_last_name' => isset($client_last_name[$i]) ? $client_last_name[$i] : '-',
			'client_city' => isset($client_city[$i]) ? $client_city[$i] : '-',
			'client_street' => isset($client_street[$i]) ? $client_street[$i] : '-',
			'client_index' => isset($client_index[$i]) ? $client_index[$i] : '-',
			'client_numb_flour' => isset($client_numb_flour[$i]) ? $client_numb_flour[$i] : '-',
			'client_numb_house' => isset($client_numb_house[$i]) ? $client_numb_house[$i] : '-',
			'client_fax' => isset($client_fax[$i]) ? $client_fax[$i] : '-',
			'client_phone' => isset($client_phone[$i]) ? $client_phone[$i] : '-',
			'client_email' => isset($client_email[$i]) ? $client_email[$i] : '-',
			'client_second_phone' => isset($client_second_phone[$i]) ? $client_second_phone[$i] : '-'
		);

	}

	$clients_mail = array();
	for($i = 0; $i < $client_count; $i++) {

		$clients_mail []= array(
			'client_passport' => $client_passport[$i],
			'client_first_name' => $client_first_name[$i],
			'client_last_name' => $client_last_name[$i],
			'client_city' => $client_city[$i],
			'client_street' =>  $client_street[$i],
			'client_index' =>  $client_index[$i],
			'client_numb_flour' => $client_numb_flour[$i],
			'client_numb_house' => $client_numb_house[$i],
			'client_fax' => $client_fax[$i],
			'client_phone' =>  $client_phone[$i],
			'client_email' => $client_email[$i],
			'client_second_phone' => $client_second_phone[$i],
			'company_name' => $company_name[$i],
			'company_id_number' => $company_id_number[$i],
			'company_owner_passport' => $company_owner_passport[$i],
			'passport' => $passport[$i],
			'first_name' => $first_name[$i],
			'last_name' => $last_name[$i],
			'city' => $city[$i],
			'street' => $street[$i],
			'index' =>  $index[$i],
			'numb_flour' => $numb_flour[$i],
			'numb_house' => $numb_house[$i],
			'fax' => $fax[$i],
			'phone' =>  $phone[$i],
			'email' => $email[$i],
			'second_phone' =>  $second_phone[$i],
		);

	}


    //add all companies to repeater field
	$defendant_array = array();
	for($i = 0; $i < $defendant_count; $i++) {

		$defendant_array []= array(
			'company_name' => isset($company_name[$i]) ? $company_name[$i] : '-',
			'company_id_number' => isset($company_id_number[$i])? $company_id_number[$i] : '-',
			'company_owner_passport' => isset($company_owner_passport[$i]) ? $company_owner_passport[$i] : '-',
			'name_diller' => isset($name_diller[$i]) ? $name_diller[$i]: '-',
			'passport' => isset($passport[$i]) ? $passport[$i] : '-',
			'first_name' => isset($first_name[$i]) ? $first_name[$i] : '-',
			'last_name' => isset($last_name[$i]) ? $last_name[$i] : '-',
			'city' => isset($city[$i]) ? $city[$i] : '-',
			'street' => isset($street[$i]) ? $street[$i] : '-',
			'index' => isset($index[$i]) ? $index[$i] : '-',
			'numb_flour' => isset($numb_flour[$i]) ? $numb_flour[$i] : '-',
			'numb_house' => isset($numb_house[$i]) ? $numb_house[$i] : '-',
			'fax' => isset($fax[$i]) ? $fax[$i] : '-',
			'phone' => isset($phone[$i]) ? $phone[$i] : '-',
			'email' => isset($email[$i]) ? $email[$i] : '-',
			'second_phone' => isset($second_phone[$i]) ? $second_phone[$i] : '-'
		);
	}
	$defendant_mail = array();

	for($i = 0; $i < $defendant_count; $i++) {

		$defendant_mail []= array(
			'company_name' => $company_name[$i],
			'company_id_number' => $company_id_number[$i],
			'company_owner_passport' => $company_owner_passport[$i],
			'name_diller' => $name_diller[$i],
			'passport' => $passport[$i],
			'first_name' => $first_name[$i],
			'last_name' => $last_name[$i],
			'city' => $city[$i],
			'street' => $street[$i],
			'index' => $index[$i],
			'numb_flour' => $numb_flour[$i],
			'numb_house' => $numb_house[$i],
			'fax' => $fax[$i],
			'phone' => $phone[$i],
			'email' => $email[$i],
			'second_phone' => $second_phone[$i],
		);
	}


    // update it
	$clients_updates = update_field('clients', $clients_array, $new_lid);
	if($clients_updates){
		update_field('defendant', $defendant_array, $new_lid);
	}

	update_field('desc', $desc, $new_lid);
	update_field('sud',$sud,$new_lid);
	update_field('finishsumm', $finishsumm, $new_lid);
	update_field('date', $date, $new_lid);
	update_field('reason', $reason, $new_lid);
	update_field('id',$id, $new_lid);
	update_field('desc',$txt, $new_lid);
	update_field('user_summ',$UserSumm,$new_lid);

	if($defendant_type == '0'){
		update_field('private_person', 1, $new_lid);
	}
	elseif ($defendant_type == '1'){
		update_field('company', 1, $new_lid);
	}
	else{
		update_field('company_person', 1, $new_lid);
	}

	update_field('paid', '0', $new_lid);

	$payment = cardcomPay($new_lid, $title_lid, $finishsumm, $client_email, $client_first_name, $client_last_name );

    //email to admin
	$msg = "";
	$mail_content = '';
	$mail_content .= home_url().'/wp-admin/post.php?post='.$new_lid.'&action=edit';
	foreach ($clients_mail as  $value) {
		$msg .= "<strong>התובעת:</strong>" . '<br />';
		$msg .= "<strong>שם פרטי: </strong>"  . $value['client_first_name'] . "<br />";      
		$msg .= "<strong>שם משפחה:</strong>" . $value['client_last_name'] . "<br />";
		$msg .= "<strong>ת.ז:</strong>" . $value["client_passport"] . "<br />";
		if(!empty( $value['client_phone'])):
			$msg .= "<strong>טלפון נייד:</strong>" . $value['client_phone'] . "<br />";
		endif;
		if(!empty($value['client_second_phone'])):
			$msg .= "<strong>טלפון נוסף:</strong>" . $value['client_second_phone'] . "<br />";
		endif;
		if(!empty($value['client_email'] )):
			$msg .= "<strong> דואל: </strong>" . $value['client_email'] . '<br />';
		endif;
		if(!empty($value["client_index"])):
			$msg .= "<strong>מיקוד: </strong>" . $value["client_index"] . "<br />"; 
		endif;
		if(!empty($value['client_numb_flour'] )):
			$msg .= "<strong>מספר:</strong>" . $value['client_numb_flour'] . "<br />"; 
		endif;    
		$msg .= "<strong>רחוב:</strong>" . $value['client_street'] . "<br />";      
		$msg .= "<strong> עיר: </strong>" . $value["client_city"] . "<br />";
		if(!empty($value['client_numb_house'] )):
			$msg .= "<strong>דירה: </strong> " . $value['client_numb_house'] . "<br />";
		endif;
		if(!empty($value['client_fax'])):
			$msg .= "<strong>פקס: </strong>" . $value["client_fax"] . "<br />"; 
		endif;


		$msg .= "<hr>";

        # code...
	}


	foreach ($defendant_mail as $value) {
          # code...

		$msg .= "<strong>הנתבעת:</strong> <br />";
		if(!empty( $value['company_name'])):
			$msg .= "<strong>שם החברה: </strong>"  . $value['company_name'] . "<br />"; 
		endif;
		if(!empty( $value['company_id_number'])):
			$msg .= "<strong>.ח.פ: </strong>"  . $value['company_id_number'] . "<br />"; 
		endif;
		if(!empty($company_owner_passport)):
			$msg .= "<strong>ת.ז/ עוסק מורשה: </strong>"  . $value['company_owner_passport'] . "<br />"; 
		endif;
		if(!empty($name_diller)):
			$msg .= "<strong>שם עוסק מורשה: </strong>"  . $value['name_diller'] . "<br />"; 
		endif;
		if(!empty( $value['first_name'])):
			$msg .= "<strong>שם פרטי: </strong>"  . $value['first_name'] . "<br />";  
		endif;
		if(!empty( $value['last_name'])):    
			$msg .= "<strong>שם משפחה:</strong>" . $value['last_name'] . "<br />";
		endif;
		if(!empty($value["passport"])):
			$msg .= "<strong>ת.ז:</strong>" . $value["passport"] . "<br />";
		endif;
		if(!empty( $value['phone'])):
			$msg .= "<strong>טלפון נייד:</strong>" . $value['phone'] . "<br />";
		endif;
		if(!empty($value['second_phone'])):
			$msg .= "<strong>טלפון נוסף:</strong>" . $value['second_phone'] . "<br />";
		endif;
		if(!empty($value['email'] )):
			$msg .= "<strong> דואל: </strong>" . $value['email'] . '<br />';
		endif;
		if(!empty($value["index"])):
			$msg .= "<strong>מיקוד: </strong>" . $value["index"] . "<br />"; 
		endif;
		if(!empty($value['numb_flour'] )):
			$msg .= "<strong>מספר:</strong>" . $value['numb_flour'] . "<br />"; 
		endif;    
		$msg .= "<strong>רחוב:</strong>" . $value['street'] . "<br />";      
		$msg .= "<strong> עיר: </strong>" . $value["city"] . "<br />";
		if(!empty($value['client_numb_house'] )):
			$msg .= "<strong>דירה: </strong> " . $value['numb_house'] . "<br />";
		endif;
		if(!empty($value['fax'])):
			$msg .= "<strong>פקס: </strong>" . $value["fax"] . "<br />"; 
		endif;
		$msg .= "<hr />";
	}
	$msg .= "<br /><strong>מס׳ תיק: </strong>" . $id;
	$msg .= "<br /><strong>בית משפט: </strong>" . $sud;
	$msg .= "<br /><strong>סהכ לתשלום:</strong>" . $paySum;
	$msg .= "<br /><strong>נזק כספי על סך :</strong>" . $UserSumm;
	$msg .= "<br /><strong>תגובת הנתבע/ נימוקי הגנה</strong>: " . $txt;
	$msg .= "<br /><strong>Url:</strong> " . $mail_content;
	$msg .= "<hr />";
	add_filter('the_content', 'dco_the_content');

     //email to admin
	$to =  'taclick100@gmail.com, yagoda304@gmail.com, office1taclick@gmail.com';
	$headers = "Content-type: text/html; charset=utf-8 \r\n";
	$headers .= "From: or.com@email.com ";

	$title_form = "פנייה בנושא: כתב הגנה";

	$succes_mail = mail($to,$title_form,$msg, $headers);
    //


	if($succes_mail && $new_lid && $payment){
		echo json_encode( array('success' => true, 'message' => $clients_array, 'redirect' => $payment));
	}else{
		echo json_encode( array('success' => false, 'message' => $clients_array, 'redirect' => $payment));
	}

	die();
}

unset( $us_theme_supports );