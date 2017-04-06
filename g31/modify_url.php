<?php ## Модификация части URL без изменения других его участков
  require_once "lib/http_build_url.php";
  $url = "http://username@example.com:80/path?arg=value#archor";
  $parsed = parse_url($url);
  parse_str(@$parsed['query'], $query);
  $query['names']['read'] = 'tom';
  $parsed['query'] = http_build_query($query);
  $newurl = http_build_url($parsed);
  echo "Старый URL: $url<br>";
  echo "Новый: $newurl";
?>
