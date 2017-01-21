<?php ## Условные операции
	$x = -17;
	$x = $x < 0 ? -$x : $x;
	echo $x;
	echo "<br>";
	unset($x);
	$x = $x ?: 1;
	echo $x;
 ?>