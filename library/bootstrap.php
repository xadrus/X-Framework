<?php
require_once (ROOT . DS . 'config' . DS . 'config.php');

function __autoload($klassenname) {
	$pfad = LIBRARY_PATH . $klassenname . '.php';

	if (file_exists($pfad)) {
    require_once $pfad;
	} else {
		return false;
	}
}

$autoLoader = new AutoLoader();
