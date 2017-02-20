<?php ## Сериализация объекта $obj класса cls
  require_once ("cls.php");
  $obj = new cls(100);
  $text = serialize($obj);
  $fd = fopen("text.obj", "w");
  if(!$fd) exit("Невозможно открыть файл.");
  fwrite($fd, $text);
  fclose($fd);
?>  
