<?php ## Выражения
	
	$action = array("left" => "survive", "right" => "kill'em all");
	echo "Выбранный элемент: {$action['left']} <br>";
	//echo "Выбранный элемент: $action['left'] <br>";
	echo "Выбранный элемент: $action[left] <br>";

	/* не работает? Абсолютный путь?
	$st = `command.com/c dir`;
	echo "<pre>$st</pre>";
	*/
	
  ?>