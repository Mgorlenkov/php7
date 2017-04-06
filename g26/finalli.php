<?php ## Инструкция try во вложенных функциях
	function eatThis() {throw new Exception("bang-bang!"); }
	function hello() 
	{
		echo "Всё, что имеет начало, ";
		try {
			eatThis();
		} finally {
			echo "имеет и конец.";
		}
		echo "Это никогда не будет напечатано!";
	}
	hello();
?>	