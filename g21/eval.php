<?php ## Генерация семейства функций
  for ($i = 0; $i <= 1000; $i++)
    eval("function printSquare$i() {echo $i * $i; }");
  printSquare303();
?>    
