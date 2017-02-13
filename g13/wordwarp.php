<?php ## Использование wordwarp()
	function cite($ourText, $maxlen = 60, $prefix = "> ") {
		$st = wordwrap($ourText, $maxlen - strlen($prefix), "\n");
		$st = $prefix.str_replace("\n", "\n$prefix", $st);
		return $st;
	}
	echo "<pre>";
	echo cite ("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur voluptatum assumenda repudiandae qui dicta eum, exercitationem maiores cumque sapiente quia, impedit animi quo debitis? Laboriosam, ipsam consequatur debitis necessitatibus id.", 20);
	echo "</pre>";
	?>