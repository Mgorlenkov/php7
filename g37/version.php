<?php ## Извлечение текущей версии
  require_once ('connect_db.php');

  $query = "SELECT VERSION() AS version";
  $ver = $pdo->query($query);

  $version = $ver->fetch();
  echo $version['version'];
?>
