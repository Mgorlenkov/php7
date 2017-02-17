<?php ## Использование функций popen()
  $fp = popen("/usr/sbin/sendmail -t -i", "wb");
  fwrite($fp, "From: our script <script@mail.ru>\n");
  fwrite($fp, "To: sazzz21@yandex.ru\n");
  fwrite($fp, "Subject: here is myself\n");
  fwrite($fp, file_get_contents(__FILE__));
  pclose($fp);
?>
