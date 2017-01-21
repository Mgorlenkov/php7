<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Пример функции и её использования</title>
</head>
<body>
	<?php 
		// Функция принимает ассоциативный массив и создаетт несколько
		// тегов <option value="$key">$value, где  $key - очередной
		//ключ массива, а $value - очередное значениею Если задан 
		//также и второй параметр, то у соответствующего тега option
		// проставляется атрибут selected.
		function selectItems($items, $selected = 0) {
			$text = "";
			foreach ($items as $k => $v) {
				if ($k === $selected)
					$ch = " selected";
				else
					$ch = "";
				$text .= "<option$ch value='$k'>$v</option>\n";
			}
			return $text;
		}
		// Предположим, у нас есть массив имен и фамилий
		$names = [
			"Weaving" => "Hugo",
			"Goddart" => "Paul",
			"Taylor" => "Robert",
		];
		// Если был выбран элемент, вывести информацию
		if (isset($_REQUEST['surname'])) {
			$name = $names[$_REQUEST['surname']];
			echo "Вы выбрали: {$_REQUEST['surname']}, {$name} ";
		}
	 ?>
	 <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST">
	 	Выберите имя: 
	 	<select name="surname">
	 		<?=selectItems($names, $_REQUEST['surname'])?>
	 	</select> <br />
	 	<input type="submit" value="Узнать фамилию">	
	 </form>	
</body>
</html>