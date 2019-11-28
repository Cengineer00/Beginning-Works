<?php 

//controller

if (post("submit")) {
	$data["user_name"] = post("user_name");
	$data["user_url"] = permalink($data["user_name"]);

	if (!$data["user_url"]) {
		$error = "Kullanıcı adını boş bırakma!";
	}else{

		//veritabanına ekle
		$query = $db->insert("users")
		->set($data);

		if ($query) {
			header("Location:". site_url("profil/".$data["user_url"]));
		}else{
			$error = "Kullanıcı kayıt edilemedi.";
		}

	}
}

require view("kayit");



?>