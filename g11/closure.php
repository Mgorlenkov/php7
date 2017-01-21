<?php ## Замыкания
	$messege = "Работа не может быть продолжена из-за ошибок:<br />";
	$check = function(array $errors) use ($messege)
	{
		if (isset($errors) && count($errors) > 0) {
			echo $messege;
			foreach ($errors as $error) {
				echo "$error<br />";
			}
		}
	};

	$check([]);
	//...
	$errors[] = "Заполните имя пользователя";
	$check($errors);
	//...
	$messege = "Список требований";
	$errors = ["PHP", "MySQL", "memcache"];
	$check($errors);
 ?>