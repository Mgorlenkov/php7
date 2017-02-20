<?php
  $way = $_GET['dir'].'/'.$_GET['file'];
  echo "<pre>";
  echo highlight_string(file_get_contents($way), true);
  echo "</pre>";
?>
