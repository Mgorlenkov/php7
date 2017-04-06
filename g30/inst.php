<?php ## Создание объекта неизвестного класса
  require_once "lib/Complex2.php";
  $className = "MathComplex2";
  $obj = new $className(6, 1);
  echo "Созданный объект: $obj";
?>  
