<?php ## Увеличение картинки со сглаживанием
  $from = imageCreateFromJpeg("assoc.jpg");
  $to = imageCreateTrueColor(2000, 2000);
  imageCopyResampled(
    $to, $from, 0, 0, 0, 0, imageSX($to), imageSY($to),
    imageSX($from), ImageSY($from)
  );
  header("Content-type: image/jpeg");
  imageJpeg($to);
?>
