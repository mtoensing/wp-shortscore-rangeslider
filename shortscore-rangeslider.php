<?php

/*
  Plugin Name: SHORTSCORE Rangeslider
  Plugin URI: http://www.shortscore.org
  Description: Frontend slider for the shortscore dropdown.
  Version: 1.1
  Author: MarcDK
  Author URI: http://www.marc.tv
  GitHub Plugin URI: mtoensing/wp-shortscore-rangeslider
  License: GPL2
 */

function add_shortscore_rangeslider_scripts()
{
    if (is_user_logged_in()) {
        wp_enqueue_style(
            "jquery.shortscorerangeslider.css", WP_PLUGIN_URL . "/wp-shortscore-rangeslider/rangeslider.css", false, "1.1");

        wp_enqueue_script(
            "jquery.shortscorerangeslider.js", WP_PLUGIN_URL . "/wp-shortscore-rangeslider/rangeslider.js", array("jquery"), "1.1", false);

        wp_enqueue_script(
            "jquery.shortscorerangeslider-init.js", WP_PLUGIN_URL . "/wp-shortscore-rangeslider/rangeslider-init.js", array("jquery"), "1.1", false);
    }
}

add_action('wp_print_styles', 'add_shortscore_rangeslider_scripts');

?>
