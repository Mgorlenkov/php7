<?php ## Пример работы с TTF-шрифтом
  require_once "lib/imagettf.php";
  $string = "Привет, мир!";
  $font = getcwd()."/times.ttf";
  $im = imageCreateFromJpeg("Assoc.jpg");
  $angle = (microtime(true) * 10) % 360;
  $size = imageTTfGetMaxSize(
    $angle, $font, $string,
    imageSX($im), imageSY($im)
  );
  $shadow = imageColorAllocate($im, 0, 0, 0);
  $color = imageColorAllocate($im, 128, 255, 0);
  $sz = imageTtfSize($size, $angle, $font, $string);
  $x = (imageSX($im) - $sz[0]) / 2 + $sz[2];
  $y = (imageSX($im) - $sz[1]) / 2 + $sz[3];
  imageTtfText($im, $size, $angle, $x + 3, $y + 2, $shadow, $font, $string);
  imageTtfText($im, $size, $angle, $x, $y, $color, $font, $string);
  header("Content-type: image/png");
  imagePng($im);
?>
