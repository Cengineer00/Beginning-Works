<?php  

function controller($name){
	return controller."/".$name.".php";
}

function view($name){
	return view."/".$name.".php";
}

function __($langCode){
	global $lang;
	if (isset($lang[$langCode])) 
		return $lang[$langCode];
	return $langCode;
	
}



?>