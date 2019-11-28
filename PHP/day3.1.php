<?php
ob_start();
// 6. DERS
echo "<h1>6. DERS<br><br><br></h1>";

//setcookie("çerez","#ccc",time()+3); 
setcookie("yeni","#ccc",time()+3); // cookie adı, taşıyacağı değer, ne kadar süre geçerli olacağı sn

echo $_COOKIE["yeni"];









echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>


<?php
ob_start();
// 7. DERS
echo "<h1>7. DERS<br><br><br></h1>";



?>

<form action="gonder.php" method="post" enctype="multipart/form-data">
<table cellpadding="5" cellspacing="5">
	<tr>
		<td>FTP Sunucusu:</td>
		<td><input type="text" name="ftp_sunucu" /></td>
	</tr>
	<tr>
		<td>FTP Kullanici Adi:</td>
		<td><input type="text" name="ftp_kadi" /></td>
	</tr>
	<tr>
		<td>FTP Sifre:</td>
		<td><input type="password" name="ftp_sifre" /></td>
	</tr>
	<tr>
		<td>FTP Dosya Yolu:</td>
		<td><input type="text" name="ftp_dyolu"/></td>
	</tr>
	<tr>
		<td>Dosya Secin:</td>
		<td><input type="file" name="dosya" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="FTPye Yukle" /></td>
	</tr>
</table>;
</form>

<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>

<?php
ob_start();
// 8. DERS
echo "<h1>8. DERS<br><br></h1>";

$başlangıç=microtime(TRUE);



// date() : tarihi veya zamanı almak için kullanılır (sabitleri var internette)

echo date("d.m.Y, H:i");

echo "<br>.............<br>";
// localtime() : zamanı ayrıntılı gösteriyor

$zaman= localtime(time(), false);//time() şimdiki zamanı belirtir    
print_r($zaman); //print_r dizideki değerleri yazar
echo $zaman[5]; //true iken çalışmıyo

echo "<br>.............<br>";
//getdate() : saniye, dakika, saat.... ve unix değerini yani sabit bir değeri veriyor

$zaman = getdate();
print_r($zaman);

echo "<br>.............<br>";
//setlocale() : türkçe yapar( dil değiştirir)

setlocale(LC_TIME,"tr_TR", "tr", "turkish");//bende çalışmıyo


//strftime() : yine komutlar var

echo strftime("%d %B %Y");

echo "<br>.............<br>";

//date_default_timezone_get() : mevcut zaman dilimini gösterir
//date_default_timezone_set() : yerel zamanı ayarlar
//date.timezone
echo date_default_timezone_get();

date_default_timezone_set("Europe/Istanbul");

echo "<br>".date("d.m.Y, H:i");
echo "<br>".date_default_timezone_get();

echo "<br>.............<br>";
//microtime() : sayfa yüklenme süresini hesaplar

$bitiş=microtime(TRUE);

$sonuc= $bitiş-$başlangıç;

echo "Bu sayfa {$sonuc} salisede yüklenmiştir.";


echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>



<?php
ob_start();
// 7. DERS
echo "<h1>7. DERS<br><br></h1>";

//session tarayıcının kapatılmasıyla silinir
//cookie bizim verdiğimiz sre sonunda silinir

session_start();

$_SESSION["üye bilgileri"]= array("uye_id"=>1,
								"uye_kadi"=>"Killerciq",
								"uye_eposta"=> "asaas_@hotmail.com");

echo $_SESSION["üye bilgileri"]["uye_eposta"];

echo "<br>.............<br>";

//cookiede dizi oluşturma
setcookie("üye_bilgileri2[uye_id]","1");
setcookie("üye_bilgileri2[uye_kadi]","Killerciq");
setcookie("üye_bilgileri2[uye_eposta]","asaas_@hotmail.com");

echo $_COOKIE["üye_bilgileri2"]["uye_kadi"];

echo "<br>";



echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>

