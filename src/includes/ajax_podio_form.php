<?php

add_action("wp_ajax_podioFormRequest", "podioFormRequest");
add_action('wp_ajax_nopriv_podioFormRequest', 'podioFormRequest');

function podioFormRequest()
{
  $url = $_POST["url"];
  $formFields = $_POST["fields"];
  $fields = array();
  foreach ($formFields as $key => $value) {
    $fields["fields[$key]"] = sanitize_text_field($value);
  }
  # Create a connection
  $ch = curl_init($url);
  # Form data string
  $postString = http_build_query($fields, '', '&');
  # Setting our options
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  # Get the response
  $response = curl_exec($ch);
  curl_close($ch);
  if ($response === false) {
    echo json_encode(array(
      "status" => "failure"
    ));
  } else {
    echo json_encode(array(
      "status" => "success"
    ));
  }
  wp_die();
}

function handle_podio_request($data)
{
  $url = $data['url'];
  $fields = $data['form'];
  $json = json_encode($fields);

  $ch = curl_init($url);

  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST'); // Specify the HTTP request method as POST
  curl_setopt($ch, CURLOPT_POSTFIELDS, $json); // Set the POST data as JSON
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
  ));
  $response = curl_exec($ch);
  curl_close($ch);
  if ($response === false) echo json_encode(array("status" => "failure"));
  echo json_encode(array("status" => "success"));
}

add_action('rest_api_init', function () {
  //Path to REST route and the callback function
  register_rest_route('podio/v1', '/sd/', array(
    'methods' => 'POST',
    'callback' => 'handle_podio_request'
  ));
});
