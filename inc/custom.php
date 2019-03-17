<?php
// CUSTOM ADMIN MENU LINK FOR ALL SETTINGS
   function all_settings_link() {
    add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
   }
   add_action('admin_menu', 'all_settings_link');

   // Customize function.
   if ( ! function_exists( 'margo_customize_name_panel_section' ) ) {
     // Customize Register action.
     add_action( 'customize_register', 'margo_customize_name_panel_section' );

     /**
      * Customize: Panel.
      *
      * Customize function.
      *
      * @param  object WP_Customize $wp_customize Instance of the WP_Customize_Manager class.
      * @since  1.0.0
      */
     function margo_customize_name_panel_section( $wp_customize ) {
       // Theme Settings Panel
       $wp_customize->add_panel( '01_panel_margo',
         array(
           'capability'      => 'edit_theme_options',
           'description'      => esc_html__( 'description', 'margo' ),
           'priority'      => 10,
           'theme_supports'    => '',
           'title'        => esc_html__( 'Theme Settings', 'margo' ),
         )
       );
     }
   }

 ?>
