<?php ## Использование func_get_args()
	function myecho() 
	{
		foreach (func_get_args() as $v) {
			echo "$v<br />\n";
		}
	}
	myecho("Меркурий", "Венера", "Земля", "Марс");
 ?>