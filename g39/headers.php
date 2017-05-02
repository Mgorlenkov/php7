<?php ## Получение HTTP-заголовков
  function get_content($hostname)
  {
    $curl = curl_init($hostname);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HEADER, 1);
    curl_setopt($curl, CURLOPT_NOBODY, 1);
    $content = curl_exec($curl);
    curl_close($curl);
    return explode("\r\n", $content);
  }
  $hostname = "http://php.net";
  $out = get_content($hostname);

  echo "<pre>";
  print_r($out);
  echo "</pre>";
?>
