<?php 

if (!url(1)) {
	$url[1] = "index";
}


if (!file_exists(controller("admin/".url(1)))) {
	$url[1] ="index";
}


if (!session("login")) {
	$url[1] = "login";
}


$admin["menu"]=[
	"index" => [
		"title" => "Anasayfa",
		"icon" => "fa-tachometer"
	],
	"users" => [
		"title" => "Üyeler",
		"icon" => "fa-users",
		"submenu" => [
			"users" => [
				"title" => "Kullanıcılar"
			],
			"newuser" => [
				"title" => "Kullanıcı ekle"
			]
		]
	]
];


require controller("admin/". url(1));

?>