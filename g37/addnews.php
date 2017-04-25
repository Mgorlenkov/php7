<?php ## Добавление новостного сообщения в базу данных
  require_once ("connect.php");

  try {
    if (empty($_POST['name'])) exit ('Не заполнено поле "Название"');
    if (empty($_POST['content'])) exit ('Не заполнено поле "Содержимое"');

    $query = "INSERT INTO news VALUES (NULL, :name, NOW())";
    $news = $pdo->prepare($query);
    $news->execute(['name' => $_POST['name']]);

    $news_id = $pdo->lastInsertId();

    $query = "INSERT INTO news_contents
              VALUES (NULL, :content, :news_id)";
    $news = $pdo->prepare($query);
    $news->execute(['content' => $_POST['content'], 'news_id' => $news_id]);

    header("Location: news.html");
  } catch (PDOException $e) {
    echo "Ошибка выполнения запроса:" . $e-getMessage();
  }
?>
