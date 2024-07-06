<?php
function my_theme_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('owl-carousel-css', '/wp-content/themes/divi-child/css/owl.carousel.min.css');
	wp_enqueue_style('owl-theme-css', '/wp-content/themes/divi-child/css/owl.theme.default.min.css');
	wp_enqueue_style('bootstrap-css', '/wp-content/themes/divi-child/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


function my_theme_scripts_function()
{
    global $wp_query;
	wp_enqueue_script('bootstrap-js', '/wp-content/themes/divi-child/js/bootstrap.min.js', true);
	wp_enqueue_script('maskMoney', '/wp-content/themes/divi-child/js/jquery.maskMoney.js',  array('jquery'), false, false);
	// wp_enqueue_script( 'magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js',  array('jquery'), false, true);
	wp_enqueue_script('owl-caroulsel-js', '/wp-content/themes/divi-child/js/owl.carousel.min.jsw',  array('jquery'), false, false);
	wp_register_script('custom', '/wp-content/themes/divi-child/js/custom.js', array('jquery'), false, false);
	wp_localize_script('custom', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php'), 'max_page' => $wp_query->max_num_pages, 'current_page' => get_query_var( 'page' ) ? get_query_var('page') : 1,), false, false);
	wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'my_theme_scripts_function');

// ================================
// ENTERPRISE FLOATING BUTTON
// ================================
function floating_button_shortcode($atts) {
    $atts = shortcode_atts(array(
        'text' => 'Agende uma Visita', 
    ), $atts);

    $link = get_field('botao_flutuante');

    if ($link) {
        ob_start();
        ?>
        <a href="<?php echo esc_url($link); ?>" class="floating-button">
            <?php echo esc_html($atts['text']); ?>
        </a>
        <?php
        return ob_get_clean();
    }

    return ''; 
}
add_shortcode('floating_button', 'floating_button_shortcode');

// ================================
// WHATSAPP BUTTON
// ================================
function whatsapp_button_shortcode($atts) {
    $atts = shortcode_atts(array(
        'image' => '/wp-content/uploads/2023/11/logo-whatsapp-1024-1-1.png',
    ), $atts);

    // Link direto para o WhatsApp
   // $whatsapp_number = '5511957759596';

    ob_start();
    ?>
    <a href="https://api.whatsapp.com/send/?phone=5511957759596&text=Olá&type=phone_number&app_absent=0" class="whatsapp-button">
        
        <img class="wpp_button" src="<?php echo esc_url(site_url($atts['image'])); ?>" alt="WhatsApp">
    </a>
    
    <?php
    return ob_get_clean();
}
add_shortcode('whatsapp_button', 'whatsapp_button_shortcode');


// ================================
// CALL ENTERPRISES CAROUSEL TEMPLATE
// ================================
function get_enterprises_carousel_template()
{
	ob_start();
	include(locate_template("/templates/template-enterprises-carousel.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprises_carousel_template', 'get_enterprises_carousel_template');

// ================================
// CALL ENTERPRISES LIST TEMPLATE
// ================================
function get_enterprises_list_template()
{
	ob_start();
	include(locate_template("/templates/template-enterprises-list.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprises_list_template', 'get_enterprises_list_template');

// ================================
// CALL ENTERPRISES LIST WITH FILTER TEMPLATE
// ================================
function get_enterprises_list_with_filter_template()
{
	ob_start();
	include(locate_template("/templates/template-enterprises-list-with-filter.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprises_list_with_filter_template', 'get_enterprises_list_with_filter_template');

// ================================
// CALL ENTERPRISES LIST WITH FILTER TEMPLATE BY AJAX
// ================================
add_action('wp_ajax_nopriv_filter_enterprises', 'filter_enterprises');
add_action('wp_ajax_filter_enterprises', 'filter_enterprises');
function filter_enterprises()
{
	include(locate_template("/templates/template-enterprises-list-with-filter.php"));
	exit();
}

// ================================
// CALL ENTERPRISE ADDITIONAL TEMPLATE
// ================================
function get_enterprise_additional_template()
{
	ob_start();
	include(locate_template("/templates/template-enterprise-additionals.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprise_additional_template', 'get_enterprise_additional_template');

// ================================
// CALL ENTERPRISE GALLERY TEMPLATE
// ================================
function get_enterprise_gallery_template()
{
	ob_start();
	include(locate_template("/templates/template-enterprise-gallery.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprise_gallery_template', 'get_enterprise_gallery_template');

// ================================
// CALL ENTERPRISE PLAN TEMPLATE
// ================================
function get_enterprise_plan_template()
{
	ob_start();
	include(locate_template("/templates/template-enterprise-plan.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprise_plan_template', 'get_enterprise_plan_template');

// ================================
// CALL ENTERPRISE VIDEOS TEMPLATE
// ================================
function get_enterprise_video_template()
{
	ob_start();
	include(locate_template("/templates/template-enterprise-videos.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprise_video_template', 'get_enterprise_video_template');

// ================================
// CALL ENTERPRISE STAGE TEMPLATE
// ================================
function get_enterprise_stage_template()
{
	ob_start();
	include(locate_template("/templates/template-enterprise-stage.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprise_stage_template', 'get_enterprise_stage_template');

// ================================
// CALL ENTERPRISE DYNAMIC ATTRIBUTES TEMPLATE
// ================================
function get_enterprise_dynamic_attributes_template()
{
	ob_start();
	include(locate_template("/templates/template-enterprise-dynamic-attributes.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprise_dynamic_attributes_template', 'get_enterprise_dynamic_attributes_template');

// ================================
// CALL ENTERPRISE MAP ESTABLISHMENTS TEMPLATE
// ================================
function get_establishments_template()
{
	ob_start();
	include(locate_template("/templates/enterprises/template-establishments.php"));
	return ob_get_clean();
}
add_shortcode('call_establishments_template', 'get_establishments_template');

// ================================
// CALL ENTERPRISE DISTANCE CARDS TEMPLATE
// ================================
function get_distances_cards_template()
{
	ob_start();
	include(locate_template("/templates/enterprises/template-distances-cards.php"));
	return ob_get_clean();
}
add_shortcode('call_distances_cards_template', 'get_distances_cards_template');

// ================================
// CALL WP VR TEMPLATE
// ================================
function get_wp_vr_template()
{
	ob_start();
	include(locate_template("/templates/enterprises/template-wp-vr.php"));
	return ob_get_clean();
}
add_shortcode('call_wp_vr_template', 'get_wp_vr_template');

// =========================
//Create Banners custom post type
//==========================
add_action( 'init', 'banners_items' );
function banners_items() {

	register_post_type( 'banners', array(
		'labels' => array(
			'name' => 'Banners',
			'singular_name' => 'Banner',
			'add_new_item' => 'Adicionar novo Banner',
		),
		'description' => 'Slider Banner Home',
		'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
		'publicly_queryable' => true,  // you should be able to query it
		'show_ui' => true,  // you should be able to edit it in wp-admin
		'exclude_from_search' => true,  // you should exclude it from search results
		'show_in_nav_menus' => true,  // you shouldn't be able to add it to menus
		'has_archive' => false,  // it shouldn't have archive page
		'rewrite' => array( 'slug' => 'banners', 'with_front'=> false ),
		// This is where we add taxonomies to our CPT
		'menu_position' => 3,
		'menu_icon' => 'dashicons-slides',
		'supports' => array( 'title'),
    ));
}

// ================================
// Call banners Home part
// ================================
function get_banners_home_template() {	
    ob_start();
	include(locate_template("/templates/template-banner-home.php"));
 	return ob_get_clean();
}
add_shortcode('call_banners_home_template', 'get_banners_home_template');

// ================================
// CALL ENTERPRISES CLOSE TO TEMPLATE
// ================================
function get_enterprises_close_to_template()
{
	ob_start();
	include(locate_template("/templates/enterprises/template-close-to.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprises_close_to_template', 'get_enterprises_close_to_template');

// ================================
// CALL ENTERPRISES CAROUSEL PLANT TEMPLATE
// ================================
function get_enterprises_carousel_plant_template()
{
	ob_start();
	include(locate_template("/templates/enterprises/template-carousel-plant.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprises_carousel_plant_template', 'get_enterprises_carousel_plant_template');

// ================================
// CALL WELL BEING TEMPLATE
// ================================
function get_well_being_template()
{
	ob_start();
	include(locate_template("/templates/enterprises/template-well-being.php"));
	return ob_get_clean();
}
add_shortcode('call_well_being_template', 'get_well_being_template');


// ================================
// CALL ENTERPRISES CAROUSEL CONDOMINIUM TEMPLATE
// ================================
function get_enterprises_carousel_condominium_template()
{
	ob_start();
	include(locate_template("/templates/enterprises/template-carousel-condominium.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprises_carousel_condominium_template', 'get_enterprises_carousel_condominium_template');

// ================================
// CALL TECHNICAL INFORMATION TEMPLATE
// ================================
function get_technical_information_template()
{
	ob_start();
	include(locate_template("/templates/enterprises/tempalte-technical-information.php"));
	return ob_get_clean();
}
add_shortcode('call_technical_information_template', 'get_technical_information_template');

// ================================
// CALL ENTERPRISES STAGE TEMPLATE
// ================================
function get_enterprises_stage_template()
{
	ob_start();
	include(locate_template("/templates/enterprises/template-stage.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprises_stage_template', 'get_enterprises_stage_template');

// ================================
// CALL ENTERPRISES PROFESSINALS LIST TEMPLATE
// ================================
function get_enterprises_professionals_list_template()
{
	ob_start();
	include(locate_template("/templates/enterprises/template-professionals-list.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprises_professinal_list_template', 'get_enterprises_professionals_list_template');


// ================================
// CALL BLOG CAROUSEL TEMPLATE
// ================================
function get_enterprises_carousel_blog_template()
{
	ob_start();
	include(locate_template("/templates/template-carousel-blog.php"));
	return ob_get_clean();
}
add_shortcode('call_enterprises_carousel_blog_template', 'get_enterprises_carousel_blog_template');



// ================================
// CALL FILTER LIST TEMPLATE template-filter-properties.php
// ================================
function get_filter_list_template()
{
	ob_start();
	include(locate_template("/templates/template-filter-list-properties.php"));
	return ob_get_clean();
}
add_shortcode('call_filter_list_template', 'get_filter_list_template');

// ================================
// CALL FILTER TEMPLATE
// ================================
function get_filter_template()
{
	ob_start();
	include(locate_template("/templates/template-filter-properties.php"));
	return ob_get_clean();
}
add_shortcode('call_filter_template', 'get_filter_template');

// =======================================
// CALL FILTER TEMPLATE PER CITY BARUERI
// =======================================
function get_filter_template_per_city_barueri()
{
	ob_start();
	include(locate_template("/templates/template-filter-properties-per-city-barueri.php"));
	return ob_get_clean();
}
add_shortcode('call_filter_template_per_city_barueri', 'get_filter_template_per_city_barueri');

// ====================================
// CALL FILTER TEMPLATE PER CITY OSASCO
// ====================================
function get_filter_template_per_city_osasco()
{
	ob_start();
	include(locate_template("/templates/template-filter-properties-per-city-osasco.php"));
	return ob_get_clean();
}
add_shortcode('call_filter_template_per_city_osasco', 'get_filter_template_per_city_osasco');


// ====================================
// CALL FILTER TEMPLATE PER CITY COTIA
// ====================================
function get_filter_template_per_city_cotia()
{
	ob_start();
	include(locate_template("/templates/template-filter-properties-per-city-cotia.php"));
	return ob_get_clean();
}
add_shortcode('call_filter_template_per_city_cotia', 'get_filter_template_per_city_cotia');

// ====================================
// CALL FILTER TEMPLATE PER CITY SANTANA DO PARNAIBA    
// ====================================
function get_filter_template_per_city_santana_do_parnaiba()
{
	ob_start();
	include(locate_template("/templates/template-filter-properties-per-city-santana-do-parnaiba.php"));
	return ob_get_clean();
}
add_shortcode('call_filter_template_per_city_santana_do_parnaiba', 'get_filter_template_per_city_santana_do_parnaiba');

// ====================================
// CALL FILTER TEMPLATE PER CITY CARAPICUIBA
// ====================================
function get_filter_template_per_city_carapicuiba()
{
	ob_start();
	include(locate_template("/templates/template-filter-properties-per-city-carapicuiba.php"));
	return ob_get_clean();
}
add_shortcode('call_filter_template_per_city_carapicuiba', 'get_filter_template_per_city_carapicuiba');




// ================================
// SEC Fillings Filter
// ================================
add_action('wp_ajax_nopriv_filterPropreties', 'filterPropreties');
add_action('wp_ajax_filterPropreties', 'filterPropreties');
function filterPropreties(){
    ob_start();
    // $value = $_GET['value'];
    // $filter = $_GET['filter'];
    include(locate_template("/templates/template-filter-properties.php"));
    wp_reset_postdata();
    wp_send_json_success(ob_get_clean());
}

add_action('wp_ajax_load_more_content', 'load_more_content');
add_action('wp_ajax_nopriv_load_more_content', 'load_more_content');




// ================================
// Load more posts by Ajax
// ================================

function more_post_ajax(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    // filter footage
	function footage_repeater_where( $where ) {
                                
		$where = str_replace("meta_key = 'footage_repeater_$", "meta_key LIKE 'footage_repeater_%", $where);

		return $where;
	}
	
	// filter investments
	function investments_repeater_where( $where ) {
							
		$where = str_replace("meta_key = 'investments_repeater_$", "meta_key LIKE 'investments_repeater_%", $where);

		return $where;
	}

	$filters = $_GET['filter'];
	$values = $_GET['value'];
	$args = array(
	'suppress_filters' => true,
	'post_type' => 'empreendimento',
	'posts_per_page' =>  $ppp,
	'paged' => $page,
	'orderby' => 'date',
	'order' => 'DESC',
	'post_status' => 'publish',
	);
	
	
	if (!empty($filters) && !empty($values)) {
		$meta_queries = array();
	
		foreach ($filters as $index => $filter) {
			$value = $values[$index];
			$key_prefix = '';
			
			if (!empty($filter) && !empty($value)) {
				
				if ($filter === 'footage' || $filter === 'investments' ) {

					if($filter === 'footage') {
						add_filter('posts_where', 'footage_repeater_where');
						$key_prefix = 'footage_repeater_$_';
					} else {
						add_filter('posts_where', 'investments_repeater_where');
						$key_prefix = 'investments_repeater_$_';
					}
					
					if($value[0] != 0 && $value[1] != 0){
						
						$meta_queries[] = 
						[
							'key' => $key_prefix.$filter,
							'value' => array( $value[0], $value[1]),
							'compare' => 'BETWEEN',
							'type' => 'numeric'
						];
					} else if($value[0] != 0 &&  $value[1] == 0){
						
						$value[1] = 999999999999;
						$meta_queries[] = 
						[
							'key' => $key_prefix.$filter,
							'value' => array($value[0], $value[1]),
							'compare' => 'BETWEEN',
							'type' => 'numeric'
						];
					} else if($value[0] == 0 &&  $value[1] != 0){
						
						$meta_queries[] = 
						[
							'key' => $key_prefix.$filter,
							'value' => array($value[0], $value[1]),
							'compare' => 'BETWEEN',
							'type' => 'numeric'
						];
					}
					
					
				}else{
					$meta_queries[] = array(
						'key' => $filter,
						'value' => $value,
						'compare' => 'LIKE'
					);
				}
			}
		}
	
		if (!empty($meta_queries)) {
			// Se houver mais de uma consulta de metadados, use a relação "AND"
			$args['meta_query'] = array('relation' => 'AND') + $meta_queries;
		}
	}
	
    $loop = new WP_Query($args);

    $out = '';

    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= include(locate_template("/templates/template-parts/template-enterprise-item.php"));
    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');



// ====================================
// CALL MAP TEMPLATE
// ====================================
function get_map_template()
{
	ob_start();
	include(locate_template("/templates/template-parts/template-enterprise-map.php"));
	return ob_get_clean();
}
add_shortcode('call_map_template', 'get_map_template');


function get_recent_blog_post_template()
{
	ob_start();
	include(locate_template("/templates/template-recents-posts-blog.php"));
	return ob_get_clean();
}
add_shortcode('call_recents_posts_blog_template', 'get_recent_blog_post_template');




