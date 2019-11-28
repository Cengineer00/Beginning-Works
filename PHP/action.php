<?php

/*
$_FILES[]
tmp_name : dosyanın geçici olarak bulunduğu konum
name : dosyanın adı
size : byte cinsinden dosyanın büyüklüğü
type : mime tipi

is_uploaded_file()
move_uploaded_file()
*/

$maxBoyut = 5000000; //5mb
$dosyaUzantisi = substr($_FILES["dosya"]["name"], -4,4); //dosya adının son 4 harfi yani uzantısını substr etme
$dosyaAdi = rand(0,99999999).$dosyaUzantisi; //rand : belirtilen aralıkta random sayı üretme
$dosyaYolu = "dosya/".$dosyaAdi;

if ($FILES["dosya"]["size"]>$maxBoyut) {
	echo "Dosya boyutu en fazla <b>5mb</b> olabilir.";
}else {

	$d= $_FILES["dosya"]["type"];
	if ($d == "image/jpeg" || $d == "image/png" || $d == "image/gif") {
		
		if (is_uploaded_file($_FILES["dosya"]["tmp_name"])) {
			
			$taşı= move_uploaded_file($_FILES["dosya"]["tmp_name"], $dosyaYolu);
		if ($taşı) {
			echo $dosyaAdi." adlı dosya başarıyla taşındı <br>
			<img src = 'http://3mpati.com/upload/{dosyaYolu}' alt=''/>";

		}else{
			echo "Dosya taşınırken bir sorun oluştu.";
		}


		}else {
			echo "Dosya yüklenirken bir sorun oluştu.";
		}




	}else {
		echo "Dosya <b> gif, png, ya da jpg</b> formatında olmalıdır.";
	}
}








?>