<?php
/**
 * Mamma Terra functions and definitions.
 *
 * @package mammaterra
 * @since 1.0.0
 */

define( 'ORFEO_VERSION', '1.0.5' );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$vendor_file = trailingslashit( get_stylesheet_directory() ) . 'vendor/autoload.php';
if ( is_readable( $vendor_file ) ) {
	require_once $vendor_file;
}

if ( ! function_exists( 'mammaterra_parent_css' ) ) :
	/**
	 * Enqueue parent style
	 *
	 * @since 1.0.0
	 */
	function mammaterra_parent_css() {
		wp_enqueue_style( 'mammaterra_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap' ), ORFEO_VERSION );
		wp_style_add_data( 'mammaterra_parent', 'rtl', 'replace' );
		wp_style_add_data( 'hestia_style', 'rtl', 'replace' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'mammaterra_parent_css', 10 );

/**
 * Enqueue mammaterra scripts
 */
function mammaterra_customizer_preview_js() {
	wp_enqueue_script(
		'mammaterra_customizer', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/scripts.js', array(
			'jquery',
			'customize-preview',
		), ORFEO_VERSION
	);
}
add_action( 'customize_preview_init', 'mammaterra_customizer_preview_js', 10 );

/**
 * Change default fonts.
 *
 * @since 1.0.0
 */
function mammaterra_change_defaults( $wp_customize ) {

	$selective_refresh = isset( $wp_customize->selective_refresh ) ? true : false;

	/* Change default fonts */
	$mammaterra_headings_font = $wp_customize->get_setting( 'hestia_headings_font' );
	if ( ! empty( $mammaterra_headings_font ) ) {
		$mammaterra_headings_font->default = mammaterra_font_default_frontend();
	}
	$mammaterra_body_font = $wp_customize->get_setting( 'hestia_body_font' );
	if ( ! empty( $mammaterra_body_font ) ) {
		$mammaterra_body_font->default = mammaterra_font_default_frontend();
	}

	/* Add the second button in the Big Title section */

	/**
	 * Control for button text
	 */
	$wp_customize->add_setting(
		'mammaterra_big_title_second_button_text', array(
			'default'           => esc_html__( 'Second Button text', 'mammaterra' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh ? 'postMessage' : 'refresh',
		)
	);
	$wp_customize->add_control(
		'mammaterra_big_title_second_button_text', array(
			'label'    => esc_html__( 'Second Button text', 'mammaterra' ),
			'section'  => 'hestia_big_title',
			'priority' => 30,
		)
	);

	/**
	 * Control for button link
	 */
	$wp_customize->add_setting(
		'mammaterra_big_title_second_button_link', array(
			'default'           => '#',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => $selective_refresh ? 'postMessage' : 'refresh',
		)
	);
	$wp_customize->add_control(
		'mammaterra_big_title_second_button_link', array(
			'label'    => esc_html__( 'Second Button URL', 'mammaterra' ),
			'section'  => 'hestia_big_title',
			'priority' => 30,
		)
	);

	$wp_customize->selective_refresh->remove_partial( 'hestia_big_title_button' );

	$wp_customize->selective_refresh->add_partial(
		'mammaterra_big_title_second_button', array(
			'selector'        => '.carousel .buttons',
			'settings'        => array( 'hestia_big_title_button_text', 'hestia_big_title_button_link', 'mammaterra_big_title_second_button_text', 'mammaterra_big_title_second_button_link' ),
			'render_callback' => 'mammaterra_big_title_buttons_callback',
		)
	);

}
add_action( 'customize_register', 'mammaterra_change_defaults', 99 );

/**
 * Add a second button in Big Title section
 *
 * @since 1.0.0
 */
function mammaterra_big_title_second_btn() {

	$mammaterra_big_title_second_btn_text = get_theme_mod( 'mammaterra_big_title_second_button_text', __( 'Second button text', 'mammaterra' ) );
	$mammaterra_big_title_second_btn_link = get_theme_mod( 'mammaterra_big_title_second_button_link', '#' );

	if ( ! empty( $mammaterra_big_title_second_btn_text ) && ! empty( $mammaterra_big_title_second_btn_link ) ) {
		?>
		<a href="<?php echo esc_url( $mammaterra_big_title_second_btn_link ); ?>" title="<?php echo esc_attr( $mammaterra_big_title_second_btn_text ); ?>" class="btn btn-right btn-lg" <?php echo hestia_is_external_url( $mammaterra_big_title_second_btn_link ); ?>><?php echo esc_html( $mammaterra_big_title_second_btn_text ); ?></a>
		<?php
	}
}
add_action( 'hestia_big_title_section_buttons', 'mammaterra_big_title_second_btn' );

/**
 * Render callback for buttons in Big Title section
 *
 * @since 1.0.0
 */
function mammaterra_big_title_buttons_callback() {

	$mammaterra_big_title_first_btn_text  = get_theme_mod( 'hestia_big_title_button_text', __( 'First button text', 'mammaterra' ) );
	$mammaterra_big_title_first_btn_link  = get_theme_mod( 'hestia_big_title_button_link', '#' );
	$mammaterra_big_title_second_btn_text = get_theme_mod( 'mammaterra_big_title_second_button_text', __( 'Second button text', 'mammaterra' ) );
	$mammaterra_big_title_second_btn_link = get_theme_mod( 'mammaterra_big_title_second_button_link', '#' );

	if ( ! empty( $mammaterra_big_title_first_btn_text ) ) {
		?>
		<a href="<?php echo esc_url( $mammaterra_big_title_first_btn_link ); ?>" title="<?php echo esc_attr( $mammaterra_big_title_first_btn_text ); ?>" class="btn btn-primary btn-lg" <?php echo hestia_is_external_url( $mammaterra_big_title_first_btn_link ); ?>><?php echo esc_html( $mammaterra_big_title_first_btn_text ); ?></a>
		<?php
	}

	if ( ! empty( $mammaterra_big_title_second_btn_text ) ) {
		?>
		<a href="<?php echo esc_url( $mammaterra_big_title_second_btn_link ); ?>" title="<?php echo esc_attr( $mammaterra_big_title_second_btn_text ); ?>" class="btn btn-right btn-lg" <?php echo hestia_is_external_url( $mammaterra_big_title_second_btn_link ); ?>><?php echo esc_html( $mammaterra_big_title_second_btn_text ); ?></a>
		<?php
	}
}

/**
 * Change default font family for front end display.
 *
 * @return string
 *
 * @since 1.0.0
 */
function mammaterra_font_default_frontend() {
	return 'Montserrat';
}
add_filter( 'hestia_headings_default', 'mammaterra_font_default_frontend' );
add_filter( 'hestia_body_font_default', 'mammaterra_font_default_frontend' );

/**
 * Change default value of accent color
 *
 * @return string - default accent color
 * @since 1.0.0
 */
function mammaterra_accent_color() {
	return '#f5593d';
}
add_filter( 'hestia_accent_color_default', 'mammaterra_accent_color' );

/**
 * Change default value of gradient color
 *
 * @return string - default gradient color
 * @since 1.0.0
 */
function mammaterra_gradient_color() {
	return '#51bcda';
}
add_filter( 'hestia_header_gradient_default', 'mammaterra_gradient_color' );

/**
 * Add color_accent on some elements
 *
 * @since 1.0.0
 */
function mammaterra_inline_style() {

	$color_accent = get_theme_mod( 'accent_color', '#f5593d' );

	$custom_css = '';

	if ( ! empty( $color_accent ) ) {

		/* Pricing section */
		$custom_css .= '.hestia-pricing .hestia-table-one .card-pricing .category { color: ' . esc_html( $color_accent ) . '; }';
		$custom_css .= '.hestia-pricing .hestia-table-two .card-pricing { background-color: ' . esc_html( $color_accent ) . '; }';

		/* Pagination on Blog */
		$custom_css .= '.pagination .nav-links .page-numbers { color: ' . esc_html( $color_accent ) . '; border-color: ' . esc_html( $color_accent ) . '; }';
		$custom_css .= '.pagination .nav-links .page-numbers.current { border-color: ' . esc_html( $color_accent ) . '; }';
		$custom_css .= '.pagination .nav-links .page-numbers:hover { background-color: ' . esc_html( $color_accent ) . '; }';
		$custom_css .= '.pagination .nav-links .page-numbers:hover { border-color: ' . esc_html( $color_accent ) . '; }';

		/* Pagination ons Shop */
		$custom_css .= '.woocommerce-pagination ul.page-numbers .page-numbers { color: ' . esc_html( $color_accent ) . '; border-color: ' . esc_html( $color_accent ) . '; } ';
		$custom_css .= '.woocommerce-pagination ul.page-numbers li > span.current { border-color: ' . esc_html( $color_accent ) . ' !important; }';
		$custom_css .= '.woocommerce-pagination ul.page-numbers .page-numbers:hover { background-color: ' . esc_html( $color_accent ) . '; }';
		$custom_css .= '.woocommerce-pagination ul.page-numbers .page-numbers:hover { border-color: ' . esc_html( $color_accent ) . '; }';

		/* Categories */
		$custom_css .= '.entry-categories .label { background-color: ' . esc_html( $color_accent ) . ';}';

		/* Shop Sidebar Rating*/
		$custom_css .= '.woocommerce .star-rating { color: ' . esc_html( $color_accent ) . '; }';

		/* Single Product Page Rating */
		$custom_css .= '.woocommerce div.product p.stars span a:before { color: ' . esc_html( $color_accent ) . '; }';

		/* Cart action buttons */
		$custom_css .= '.woocommerce-cart table.shop_table tr td.actions input[type=submit] { background-color: ' . esc_html( $color_accent ) . '; }';
		$custom_css .= '.woocommerce-cart table.shop_table tr td.actions input[type=submit]:hover { background-color: ' . esc_html( $color_accent ) . '; }';

		/* WooCommerce message */
		$custom_css .= '.woocommerce-page .woocommerce-message { background-color: ' . esc_html( $color_accent ) . '; }';

		/* WooCommerce My Order Tracking Page */
		$custom_css .= '.track_order input[type=submit] { background-color: ' . esc_html( $color_accent ) . '; }';
		$custom_css .= '.track_order input[type=submit]:hover { background-color: ' . esc_html( $color_accent ) . '; }';

		/* WooCommerce tag widget */
		$custom_css .= 'div[id^=woocommerce_product_tag_cloud].widget a { background-color: ' . esc_html( $color_accent ) . '; }';

		/* WooCommerce Cart widget */
		$custom_css .= '.woocommerce.widget_shopping_cart .buttons > a.button { background-color: ' . esc_html( $color_accent ) . '; }';
		$custom_css .= '.woocommerce.widget_shopping_cart .buttons > a.button:hover { background-color: ' . esc_html( $color_accent ) . '; }';
	}

	wp_add_inline_style( 'mammaterra_parent', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'mammaterra_inline_style', 10 );

/**
 * Remove parent theme actions
 *
 * @since 1.0.0
 */
function mammaterra_remove_hestia_actions() {

	/* Remove three points from blog read more button */
	remove_filter( 'excerpt_more', 'hestia_excerpt_more', 10 );

}
add_action( 'after_setup_theme', 'mammaterra_remove_hestia_actions' );

/**
 * Remove product description except from Single Product Page
 *
 * @since 1.0.0
 */
function mammaterra_remove_product_description() {

	if ( class_exists( 'WooCommerce' ) ) {
		if ( ! is_product() ) {
			add_filter( 'woocommerce_short_description', '__return_empty_string' );
		}
	}
}
add_action( 'template_redirect', 'mammaterra_remove_product_description' );

/**
 * Replace excerpt "Read More" text with a link.
 *
 * @since 1.0.0
 */
function mammaterra_excerpt_more( $more ) {
	global $post;
	if ( ( ( 'page' === get_option( 'show_on_front' ) ) ) || is_single() || is_archive() || is_home() ) {
		return '<a class="moretag" href="' . esc_url( get_permalink( $post->ID ) ) . '"> ' . esc_html__( 'Read more', 'mammaterra' ) . '</a>';
	}

	return $more;
}
add_filter( 'excerpt_more', 'mammaterra_excerpt_more' );

/**
 * Remove boxed layout control
 *
 * @since 1.0.0
 */
function mammaterra_remove_boxed_layout( $wp_customize ) {

	$wp_customize->remove_control( 'hestia_general_layout' );
}
add_action( 'customize_register', 'mammaterra_remove_boxed_layout', 100 );

/**
 * Import options from Hestia
 *
 * @since 1.0.0
 */
function mammaterra_get_lite_options() {
	$hestia_mods = get_option( 'theme_mods_hestia' );
	if ( ! empty( $hestia_mods ) ) {
		foreach ( $hestia_mods as $hestia_mod_k => $hestia_mod_v ) {
			set_theme_mod( $hestia_mod_k, $hestia_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'mammaterra_get_lite_options' );

/**
 * Change default header image in Big Title Section
 *
 * @since 1.0.0
 * @return string - path to image
 */
function mammaterra_header_background_default() {
	return get_stylesheet_directory_uri() . '/assets/img/header.jpg';
}
add_filter( 'hestia_big_title_background_default', 'mammaterra_header_background_default' );


add_filter( 'hestia_welcome_notice_filter', 'mammaterra_welcome_notice_filter' );

/**
 * Change default welcome notice that appears after theme first installed
 */
function mammaterra_welcome_notice_filter() {

	$theme = wp_get_theme();

	$theme_name = $theme->get( 'Name' );
	$theme      = $theme->parent();

	$theme_slug = $theme->get_template();

	$var = '<p>' . sprintf( 'Welcome! Thank you for choosing %1$s! To fully take advantage of the best our theme can offer please make sure you visit our %2$swelcome page%3$s.', $theme_name, '<a href="' . esc_url( admin_url( 'themes.php?page=' . $theme_slug . '-welcome' ) ) . '">', '</a>' ) . '</p><p><a href="' . esc_url( admin_url( 'themes.php?page=' . $theme_slug . '-welcome' ) ) . '" class="button" style="text-decoration: none;">' . sprintf( 'Get started with %s', $theme_name ) . '</a></p>';

	return $var;
}

add_filter( 'hestia_about_page_filter', 'mammaterra_about_page_filter', 0, 3 );

/**
 * Change About page defaults
 *
 * @param string $old_value Old value beeing filtered.
 * @param string $parameter Specific parameter for filtering.
 */
function mammaterra_about_page_filter( $old_value, $parameter ) {

	switch ( $parameter ) {
		case 'menu_name':
		case 'pro_menu_name':
			$return = esc_html__( 'About Mamma Terra', 'mammaterra' );
			break;
		case 'page_name':
		case 'pro_page_name':
			$return = esc_html__( 'About Mamma Terra', 'mammaterra' );
			break;
		case 'welcome_title':
		case 'pro_welcome_title':
			/* translators: s - theme name */
			$return = sprintf( esc_html__( 'Welcome to %s! - Version ', 'mammaterra' ), 'Mamma Terra' );
			break;
		case 'welcome_content':
		case 'pro_welcome_content':
			$return = esc_html__( 'Mamma Terra is a responsive WordPress theme with multipurpose design. It is a good fit for both small businesses and corporate businesses, as it is highly customizable via the Live Customizer. You can use Mamma Terra for restaurants, startups, freelancer resume, creative agencies, portfolios, WooCommerce, or niches like sports, medical, blogging, fashion, lawyer sites etc. It has a one-page design, Sendinblue newsletter integration, widgetized footer, and a clean appearance. The theme is compatible with Elementor Page Builder, Photo Gallery, Flat Parallax Slider, and Travel Map; it is mobile friendly and optimized for SEO.', 'mammaterra' );
			break;
		default:
			$return = '';
	}
	return $return;
}

/**
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
function mammaterra_theme_setup() {
	load_child_theme_textdomain( 'mammaterra', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'mammaterra_theme_setup' );
