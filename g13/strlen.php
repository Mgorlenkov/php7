<?php ## 13.4 Подсчет количества символов в строке
    $str = "Привет мир!";
    echo "В строке &quot;$str&quot; ".strlen($str)."байт<br>";
    echo "В строке &quot;$str&quot; ".mb_strlen($str)."байт<br>";