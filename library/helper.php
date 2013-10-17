<?php

if(!function_exists("createLogMessage")){
	
	function vd($dump, $stop = false){
		var_dump($dump);
		
		if($stop == true){
			exit;
		}
	}
}