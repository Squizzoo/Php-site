<?php
function actions() {
	if(empty($_GET['actions'])) {
		$_GET['actions'] = 'home';
	}
	include_once('articles/' . $_GET['actions'] . '.php');
	$function = 'get' . ucfirst($_GET['actions']);
	return $function();
}
 ?>
