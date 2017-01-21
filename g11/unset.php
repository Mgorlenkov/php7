<?php ## Особенности инструкции global
	$a = 100;
	function test() {
		global $a;
		unset($a);
	}
	test();
	echo $a;

 	function deleter() { unset($GLOBALS['a']);}
	$a = 100;
	deleter();
	echo $a;
?>