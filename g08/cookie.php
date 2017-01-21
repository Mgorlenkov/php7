<?php ## Работа с массивом $_COOKIE
	$count = 0;
	if (isset($_COOKIE['count'])) $count = $_COOKIE['count'];
	$count++;
	setcookie("count", $count, 0x7FFFFFFF, "");
	echo $count;
 ?>