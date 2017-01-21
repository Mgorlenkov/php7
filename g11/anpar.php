<?php ## Передача анонимной функции в качестве параметра

	function tabber($spaces, $echo, ...$planets)
	{
		$new = [];
		foreach ($planets as $planet) {
			$new[] = str_repeat("&nbsp", $spaces).$planet;
		}
		$echo(...$new);
	}

	$planets = ["Меркурий", "Венера", "Земля", "Марс"];
	tabber(10, function(...$str){
		foreach ($str as $v) {
			echo "$v<br />\n";
		}
	}, ...$planets);	
 ?>