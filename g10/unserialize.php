<?php ## Распаковка массива
	$phone = ['001', '949', '555', '0112'];
	$save = serialize($phone);
	echo $save;
	$phone = "bogus";
	echo count($phone);
	$phone = unserialize($save);
	echo count($phone);
 ?>