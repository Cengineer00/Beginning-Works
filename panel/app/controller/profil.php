<?php

if ($url[1] == "ekle"){

	$query = $db-> insert("users")
		->set(array(
			"user_name" => url(2),
			"user_url" => url(2),


		));

		if ($query) {
			echo "uye eklendi";
		}else{
			echo "uye eklenemedi";
		}

}else{

	$urll = url(1);
	
	$query = $db-> from("users")
		->where("user_url", $urll,)
		->first(true);

		if ($query) {
			echo "hoşgeldin, ".$query["user_name"] ;
		}else {
			echo "user not found";
		}
			
}


?>