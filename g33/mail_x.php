<?php ## Отправка почты по шаблону (без кодирования)
	include_once "lib/mailx.php";
	$text = "Coockies need love like everything does.";
	$tos = ["a@mail.ru", "b@mail.ru"];
	$tpl = file_get_contents("mail.eml");
	foreach ($tos as $to) {
		$mail = $tpl;
		$mail = strtr($mail, [
			"{TO}" => $to,
			"{TEXT}" => $text,
			]);
		mailx($mail);
	}
?>