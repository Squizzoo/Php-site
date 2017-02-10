<?php
function bootstrap($dir) {
	$css = '';
	$link = glob($dir.'/*.css');

	for ($i = 0; $i < count($link); $i++) {
		$css .= '<link rel="stylesheet" type="text/css" href="'.$link[$i].'">';
	}
	return $css;
}
 ?>
