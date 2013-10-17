<?php
require_once (ROOT . DS . 'config' . DS . 'config.php');

function __autoload($klassenname) {
	$pfad = LIBRARY_PATH . $klassenname . '.php';
	$appPfad = APPLICATION_CONTROLLER_PATH. $klassenname. '.php';
	
	if (file_exists($pfad)) {
    require_once $pfad;
	} else if(file_exists($appPfad)){
		require_once $appPfad;
	} else {
		return false;
	}
}

$autoLoader = new AutoLoader();
