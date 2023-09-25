<?php

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
  register_rest_route('podio/v1', '/investor-form/', array(
    'methods' => 'POST',
    'callback' => 'handle_podio_request'
  ));
});
