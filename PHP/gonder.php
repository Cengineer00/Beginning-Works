<?php

//form bilgilerini alma
$ftp_server = $_POST["ftp_sunucu"];
$ftp_kadi = $_POST["ftp_kadi"];
$ftp_sifre = $_POST["ftp_sifre"];
$ftp_dyolu = $_POST["ftp_dyolu"];
$gecici_dosya = $_FILES["dosya"]["tmp_name"];
$dosya_uzantisi = substr($_FILES["dosya"]["name"], -4);
$dosya_adi = rand(1,9999).$dosya_uzantisi;

//ftpye bağlanma
$baglan = @ftp_connect($ftp_server);
if ($baglan) {
	
	//ftpye giriş yapma
	$giris = @ftp_login($baglan, $ftp_kadi, $ftp_sifre);
	if ($giris) {
		
		//Dosyaları FTPye yükleme
		$yukle = @ftp_put($baglan,$ftp_dyolu."/".$dosya_adi,$gecici_dosya, FTP_BINARY);
		if ($yukle){
			echo "FTPye ".$dosya_adi." adli dosyaniz basariyla yuklendi..";
		}else{
			echo "Dosya yükleme işlemi başarısız";
		}


	}else{
		echo "Ftp girişi başarısız!!";
	}

}





?>