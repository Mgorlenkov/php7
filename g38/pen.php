<?php ## Изменение пера
  $im = imageCreate(100, 100);
  $w = imageColorAllocate($im, 255, 255, 255);
  $c1 = imageColorAllocate($im, 0, 0, 255);
  $c2 = imageColorAllocate($im, 0, 255, 0);
  imageFilledRectangle($im, 0, 0, imageSX($im), imageSY($im), $w);
  $style = array($c2, $c2, $c2, $c2, $c2, $c2, $c2, $c1, $c1, $c1, $c1);
  imageSetStyle($im, $style);
  imageSetThickness($im, 2);
  imageLine($im, 0, 0, 100, 100, IMG_COLOR_STYLED);
  header("Content-type: image/png");
  imagePng($im);
?>
