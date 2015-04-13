<header id="header" class="banner visible-md-block visible-lg-block" role="banner">
  <div class="container-fluid">
    <div class="logo">
      <a href="http://www.nccppr.org"><img src="<?php echo get_template_directory_uri(); ?>/assets/public/imgs/nccppr-logo.svg" alt="NCCPPR" /></a>
    </div>

    <div class="ncinsight-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/public/imgs/ncinsight-logo.svg" alt="North Carolina Insight" /></a>
    </div>

    <div class="caption"><?php // echo get_bloginfo('description'); ?></div>

    <div class="pull-right text-right">
      <ul class="list-inline minor-links small">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'minor_navigation',
          'container' => false,
          'items_wrap' => '%3$s'
        ));
        ?>
      </ul>

      <div class="search">
        <?php get_template_part('templates/searchform'); ?>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-default" data-topbar role="navigation">

    <div class="navbar-left">
    </div>

    <div class="navbar-right">
      <div class="social-media">
        <ul class="list-inline">
          <li><a class="icon-facebook" href="http://facebook.com/nccppr" target="_blank"></a></li>
          <li><a class="icon-twitter" href="http://twitter.com/nccppr" target="_blank"></a></li>
        </ul>
      </div>

      <div class="btn-group">
        <a href="https://donatenow.networkforgood.org/nccppr" class="btn btn-default btn-lg"><small>Donate Now</small></a>
      </div>
    </div>
  </nav>
</header>
