<?php ## Модель циклического процесса с исключительной блокировкой
  $file = "file.txt";
  //создаем пустой файл, если его еще нет.
  // Если файл сущесттвует, то это его не разрушит
  fclose(fopen($file, "a+b"));
  $f = fopen($file, "r+b") or die("Не могу открыть файл!");
  while (true) {
    flock($f, LOCK_EX);
    //....
    fflush($f);
    flock($f, LOCK_UN);
    sleep(10);
  }
  fclose($f);
?>  
