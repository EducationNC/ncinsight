<?php
// Use featured image if set, but fallback to first image in content if there is no featured image
if (has_post_thumbnail()) {
  $image_id = get_post_thumbnail_id();
  $image_url = wp_get_attachment_image_src($image_id, 'thumb-horizontal-large');
  $image_sized['url'] = $image_url[0];
} else {
  $image_src = catch_that_image();
  $image_sized = mr_image_resize($image_src, 820, 480, true, false);
}
?>

<div class="photo-overlay small-wide">
  <h2 class="post-title"><?php the_title(); ?></h2>
  <p class="meta">by <?php the_field('author'); ?> on <date><?php the_time(get_option('date_format')); ?></date></p>
  <a class="mega-link" href="<?php the_permalink(); ?>"></a>
  <?php if ($image_sized['url']) { ?>
    <img src="<?php echo $image_sized['url']; ?>" />
  <?php } ?>
</div>
