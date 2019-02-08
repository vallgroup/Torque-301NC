<?php

require_once( get_template_directory() . '/includes/customizer/customizer-tabs/tabs/torque-customizer-tab-site-identity-class.php' );

$tab_settings = Torque_Customizer_Tab_Site_Identity::get_settings();

$logo_src = get_theme_mod( $tab_settings['logo_footer_setting'] );

if (!$logo_src) {
  // fall back to main logo
  $logo_src = get_theme_mod( $tab_settings['logo_setting'] );
}

if ( $logo_src ) {
?>

  <a href="<?php echo get_home_url(); ?>">
    <div>
      <img class="torque-logo" src="<?php echo $logo_src; ?>" />
    </div>
  </a>

<?php
}

?>
