<?php ## Отправка данных методом POST
  $curl = curl_init("http://php7.loc/g39/handler.php");
  curl_setopt($curl, CURLOPT_POST, 1);
  $data = "name=".urlencode("Игорь").
          "&pass=".urlencode("Пароль")."\r\n\r\n";
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  curl_exec($curl);
  curl_close($curl);
?>
