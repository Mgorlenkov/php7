<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Использование htmlspecialchars()</title>
  </head>
  <body>
    <?php 
        $exsample = <<<EXAMPLE
          <?php
          echo "Hello, world";
          ?>
        EXAMPLE;
        echo htmlspecialchars($example);
    ?>
  </body>
</html>
