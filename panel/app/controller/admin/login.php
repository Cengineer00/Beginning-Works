<?php 

if (post("submit")) {
	$username = post("username");
	$password = post("password");

	if (!$username || !$password) {
		$error = "Tüm alanları doldurup tekrar deneyin";
	}else{
		$password = md5($password);

		$row = $db->from("users")
			->where("user_name", $username)
			->where("user_password", $password)
			->where("user_rank", 1)
			->first(true);

		if ($row) {
			
			session("login", true);
			session("username", $row["user_name"]);
			session("user_id", $row["user_id"]);

			header("Location:". (isset ($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : admin_url()));

		}else{
			$error = "Yönetici girişi yapamıyorsunuz";
		}
	}
}




require view("admin/login");
?>