<?php ## Создание картинки "на лету"
  $string = "Hello, world!"; //$_SERVER['QUERY_STRING'] ?? "Hello, world!";
  $im = imagecreatefromgif("button-Green.gif");
  $color = imagecolorallocate($im, 0, 0, 0);
  $px = (imageSX($im)-6.5*strlen($string))/2;
  imageString($im, 3, $px, 1, $string, $color);
  header("Content-type: image/png");
  imagePng($im);
  imageDestroy($im);
?>
