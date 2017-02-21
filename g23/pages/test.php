<?php ## Проверка виртуальных методов
  require_once "StaticPage.php";
  $id = 3;
  $page = new StaticPage($id);
  $page->render();
  echo $page->id($id);
?>  
