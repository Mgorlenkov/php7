<?php ## Простой пример использования исключений
	echo "Начало программы.";
	try {
		echo "Все, что имеет начало...<br />";
		throw new Exception("Hello!");
		echo "...иммеет и конец.<br />";
	} catch (Exception $e) {
		echo "Исключения: {$e->getMessage()}<br />";
	}
	echo "Конец программы.<br />";
?>	