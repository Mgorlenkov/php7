<?php ## Использоване strftime()
  setlocale(LC_ALL, 'russian'); //под винду не работает с UTF-8
  echo strftime("%B %Y года, %d число. Был %A, часы показывали %H:%M.");
?>
