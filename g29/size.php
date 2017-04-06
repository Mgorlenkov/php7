<?php ## Использование методов класса DirectoryIterator
  $dir = new DirectoryIterator('.');
  foreach($dir as $file) {
    if ($file->isfile()) {
      echo $file." ".$file->getSize()."<br />";
    }
  }
?>  
