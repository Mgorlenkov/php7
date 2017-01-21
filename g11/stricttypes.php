<?php ## Строгая типизация
	declare(strict_types = 1);
	function sum(int $fst, int $snd) : int
	{
		return $fst + $snd;
	}
	echo sum(2,2);
	echo sum(2.5, 2.5);
 ?>