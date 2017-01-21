<?php ## Возврат массива
	function silli()
	{
		return [1, 2, 3];
	}
	$arr = silli();
	var_dump($arr);
	list($a, $b, $c) = silli();
	// Допустимо начиная с PHP 5.4
	echo silli() [2];
 ?>