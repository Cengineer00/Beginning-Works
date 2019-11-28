<?php

$sklasor = $_POST["sklasor"];

$sil =@rmdir($sklasor);

if ($sil) {
	echo "klasör başarıya silindi";
}else{
	echo "tekrar deneyiniz";
}



?>