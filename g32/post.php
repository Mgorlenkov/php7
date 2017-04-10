<?php ## Отправка POST-данных напрямую(?)
  $body = "first_name=Игорь&last_name=Симдянов";
  $opts = [
    'http' => [
      'method' => 'POST',
      'user_agent' => 'Mozila/5.0 (windows NT 6.3; WOW64; rv:42.0)',
      'header' => "Content-Type: aplication/x-www-form-urlencoded\r\n".
                  "Content-Lenght: " . mb_strlen($body),
      'content' => $body
    ]
  ];
  //echo "<pre>"; print_r($opts); echo "</pre>"; exit;
  $context = stream_context_create($opts);
  echo file_get_contents(
    'http://php7.loc/g32/handler.php',
    false,
    $context
  );
?>
