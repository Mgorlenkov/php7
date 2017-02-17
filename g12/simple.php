<?php ## Простейший генератор
	define("START_TIME", microtime(true));
	function simple($from = 0, $to = 100)
	{
		for($i = $from; $i < $to; $i++) {
			echo "значение = $i<br />";
			yield $i;
		}
	}
	foreach(simple() as $val) {
		echo "квадрат = ".($val * $val). "<br />";
		if ($val >= 50) break;
	}
	printf("Время работы скрипта: %.5f c", microtime(true) - START_TIME);
 ?>
