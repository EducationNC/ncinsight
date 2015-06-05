<?php while (have_posts()) : the_post(); ?>
  <?php
  $comments_open = comments_open();

  $category = get_the_category();
    // Convert category results to array instead of object
    foreach ($category as &$cat) {
      $cat = (array) $cat;
    }
    $cats_hide = array();
    // Determine array indexes for labels we don't want to show
    $cats_hide[] = array_search('Uncategorized', array_column($category, 'cat_name'));
    // Remove empty results
    $cats_hide = array_filter($cats_hide, 'strlen');
  ?>

  <article <?php post_class('article'); ?>>
      <header class="entry-header container">
        <div class="row">
          <div class="col-md-9 col-centered">
            <?php
            // Only show label of category if it's not in hidden list
            foreach ($category as $key=>$value) {
              if (!in_array($key, $cats_hide)) {
                echo '<span class="label">' . $value['cat_name'] . '</span> ';
              }
            }
            ?>

            <h1 class="entry-title"><?php the_title(); ?></h1>

            <?php get_template_part('templates/entry-meta'); ?>
            <?php get_template_part('templates/social', 'share'); ?>

            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('large');
              $thumb_id = get_post_thumbnail_id();
              $thumb_post = get_post($thumb_id);
              ?>
              <div class="text-right caption hidden-xs extra-bottom-margin">
                <?php echo $thumb_post->post_excerpt; ?>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </header>

      <div class="entry-content container">
        <div class="row">
          <div class="col-lg-7 col-md-9 col-centered">
            <?php the_content(); ?>

            <?php get_template_part('templates/social', 'share'); ?>

            <div class="sep"></div>

            <?php
            if (in_category('109')) {  // 1868 Constitutional Convention
              ?>
              <div class="row bottom-margin">
                <div class="col-md-6">
                  <?php previous_post_link('%link', '&laquo; Previous day', true, 'category'); ?>
                </div>
                <div class="col-md-6 text-right">
                  <?php next_post_link('%link', 'Next day &raquo;', true, 'category'); ?>
                </div>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </div>

      <footer class="container">
        <?php if ($comments_open == 1) { ?>
          <div class="row">
            <div class="col-lg-7 col-md-9 col-centered hidden-print">
              <h3>Leave a comment</h3>
              <?php comments_template('templates/comments'); ?>
            </div>
          </div>
        <?php } ?>
      </footer>

      <div class="row">
        <div class="col-md-9 col-centered hidden-print">
          <div class="row">
            <div class="col-sm-6">
              <?php
              global $post;
              $original_post = $post;

              $prev = get_previous_post();
              if ($prev) {
                $post = $prev;
                setup_postdata($post);

                echo '<h3>Previous article</h3>';
                get_template_part('templates/thumb-overlay', 'small');

                $post = $original_post;
                wp_reset_postdata();
              }
              ?>
            </div>
            <div class="col-sm-6">
              <?php
              $next = get_next_post();
              if ($next) {
                $post = $next;
                setup_postdata($post);

                echo '<h3>Next article</h3>';
                get_template_part('templates/thumb-overlay', 'small');

                $post = $original_post;
                wp_reset_postdata();
              }
              ?>
            </div>
          </div>
        </div>
      </div>
  </article>
<?php endwhile; ?>
