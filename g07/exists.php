<?php 
	$x = null;
	$y = null;
	$z = 3;
	var_dump($x ?? $y ?? $z); //int(3) PHP 7
 ?>