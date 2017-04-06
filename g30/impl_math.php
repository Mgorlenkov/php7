<?php ## Неявный вызов метода
  require_once "lib/Complex2.php";
  $addMethod = "add";
  $a = new MathComplex2(101,303);
  $b = new MathComplex2(0,6);
  call_user_func([$a, $addMethod], $b);
  echo $a;
?>
