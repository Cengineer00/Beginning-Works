<?php  

$config = array();


$config["db"]= [
	"host" =>"78.46.3.156",
	"name" =>"xmpatj_db21",
	"user" =>"xmpatj_21",
	"pass" =>"CZ7Z98d2Qc8YNCBN"
];

$config["default_language"] = "en";



define("dir", realpath("."));
define("controller", dir. "/app/controller");
define("view", dir. "/app/view");
define("url","http://".$_SERVER["SERVER_NAME"]."/Orhun/panel");




?>