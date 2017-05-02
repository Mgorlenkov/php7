<?php ## Автоопределение MIME-типа изображения
  $fnames = glob("*.{gif,jpg,png}", GLOB_BRACE);
  $fname = $fnames[mt_rand(0, count($fnames)-1)];
  $size = getimagesize($fname);
  header("Content-type: {$size['mime']}");
  echo file_get_contents($fname);
?>
