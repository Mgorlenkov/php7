<?php ## Сериализация объекта класса user
  require_once ("user.php");
  $obj = new user("nick", "password");
  echo "<pre>";
  print_r($obj);
  echo "</pre>";
  $object = serialize($obj);
  echo $object;
?>  
