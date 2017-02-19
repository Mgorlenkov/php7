<?php ## Пример первый
  preg_match('/(\d+)/s', "article_123.html", $matches);
  echo $matches[1];
?>
