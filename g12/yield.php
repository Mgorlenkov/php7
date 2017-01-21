<?php ## Простейший генератор yield
	function generator()
	{
		echo "Перед первым yield<br />";
		yield 1;
		echo "Перед вторым yield<br />";
		yield 2;		
		echo "Перед третьим yield<br />";
		yield 3;
		echo "После третьего yield<br />";
	}
	foreach(generator() as $i) {
		echo "$i<br />";
	}
 ?>