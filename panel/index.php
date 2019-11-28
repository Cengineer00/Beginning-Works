<?php 

//htaccess   http://3mpati.com/Orhun/panel/kategoriler = http://3mpati.com/Orhun/panel/index.php?url=kategoriler/ 


require 'app/inhit.php';

$url = get("url");

$url = array_filter(explode("/", $url)); // sondaki slash sayılmıyor

if (!isset($url[0])) {
	$url[0] = "index";
}
if (!file_exists(controller($url[0]))) {
	$url[0] = "index";
}

require controller($url[0]);

?>