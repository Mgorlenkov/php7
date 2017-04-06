<?php ## Чтение содержимого каталога
	$cat = dir(".");
	while(($file = $cat->read()) !== false) {
		echo $file."<br />";
	}
	$cat->close();
?>	