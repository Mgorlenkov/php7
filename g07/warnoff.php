<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Отключение навязчивого предупреждения</title>
	<link rel="stylesheet" href="css/test.css">
</head>
<body><!-- Отключение навязчивого предупреждения --> 

<form action="warnoff.php">
<input type="submit" name="doGo" value="Click!">	
</form>
<?php ## Отклчение предупреждения
	//В массиве $_REQUEST всегда содержатся пришедшие из формы данные
	if (@$_REQUEST['doGo']) echo "Вы нажали кнопку!";

	//Правильное написание:
	//if (isset($_REQUEST["doGo"]) ?: false) echo "Кнопка нажата!";
	//if ($_REQUEST["doGo"] ?? false) echo "Кнопка нажата!";    - PHP 7
 ?>
 </body>
 </html>