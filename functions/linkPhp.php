<?php
function bootstrap($dir) {
	$plugin = '';
	$link = glob($dir.'/*.php');

	for ($i = 0; $i < count($link); $i++) {
		$plugin .= '<link rel=" href="'.$link[$i].'"></br>';
	}
	return $plugin;
}
 ?>
