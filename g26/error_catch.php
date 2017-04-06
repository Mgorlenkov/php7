<?php ## Попытка отловить исключение Error
	try {
		$str = "Hello, world!";
		$str[] = 4;
	} catch (Error $e) {
		echo "Обнаружена ошибка приведения типа";
	} 
?>	