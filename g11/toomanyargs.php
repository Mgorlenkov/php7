<?php ## Использование ...
	function toomanyargs($fst, $snd, $thd, $fth)
	{
		echo "Певый параметр: $fst<br />";
		echo "Второй параметр: $snd<br />";
		echo "Третий параметр: $thd<br />";
		echo "Четвертый параметр: $fth<br />";
	}
	$planets = ["Меркурий", "Венера", "Земля", "Марс"];
	toomanyargs(...$planets);
 ?>