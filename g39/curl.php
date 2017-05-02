<?php ## Использование CURL
  $curl = curl_init("http://php.net");
  echo curl_exec($curl);
  curl_close($curl);
?>
