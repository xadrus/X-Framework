<?php 
class AutoLoader{
	
	public function __construct(){
		$this->setReporting();
		$this->uriMVC();
		$this->loadDb(DB_HOST, DB_USER,DB_PASSWORD, DB_NAME);
		
	}
	
	private function setReporting() {
		if (DEVELOPMENT_ENVIRONMENT == true) {
			error_reporting(E_ALL);
			ini_set('display_errors','On');
		} else {
			error_reporting(E_ALL);
			ini_set('display_errors','Off');
			ini_set('log_errors', 'On');
			ini_set('error_log', ROOT.DS.'tmp'.DS.'logs'.DS.'error.log');
		}
	}
	
	public function uriMVC(){
	global $url;

	$urlArray = array();
	$urlArray = explode("/",$url);

  
  if(count($urlArray) > 1){
	  $controller = $urlArray[0];
	  array_shift($urlArray);
	  $action = $urlArray[0];
	  array_shift($urlArray);
	  $queryString = $urlArray;
  } else {
    $controllerName = 'indexcontroller';
		$controller = 'indexcontroller';
		$defaultController = new $controller();
		$action = "index";
	  $queryString = array();
  }
  
	$controllerName = $controller;
	$controller = ucwords($controller);
	$model = rtrim($controller, 's');
	
	if(empty($controller) || empty($action)){
	if(!file_exists(APPLICATION_CONTROLLER_PATH.$controller.'.php')){
		
		if(file_exists(APPLICATION_CONTROLLER_PATH.'indexcontroller.php')){
			
			
		}
	}
	}
	$dispatch = new $controller($model,$controllerName,$action);

	if ((int)method_exists($controller, $action)) {
		call_user_func_array(array($dispatch,$action),$queryString);
	} else {
		//Default auf Index Controller TODO
		$controllerName = 'indexcontroller';
	  $controller = ucwords('indexcontroller');
	  $model = rtrim($controller, 's');
	  $action = 'index';
		call_user_func_array(array($dispatch,$action),$queryString);
	}
		
		
	}
	
	public function loadDb($host, $username, $password, $db){
		$db = new Db($host, $username, $password, $db);
		
	}
}

/**
 * 
 * function callHook() {
	global $url;

	$urlArray = array();
	$urlArray = explode("/",$url);

	$controller = $urlArray[0];
	array_shift($urlArray);
	$action = $urlArray[0];
	array_shift($urlArray);
	$queryString = $urlArray;

	$controllerName = $controller;
	$controller = ucwords($controller);
	$model = rtrim($controller, 's');
	$controller .= 'Controller';
	
	$dispatch = new $controller($model,$controllerName,$action);

	if ((int)method_exists($controller, $action)) {
		call_user_func_array(array($dispatch,$action),$queryString);
	} else {
		
	}
}
 */