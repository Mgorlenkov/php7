<?php ## Использование контекста потока
  $opts = [
    'http' => [
      'method' => 'GET',
      'user_agent' => 'Mozila/5.0 (windows NT 6.3; WOW64; rv:42.0)',
      'header' => 'Content-type: text/html; charset=UTF-8'
    ]
  ];

  echo file_get_contents(
    'http://php.net',
    false,
    stream_context_create($opts)
  );
?>
