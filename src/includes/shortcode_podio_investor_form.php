<?php

function enqueue_podio_investor_form_assets()
{
  wp_enqueue_script('podio-investor-form-script', plugins_url('templates/podio-investor-form/podio-investor-form.js', __DIR__));
  wp_enqueue_style('podio-investor-form-style', plugins_url('templates/podio-investor-form/podio-investor-form.css', __DIR__), array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_podio_investor_form_assets');


function podio_investor_form($atts)
{
  ob_start(); // Start output buffering
  include(plugins_url('templates/podio-investor-form/podio-investor-form.php', __DIR__));
  $output = ob_get_clean(); // Get the contents of the included file and clean the buffer
  return $output;
}
add_shortcode('podio_investor_form', 'podio_investor_form');
