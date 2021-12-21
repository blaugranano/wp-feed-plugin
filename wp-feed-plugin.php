<?php

namespace Blaugrana\Feed\v1;

/**
* Plugin Name: Blaugrana Feed
* Plugin URI: https://github.com/blaugranano/wp-feed-plugin
* Description: This WordPress plugin alters the domain of post links in the RSS feed.
* Version: 1.0.0
* Author: Blaugrana
* Author URI: https://github.com/blaugranano
*/

/**
* Define plugin functions
*/

function bg__feed_init($output) {
  return str_replace('wp.blgr.app', 'www.blaugrana.no', $output);
}

/**
* Initiate plugin
*/
add_filter('the_permalink_rss', __NAMESPACE__ . '\\bg__feed_init', 10, 1);
add_filter('bloginfo_rss', __NAMESPACE__ . '\\bg__feed_init', 10, 1);
