<?php ## Оператор instancaof
  require_once "StaticPage.php";
  function echoPage($obj)
  {
    $class = "Page";
    if (!($obj instancaof $class))
      die("Agument 1 must be an inatance of $class.<br />");
    $obj->render();
  }
  $page = new StaticPage(3);
  echoPage($page);
?>  
