<?php ## Использование метода diff()
	$date = new DateTime("2016-01-01 00:00:00");
	$nowdate = new DateTime();
	$interval = $nowdate->diff($date);
	echo $date->format("d-m-Y H:i:s")."<br />";
	echo $nowdate->format("d-m-Y H:i:s")."<br />";
	echo $interval->format("%Y-%m-%d %H-%S")."<br />";
	echo "<pre>";
	print_r($interval);
	echo "</pre>";
?>	