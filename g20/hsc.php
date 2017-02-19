<?php ## Модель скрипта, принимающего текст от пользователя
  if (@$_REQUEST['text'])
    echo htmlspecialchars($_REQUEST['text'])."<hr />";
?>
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST">
  <textarea name="text" rows="10" cols="60">
    <?=@htmlspecialchars($_REQUEST['text'])?>
  </textarea><br />
  <input type="submit">
</form>
