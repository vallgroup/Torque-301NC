<?php

require_once( get_template_directory() . '/includes/customizer/customizer-tabs/tabs/torque-customizer-tab-site-identity-class.php');

class NC_Customizer_Tab_Site_Identity {

  public static $settings = array(
    'logo_footer_setting' => 'torque_logo_footer'
  );

  public function __construct() {
    add_filter( Torque_Customizer_Tab_Site_Identity::$settings_filter_handle, array($this, 'add_settings'));
    add_action( Torque_Customizer_Tab_Site_Identity::$controls_hook_handle, array($this, 'add_controls'), 10, 2);
  }

  public function add_settings( $settings ) {
    $new_settings = array_merge( $settings, self::$settings );

    return $new_settings;
  }

  public function add_controls($wp_customize, $section_name) {
    // logo uploaders
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, self::$settings['logo_footer_setting'], array(
        'label'    => 'Upload Footer Logo',
        'section'  => $section_name,
        'settings' => self::$settings['logo_footer_setting'],
    ) ) );
  }
}

?>
