<?php
// Use featured image if set, but fallback to first image in content if there is no featured image
if (has_post_thumbnail()) {
  $image_id = get_post_thumbnail_id();
  $image_url = wp_get_attachment_image_src($image_id, 'thumb-horizontal');
  $image_sized['url'] = $image_url[0];
} else {
  $image_src = catch_that_image();
  $image_sized = mr_image_resize($image_src, 400, 300, true, false);
}
?>

<div class="post has-photo-overlay row">
  <div class="photo-overlay col-xs-3 col-sm-12">
    <div class="hidden-xs">
      <h4 class="post-title"><?php the_title(); ?></h4>
      <div class="line"></div>
    </div>

    <a class="mega-link" href="<?php the_permalink(); ?>"></a>

    <?php if ($image_sized['url']) { ?>
      <img src="<?php echo $image_sized['url']; ?>" />
    <?php } ?>
  </div>

  <div class="col-xs-9 col-sm-12 extra-padding">
    <h4 class="post-title visible-xs-block"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <p class="meta">by <?php the_field('author'); ?> on <date><?php echo the_time(get_option('date_format')); ?></date></p>
  </div>
</div>
