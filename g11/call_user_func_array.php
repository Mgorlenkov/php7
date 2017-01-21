<?php ## Использование call_user_func_array()
	function myecho(...$str)
	{
		foreach ($str as $v) {
			echo "$v<br />\n";
		}
	}
	function tabber($spaces, ...$planets)
	{
		$new = [];
		foreach ($planets as $planet) {
			$new[] = str_repeat("&nbsp", $spaces).$planet;
		}
		call_user_func_array("myecho", $new);
	}
	tabber(10, "Меркурий", "Венера", "Земля", "Марс");
 ?>