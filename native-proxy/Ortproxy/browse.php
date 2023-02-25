<?php

// Set a secret key for encryption
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

if(isset($_POST['url'])){
  $url = $_POST['url'];
  
   // Encrypt the message using AES-256-CBC encryption and base64 encoding

  // $encrypted = openssl_encrypt($url, "AES-256-CBC", $key, 0, "random_initialization_vector");
  // $encrypted = base64_encode($encrypted);
  $proxy_url = "https://www.proxywebsite.com/browse.php?u=$url";
  header("Location: $proxy_url");
  exit();
}

?>
