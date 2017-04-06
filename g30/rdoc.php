<?php ## Документирование
  /**
  * Документация для следующей
  * фунсции (после "/**" не должно быть пробелов!)
  */
  function func() {}
  $obj = new ReflectionFunction("func");
  echo "<pre>".$obj->getDocComment()."</pre>";
?>  
