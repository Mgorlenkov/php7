<?php ## Использование функции flieperms()
  $perms = fileperms("text.txt");
  echo decoct($perms);
  echo decbin($perms);
?>  
