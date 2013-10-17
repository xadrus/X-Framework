<?php

class indexcontroller{
	
	public function __construct(){
		
	}
	
	public function index(){
		
		$view = new Template();
		
		$view->setView('index');
		$view->loadView();

	}
}