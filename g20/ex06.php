<?php ## Обратные ссылки
  $str = "Hello? this <b>world</b> is bold!";
  $re = '|<(\w+) [^>]* > (.*?) </\1>|xs';
  preg_match($re, $str, $matches) or die("Нет тегов.");
  echo htmlspecialchars("'$matches[2]' обрамлено тегом '$matches[1]'");
?>
