<?php ## Возврат ссылки
	$a = 100;
	function &r() 
	{
		global $a;
		return $a;
	}
	$b =& r();
	$b = 0;
	echo $a;
 ?>