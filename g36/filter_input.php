<?php ## Фильтрация пользовательского ввода
  $value = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $result = filter_input(
    INPUT_POST,
    'search',
    FILTER_CALLBACK,
    [
      'options' => function ($value) {
                    $value = preg_replace_callback(
                      "/\b([^\s]+?)\b/u",
                      function($match) {
                        if(mb_strlen($match[1]) > 3)
                          return $match[1];
                        else
                          return '';
                      },
                      $value);
                      return strip_tags($value);
                  }
    ]
  );
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Фильтрация пользовательского ввода</title>
  </head>
  <body>
    <form method="POST">
      <input type="text" name="search" value="<?= $value?>"><br />
      <input type="submit" value="Фильтровать">
    </form>
    <?= $result; ?>
  </body>
</html>
