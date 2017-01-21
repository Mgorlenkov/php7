<?php ## Передача пораметров по ссылке
	function increment(&$a) {
		echo "Текущее значение: $a<br />";
		$a++;
		echo "После увеличения: $a<br />";
	}
	# ...
	$num = 10;
	echo "Начальное значение: $num<br />";
	increment($num);
	echo "После вызова функции: $num<br />";
 ?> 