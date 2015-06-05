<?php

/**
 * Custom feed templates
 *
 */

// Register custom feeds
function ncinsight_custom_rss() {
  add_feed('weekly', 'feed_weekly');
}
add_action('init', 'ncinsight_custom_rss');

// Function for Weekly Wrapup feed
function feed_weekly() {
  get_template_part('templates/feed', 'weekly');
}
