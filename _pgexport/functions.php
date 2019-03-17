<?php
if ( ! function_exists( 'margo_setup' ) ) :

function margo_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'margo', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'margo' ),
        'social'  => __( 'Social Links Menu', 'margo' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // margo_setup

add_action( 'after_setup_theme', 'margo_setup' );


if ( ! function_exists( 'margo_init' ) ) :

function margo_init() {


    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */

    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // margo_setup

add_action( 'init', 'margo_init' );


if ( ! function_exists( 'margo_widgets_init' ) ) :

function margo_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'margo_widgets_init' );
endif;// margo_widgets_init



if ( ! function_exists( 'margo_customize_register' ) ) :

function margo_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'top_bar', array(
    'title' => __( 'Top Bar', 'margo' ),
    'panel' => '01_panel_margo'
  ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'custom_logo', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'custom_logo', array(
    'label' => __( 'Logo', 'margo' ),
    'type' => 'media',
    'mime_type' => 'image',
    'section' => 'title_tagline'
  ) ) );

    $wp_customize->add_setting( 'contact_email', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'contact_email', array(
    'label' => __( 'E-Mail', 'margo' ),
    'type' => 'email',
    'section' => 'top_bar'
  ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'margo_customize_register' );
endif;// margo_customize_register


if ( ! function_exists( 'margo_enqueue_scripts' ) ) :
    function margo_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_enqueue_script( 'jQuery ', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', array( 'jquery' ), 'v2.1.4', true );

    wp_enqueue_script( 'jQuery Migrate ', get_template_directory_uri() . '/js/jquery.migrate.js', array( 'jquery' ), 'v1.2.1', true );

    wp_enqueue_script( 'Modernizr ', get_template_directory_uri() . '/js/modernizrr.js', null, 'v2.6.2', true );

    wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/asset/js/bootstrap.min.js', null, 'v3.3.6', true );

    wp_enqueue_script( 'FitVids ', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), 'v1.0.3', true );

    wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', null, null, true );

    wp_enqueue_script( 'Nivo Lightbox', get_template_directory_uri() . '/js/nivo-lightbox.min.js', null, 'v1.0', true );

    wp_enqueue_script( 'Isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', null, 'v1.5.26', true );

    wp_enqueue_script( 'jquery.appears', get_template_directory_uri() . '/js/jquery.appear.js', array( 'jquery' ), null, true );

    wp_enqueue_script( 'countto', get_template_directory_uri() . '/js/count-to.js', null, null, true );

    wp_enqueue_script( 'textillate', get_template_directory_uri() . '/js/jquery.textillate.js', null, null, true );

    wp_enqueue_script( 'Lettering.JS ', get_template_directory_uri() . '/js/jquery.lettering.js', null, 'v0.6.1', true );

    wp_enqueue_script( 'easyPieChart', get_template_directory_uri() . '/js/jquery.easypiechart.min.js', null, null, true );

    wp_enqueue_script( 'smoth-scrool', get_template_directory_uri() . '/js/smooth-scroll.js', null, null, true );

    wp_enqueue_script( 'skrollr core', get_template_directory_uri() . '/js/skrollr.js', null, null, true );

    wp_enqueue_script( 'query parallax', get_template_directory_uri() . '/js/jquery.parallax.js', null, null, true );

    wp_enqueue_script( 'MediaElement', get_template_directory_uri() . '/js/mediaelement-and-player.js', null, null, true );

    wp_enqueue_script( 'SlickNav', get_template_directory_uri() . '/js/jquery.slicknav.js', null, 'v1.0.4', true );

    wp_enqueue_script( 'style changer', get_template_directory_uri() . '/js/style.changer.js', null, null, true );

    wp_enqueue_script( 'jquery.themepunch.revolution', get_template_directory_uri() . '/js/jquery.themepunch.revolution.min.js', array( 'jquery' ), 'v4.6.4', true );

    wp_enqueue_script( 'touchSwipe', get_template_directory_uri() . '/js/jquery.themepunch.tools.min.js', array( 'jquery' ), 'v1.0', true );

    wp_enqueue_script( 'Revolution Slider', get_template_directory_uri() . '/js/script.js', null, null, true );

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_enqueue_style( 'Bootstrap', get_template_directory_uri() . '/asset/css/bootstrap.min.css', null, 'v3.3.6', 'screen' );

    wp_enqueue_style( 'Settings', get_template_directory_uri() . '/css/settings.css', null, null, 'screen' );

    wp_enqueue_style( 'Font Awesome', get_template_directory_uri() . '/css/font-awesome.min.css', null, '4.4.0', 'screen' );

    wp_enqueue_style( 'SlickNav', get_template_directory_uri() . '/css/slicknav.css', null, 'v1.0.3', 'screen' );

    wp_enqueue_style( 'Style', get_template_directory_uri() . '/css/style.css', null, null, 'screen' );

    wp_enqueue_style( 'Responsive', get_template_directory_uri() . '/css/responsive.css', null, null, 'screen' );

    wp_enqueue_style( 'Animate', get_template_directory_uri() . '/css/animate.css', null, null, 'screen' );

    wp_deregister_style( 'red' );
    wp_enqueue_style( 'red', get_template_directory_uri() . '/css/colors/red.css', false, null, 'screen');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'margo_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/bootstrap/wp_bootstrap_pagination.php";

    /* Pinegrow generated Include Resources End */
    require_once "inc/custom.php";
    require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'margo_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function margo_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'TGM Example Plugin', // The plugin name.
			'slug'               => 'tgm-example-plugin', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '1,0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		// This is an example of the use of 'is_callable' functionality. A user could - for instance -
		// have WPSEO installed *or* WPSEO Premium. The slug would in that last case be different, i.e.
		// 'wordpress-seo-premium'.
		// By setting 'is_callable' to either a function from that plugin or a class method
		// `array( 'class', 'method' )` similar to how you hook in to actions and filters, TGMPA can still
		// recognize the plugin as being installed.
		array(
			'name'        => 'WordPress SEO by Yoast',
			'slug'        => 'wordpress-seo',
			'is_callable' => 'wpseo_init',
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'margo',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'margo' ),
			'menu_title'                      => __( 'Install Plugins', 'margo' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'margo' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'margo' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'margo' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'margo'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'margo'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'margo'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'margo'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'margo'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'margo'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'margo'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'margo'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'margo'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'margo' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'margo' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'margo' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'margo' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'margo' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'margo' ),
			'dismiss'                         => __( 'Dismiss this notice', 'margo' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'margo' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'margo' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}
?>
