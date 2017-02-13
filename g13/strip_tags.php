<?php ## Удаление HTML-тегов из строки
	$st =<<<HTML
		<b>Жирный текст</b>
		<tt>Моноширный текст</tt>
		<a href='http://www.dklab.ru'>Ссылка</a>
		a<x && y>d
HTML;
	echo "исходный текст: $st";
	echo "<hr>После удаления тегов: ".strip_tags($st, "<tt><b>");
	?>	