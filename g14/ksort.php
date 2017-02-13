<?php ## Сортировка массива по ключам
	$A = [
		"c" => "Zero",
		"a" => "Weapon",
		"d" => "Alpha",
		"b" => "Processor"
	];
	ksort($A);
	print_r($A);
	?>