<?php ## Старый способ создания конструкторов
  class Test
  {
    function Test($msg) { echo "Вызван конструктор: $msg"; }
  }
  $obj = new Test("hello");
?>  
