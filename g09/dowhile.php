<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Модель сценария обработки формы</title>
</head>
<body>
	<?php 
		$WasError = 0; //индикатор ошибки - если не 0, то была ошибка
		//Если нажали кнопку Submit (С именем $doSubmit)
		if (isset($_REQUEST['doSubmit'])) do {
			//Проверка ввода данных
			if ($_REQUEST['reloads'] != 1+1+7) {$WasError = 1; break; }
			if ($_REQUEST['loader'] != "source") { $WasError = 1; break; }
			// и тд.
			echo "Вы внимательный человек, поздраяляем! <br>";
			// можно записать данные в файл.
			exit();
		} while (0);
		// Произошла ли ошибка?
		if ($WasError) {
			echo "Вы ответили неверно, попробуйте еще раз.";
		}
	 ?>
	<!-- Выводим форму, через которую пользователь будет запускать этот сценарий, и, возможно, отбображаем соотбщение об ошибке в случае, если $WarError != 0. -->
	<form action="<?=$_SERVER['REQUEST_URL']?>" method="POST">
		Число перезагрузок: <input type="text" name="reloads"><br>
		Загрузочная программа: <input type="text" name="loader"><br>
		<input type="submit" name="doSubmit" value="Ответить на вопросы">
	</form>
	</body>
</html>