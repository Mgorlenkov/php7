<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>13.3 Проблемы с обработкой UTF-8 в PHP</title>
</head>
<body>
<?php
    $str = "Hello world!";
    echo "{$str[2]}<br>";
    $str = "Привет мир!";
    echo "{$str[2]}<br>";

?>
</body>
</html>