<?php
function plugin() {
	foreach (glob('functions/*.php') as $plugin) {
		include_once ($plugin);
	}
	return $plugin;
}
 ?>
