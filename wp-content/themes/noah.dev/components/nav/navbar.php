<nav class="navbar navbar-default navbar-static-top" id="main-nav" role="navigation">
  <?php
      wp_nav_menu( array(
          'menu'              => 'primary',
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => false,
          'container_id'      => false,
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker())
      );
  ?>
</nav>
