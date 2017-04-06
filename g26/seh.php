<?php ## Недостатки set_error_handler()
	echo "Начало программы.<br />";
	set_error_handler("handler");
	{
		echo "Все, что имеет начало...<br />";
		trigger_error("Hello!");
		echo "...имеем и конец.<br />";
	}
	echo "Конец программы.<br />";
	function handler($num, $str)
	{
		echo "Ошибка: $str<br />";
		exit();
	}
?>	