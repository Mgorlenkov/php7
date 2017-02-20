<?php ## Втроенное клонирование объектов
  require_once "Math/Complex2.php";
  $a = new MathComplex2(314,101);
  $x = new MathComplex2(0,0);
  $y = clone $x;
  $y->add($a);
  echo "x=", $x, ", y=", $y;
?>  
