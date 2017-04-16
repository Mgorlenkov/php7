<?php ## HTML-форма для отправки почтового сообщения
  if (!empty($_POST))
  {
    include 'header.php';
  }
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Отправка письма с вложением.</title>
  </head>
  <body>
    <table>
      <form enctype='multipart/form-data' method='post'>
        <tr>
          <td width='50%'>Кому:</td>
          <td align='right'>
            <input type='text' name='mail_to' maxlength='32'>
          </td>
        </tr>
        <tr>
          <td width='50%'>Тема:</td>
          <td align='right'>
            <input type='text' name='mail_subject' maxlength='64'>
          </td>
        </tr>
        <tr>
          <td colspan='2'>
            Сообщение:<br><textarea cols='56' rows='8' name='mail_msg'></textarea>
          </td>
        </tr>
        <tr>
          <td width='50%'>Изображение:</td>
          <td align='right'>
            <input type='file' name='mail_file' maxlength='64'>
          </td>
        </tr>
        <tr>
          <td colspan='2'>
            <input type='submit' value='Отправить'>
          </td>
        </tr>
      </form>
    </table>
  </body>
</html>
