<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>PHP 7 lessons</title>
	<link rel="stylesheet" href="css/test.css">
</head>
<body>
<h1>PHP 7</h1>

<?php
$dirlist = glob("g*", GLOB_ONLYDIR); // Каждая глава в отдельной папке g09, g10, g11 и т.д.
foreach ($dirlist as $dir) {
	echo '<div class="block_2">';
	$head = file('./head.dat');  // Файл с заголовками глав формата: "g09|Глава 9: Конструкции языка"
	foreach($head as $v){
		$val = explode('|', $v);
		if ($dir == $val[0])
			echo "<h2>" . $val[1] . "</h2><ul>";
	}
	$f = scandir($dir);
	foreach ($f as $file) {
		if(preg_match('/\.(php)/', $file)) {
			$fstr = file($dir . '/' . $file);
			if (preg_match('/\#{2}/', $fstr[0])) { // В первой строчке большинства файлов двумя символами решетки закомментировано название листинга, типа: "<?php ## Отладочные функции"
				echo "<li><a href=". $dir ."/". $file .">". substr($fstr[0], 9) ."</a><a href=\"source.php\">S</a><br></li>";
			} else {
				foreach ($fstr as $str) {
					if (preg_match('|<title>(.+)</title>|isU', $str, $arr)) {
						echo "<li><a href=". $dir ."/". $file .">". $arr[1] ."</a><br></li>";
					}
				}

			}
		}
	}
	echo "</ul></div>";
}

?>
</body>
</html>
