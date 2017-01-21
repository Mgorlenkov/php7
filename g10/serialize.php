<?php ## Упаковка массива
	$A = ["a" => "aa", "b" => "bb", "c" => ["x" => "xx"]];
	$st = serialize($A);
	echo $st;
 ?>