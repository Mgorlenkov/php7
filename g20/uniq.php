<?php ## Выделение уникальных слов в тексте
  function getUniques($text, &$nOrigWords = false)
  {
    $words = preg_split("/([^[:alnum:]]|['-])+/s", $text);
    $nOrigWords = count($words);
    $words = array_map("strtolower", $words);
    $words = array_unique($words);
    return $words;
  }
  setlocale(LC_ALL, 'ru.RU.UTF-8');
  $frame = "largetextfile.txt";
  $text = file_get_contents($frame);
  $uniq = getUniques($text, $nOrig);
  echo "Было слов: $nOrig<br />";
  echo "Стало слов: ".count($uniq)."<hr />";
  echo join(" ", $uniq);
?>  
