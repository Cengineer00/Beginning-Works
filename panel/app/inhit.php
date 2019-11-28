<?php

session_start();
ob_start();


function __autoload($className) //class adını alıyor
{
	$classFile = realpath(".")."/app/classes/class.".strtolower($className).".php";
	if (file_exists($classFile)) {
		require $classFile;
	}

}

Helper:: Load();

//config dosyam
require "system/config.php";

// dil dosyası çağır
require "language/".$config["default_language"]."/lang.php";



$db = new basicdb($config["db"]["host"], $config["db"]["name"], $config["db"]["user"], $config["db"]["pass"]);



?>