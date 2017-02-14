<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Передача JSON-данных</title>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="/g14/json_index.js"></script>
  </head>
  <body>
    <p id='js-hello'>Здравствуйте</p>
    <form action="/g14/json_answer.php" methot="GET">
      <p>Имя: <input type="text" name="name" value="" /></p>
      <p>Фамилия: <input type="text" name="family" value="" /></p>
      <p><input type="submit" value="Представится"><p>
    </form>
  </body>
</html>
