<nav id="oc-menu" class="oc-menu hidden-print">
  <div class="oc-level">
    <ul class="no-margin">
      <li><a href="/">Home</a></li>
    </ul>
    <?php
    wp_nav_menu(array(
      'theme_location' => 'minor_navigation',
      'container' => false,
      'walker' => new Mobile_Nav_Walker
    ));
    ?>

    <div class="social-media">
      <a class="icon-facebook" href="http://facebook.com/nccppr" target="_blank"></a>
      <a class="icon-twitter" href="http://twitter.com/nccppr" target="_blank"></a>
    </div>

    <ul>
      <li>
        <a href="https://donatenow.networkforgood.org/nccppr" class="btn btn-default btn-lg"><small>Donate Now</small></a>
      </li>
    </ul>
  </div>
</nav>
