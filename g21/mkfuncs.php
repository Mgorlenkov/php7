<?php ## Генерация квазианонимных функций
  $squarers = [];
  for ($i = 0; $i <= 1000; $i++) {
    $id = uniqid("F").$i;
    eval("function $id() { echo $i * $i; }");
    $squarers[] = $id;
  }
  $squarers[303]();
?>
