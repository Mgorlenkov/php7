<?php ## "Эмуляция" браузера
  $fp = fsockopen("localhost", 80);
  fputs($fp, "GET / HTTP/1.1\r\n");
  fputs($fp, "Host: localhost\r\n");
  fputs($fp, "Connection: close\r\n");
  fputs($fp, "\r\n");
  echo "<pre>";
  while (!feof($fp))
    echo htmlspecialchars(fgets($fp, 1000));
  echo "</pre>";
  fclose($fp);
?>
