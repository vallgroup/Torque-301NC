<header
  id="header-style-1"
  class="torque-header">

  <div class="row torque-header-content-wrapper torque-navigation-toggle">

    <div class="torque-header-logo-wrapper">
      <?php get_template_part( 'parts/shared/logo', 'dark'); ?>
    </div>

    <div class="torque-header-burger-menu-wrapper">
      <?php get_template_part( 'parts/elements/element', 'burger-menu-squeeze'); ?>
    </div>

    <div class="torque-header-menu-items-inline-wrapper primary">
      <?php
      get_template_part( '/parts/shared/header-parts/menu-items/menu-items', 'inline');
      ?>
    </div>

    <div class="torque-header-menu-items-inline-wrapper pinned">
      <?php
      $menu_items = Torque_Nav_Menus::get_nav_menu_items_by_location( 'pinned' );
      include locate_template( 'parts/shared/header-parts/menu-items/menu-items-inline.php' );
      ?>
    </div>

  </div>

  <div class="col1 torque-navigation-toggle torque-header-menu-items-mobile">
    <?php get_template_part( 'parts/shared/header-parts/menu-items/menu-items', 'stacked'); ?>
  </div>

</header>
