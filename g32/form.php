<!DOCTYPE html>
<html lang='ru'>
  <head>
    <title>Форма для отправки данных методом POST</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="handler.php" method="POST">
      Имя: <input name="first_name" type="text" /><br />
      Фамилия: <input name="last_name" type="text" /><br />
      <input type="submit" value="Отправить" />
    </form>
  </body>
</html>
