<?php ## Переменное число параметров (современный способ)
	function myecho(...$planets) 
	{
		foreach ($planets as $v) {
			echo "$v<br />\n";
		}
	}
	myecho("Меркурий", "Венера", "Земля", "Марс");
 ?>