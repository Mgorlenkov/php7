<?php ## Обращение к серверу точного времени
  $curl = curl_init("http://wwv.nist.gov:13");
  echo curl_exec($curl);
  curl_close($curl);
?>
