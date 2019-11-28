<?php
// 1. DERS
echo "<b>1. DERS<br><br><br></b>";

touch("action.php");

echo ""
?>

<form action ="action.php" method="post" enctype="multipart/form-data"
<h1>Dosya Yükle:</h1>
<p><input type="file" name="dosya" /></p>
<input type="submit" value="YÜKLE"/>
</form>

<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>


<?php
// 2. DERS
echo "<b>2. DERS<br><br><br></b>";

/*
	opendir() : dosyayı açar
	readdir() : okur
	closedir() : kapatır
*/


$dizin="dosya/";
$aç = opendir($dizin); //dizin açıldı

while ($dosya = readdir($aç)) {
	if ($dosya != "." and $dosya !="..") {
		echo "<li>{$dosya}</li>";
	}

	
}

closedir($aç);




echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>

<?php
// 3. DERS
echo "<b>3. DERS<br><br><br></b>";

/*
	mkdir() : dizin oluşturur
	rmdir() : dizin siler
	umask() : umask ayarını ayarlar
*/

if ($_POST) {
	
	$eski = umask(0);

	$oluştur = mkdir($_POST["klasor"],0777); //1. dizinin adı, 2. chmod ayarları
	umask($eski);
	if($oluştur){
		echo $_POST["klasor"]." adlı klasör başarıyla oluşturuldu";
	}



}else{
	echo '<form action="" method="post">
	<input type ="text" name="klasor"/><input type="submit" value="Oluştur"/>
	</form>';
}




touch("klasorsil.php");


	echo '<form action="klasorsil.php" method="post">
	<input type ="text" name="sklasor"/><input type="submit" value="Sil"/>
	</form>';











echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>

<?php
// 4. DERS
echo "<b>4. DERS<br><br><br></b>";


//DOSYA SİSTEM FONKSİYONLARI

/*
	touch : Dosya oluşturur
	unlink : Dosya siler
	rename : Dosyayı taşır ve yeniden adlandırır
	copy : Dosyayı kopyalar
*/

$a=2;
if ($a==1) {
	touch("yeni");
}

 @ rename("dosya2", "dosya"); //sadece adlandırır
 @ rename("yeni1.txt", "dosya/newname.txt"); //hem taşır hem de adlandırır ,2.1 nereye taşınacağı
 @ copy("klasorsil.php", "dosya/yeni2.php"); 











echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>




<?php
// 5. DERS
echo "<b>5. DERS<br><br><br></b>";

//Görüntü tanımlayıcısı oluşturma:
$tuval = imagecreatetruecolor(400, 200);//en, boy

//Renkleri belirleme:
$kirmizi = imagecolorallocate($tuval, 255, 0, 0);
$sari = imagecolorallocate($tuval, 216, 243, 42);

//Tuvali boyama:
imagefill($tuval, 0, 0, $kirmizi);

//Çizgi çizme:
imageline($tuval, 0, 0, 400, 200, $sari);

//Yazı yazma:
imagestring($tuval, 5, 360, 30, 'biznpcdegiliz', $sari);

//Çıktısını alma:
header("content-type: image/png");
imagepng($tuval);




echo "<br><br>failed";


echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>

6. ders day3.1.php

