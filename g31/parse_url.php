<?php ## Пример разбора URL
  $url = "http://username:password@host.com:80/path?arg=value#archor";
  echo "<pre>"; print_r(parse_url($url)); echo "</pre>";
?>
