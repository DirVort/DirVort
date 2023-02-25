<?php

// $key = "OrtxTorNeverEqu0Knew";

// The message to be encrypted
// $message = "!";

// Encrypt the message using AES-256-CBC encryption and base64 encoding
// $encrypted = openssl_encrypt($message, "AES-256-CBC", $key, 0, "random_initialization_vector");
// $encrypted = base64_encode($encrypted);

// Decrypt the message
// $decrypted = base64_decode($encrypted);
// $decrypted = openssl_decrypt($decrypted, "AES-256-CBC", $key, 0, "random_initialization_vector");

// Output the decrypted message
// echo $decrypted;

// Get the URL to proxy from the query string
$url = $_GET['url'];

// Check if the URL is valid
if (!filter_var($url, FILTER_VALIDATE_URL)) {
  http_response_code(400);
  echo 'Invalid URL';
  exit;
}

// Create a new cURL resource
$curl = curl_init();

// Set the cURL options
curl_setopt_array($curl, [
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_MAXREDIRS => 10,
]);

// Execute the cURL request and get the response
$response = curl_exec($curl);

// Check for cURL errors
if (curl_error($curl)) {
  http_response_code(500);
  echo 'cURL error: ' . curl_error($curl);
  exit;
}

// Get the content type of the response
$content_type = curl_getinfo($curl, CURLINFO_CONTENT_TYPE);

// Set the content type header for the response
header('Content-Type: ' . $content_type);

// Output the response
echo $response;

// Close the cURL resource
curl_close($curl);



