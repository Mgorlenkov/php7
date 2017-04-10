<?php ## Отправка почты по шаблону (плохой вариант)
	$text = "Coockies need love like everything does.";
	$tos = ["sazzz21@yandex.ru", "mgorlenkov@gmail.ru"];
	$tpl = file_get_contents("mail.eml");
	foreach ($tos as $to) {
		$mail = $tpl;
		$mail = strtr($mail, [
			"{TO}" => $to,
			"{TEXT}" => $text,
			]);
		list ($head, $body) = preg_split("/\r?nr?\n/s", $mail, 2);
		mail("", "",$body, $head);
	}
?>