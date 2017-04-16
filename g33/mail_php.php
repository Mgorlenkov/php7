<?php ## Отправка почты с использованием активного шаблона
  include_once 'lib/mailx.php';
  include_once 'lib/mailenc.php';
  include_once 'lib/template.php';
  $text = "Well, now, ain't this a surprise?";
  $tos = ["Пупкин Василий <poup@mail.ru>, Иванов <b@mail.ru>"];
  $a = 1;
  foreach ($tos as $to) {
    $mail = template("mail.php.eml", [
      "to" => $to,
      "text" => $text,
    ]);
    $mail = mailenc($mail);
    mailx($mail);
  }
?>
