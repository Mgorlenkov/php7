<?php ## Экранирование
  $arr = [
    'Deb\'s files',
    'Simbol \\',
    'print "Hello world!"'
  ];
  echo "<pre>";
  print_r($arr);
  echo "<pre>";
  $result = filter_var_array($arr, FILTER_SANITIZE_MAGIC_QUOTES);
  echo "<pre>";
  print_r($result);
  echo "<pre>";
?>
