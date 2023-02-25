<?php

if(isset($_POST['url'])){
  $url = $_POST['url'];
  $proxy_url = "https://www.proxywebsite.com/browse.php?u=$url";
  header("Location: $proxy_url");
  exit();
}

?>
