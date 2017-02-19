<?php ## Календарь на текущий месяц
  function makeCal($year, $month) {
    $wday = date('N');
    $n = - ($wday - 2);
    $cal = [];
    for ($y = 0; $y < 6; $y++) {
      $row = [];
      $notEmpty = false;
      for ($x = 0; $x < 7; $x++, $n++) {
        if (checkdate($month, $n, $year)) {
          $row[] = $n;
          $notEmpty = true;
        } else {
          $row[] = "";
        }
      }
      if (!$notEmpty) break;
      $cal[] = $row;
    }
    return $cal;
  }
  $now = getdate();
  $cal = makeCal($now['year'], $now['mon'] - 1);
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Календарь на текущий месяц</title>
  </head>
  <body>
    <table border='1'>
      <tr>
        <td>Пн</td>
        <td>Вт</td>
        <td>Ср</td>
        <td>Чт</td>
        <td>Пт</td>
        <td>Сб</td>
        <td style="color:red">Вс</td>
      </tr>
      <?php foreach ($cal as $row) {?>
        <tr>
          <?php foreach ($row as $i => $v) {?>
            <td style="<?= $i == 6 ? 'color:red' : '' ?>">
              <?= $v ? $v : "&nbsp;" ?>
            </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
  </body>
</html>
