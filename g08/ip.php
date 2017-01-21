<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Вывод ip-адреса и броузера пользователя</title>
</head>
<body>
	Ваш ip-адрес: <?= $_SERVER['REMOTE_ADDR'] ?> <br>
	Ваш броузер: <?= $_SERVER['HTTP_USER_AGENT'] ?>
</body>
</html>