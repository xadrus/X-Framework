<?php
class Template {
	 
	
	public $templateDir = PUBLIC_VIEW_PATH;
	
	public $viewData = array();
	
	public $currentViewFile = NULL;
	
	public function __construct(){
		
	}
	
	
	public function setView($viewFile){
		if(!file_exists($this->templateDir.$viewFile.'.php')){
			echo "view nicht gefunden";
		} else {
			$this->currentViewFile = $viewFile;
		}
	}
	
	
	public function addViewData($data){
		$this->$viewData = $data;
	}
	
	public function loadView(){
		//echo $this->currentViewFile;exit;
		//echo $this->templateDir.$this->currentViewFile.'.php';
		if(!file_exists($this->templateDir.$this->currentViewFile.'.php')){
			echo "view file existiert nicht";
		} else {
			include($this->templateDir.$this->currentViewFile.'.php');
		}
	}
	
}