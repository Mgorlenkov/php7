<?php ## Ручной разбор QUERY_STRING
  $str = "sillivan=paul&names[roy]=noni&names[read]=tom";
  parse_str($str, $out);
  echo "<pre>"; print_r($out); echo "</pre>";
?>
