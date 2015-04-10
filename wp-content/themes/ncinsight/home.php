<?php
$args = array(
  'posts_per_page' => 4,
  'post_type' => 'post'
);

$recent = new WP_Query($args);

if ($recent->have_posts()) : ?>
  <section class="container">
    <div class="row">
      <?php
      // Display first post from WP_Query results
      $post = $recent->posts[0];
      setup_postdata($post);
      ?>

      <div class="post has-photo-overlay">
        <div class="col-md-8">
          <?php get_template_part('templates/thumb-overlay', 'feature'); ?>
        </div>

        <div class="col-md-4">
          <p><?php the_advanced_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="read-more">Full story &raquo;</a>
        </div>
      </div>

      <?php wp_reset_postdata(); ?>
    </div>

    <div class="row">
      <?php
      // Display next 3 posts from WP_Query results
      for ($i = 1; $i < 4; $i++) {
        $post = $recent->posts[$i];
        setup_postdata($post);
        ?>

        <div class="col-sm-4">
          <?php get_template_part('templates/thumb-overlay', 'small'); ?>
        </div>

        <?php
      }
      wp_reset_postdata();
      ?>
    </div>
  </section>
<?php endif; wp_reset_query(); ?>

<section class="container">
  <div class="row">
    <div class="col-md-4">
      <h3 class="content-section-title">Blog: From the Center Out</h3>
      <div class="content-listing extra-padding">

      </div>
    </div>

    <div class="col-md-4">
      <h3 class="content-section-title">NCCPPR on Facebook</h3>
      <div class="extra-padding">
        <div class="fb-page" data-href="https://www.facebook.com/nccppr" data-width="100%" data-height="600" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/nccppr"><a href="https://www.facebook.com/nccppr">NCCPPR</a></blockquote></div></div>
      </div>
    </div>

    <div class="col-md-4">
      <h3 class="content-section-title">NCCPPR on Twitter</h3>
      <div class="extra-padding">
        <a class="twitter-timeline" height="600" data-dnt="true" href="https://twitter.com/NCCPPR" data-widget-id="586616334886240256">Tweets by @NCCPPR</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
    </div>
  </div>
</section>
