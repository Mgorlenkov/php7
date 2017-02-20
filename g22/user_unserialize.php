<?php ## Восстановление объекта
  require_once ("user.php");
  $object = 'O:4:"user":3:{s:4:"name";s:4:"nick";'.
            's:8:"referrer";s:23:"/g22/user_serialize.php";'.
            's:4:"time";i:1487579771;}';
  $obj = unserialize($object);
  echo "<pre>";
  print_r($obj);
  echo "</pre>";
?>  
