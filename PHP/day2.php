<?php
// 1. DERS
echo "<b>1. DERS<br><br><br></b>";

/*
$ac = fopen("metinbelgesi.txt", "a");

if (!$ac) {
	echo "dosya açılamadı";
}

fwrite($ac, "deneme\n");
fclose($ac);

file_put_contents("mb2.txt", "yazı\n",FILE_APPEND);//FILE_APPEND == dosyanın sonuna eklemeyi sağlar

$x= file_get_contents("metinbelgesi.txt");

file_put_contents("mb2.txt", $x, FILE_APPEND);
*/

//fgets == satır okuma
//fgetss == kodsuz okuma
echo "1<br>";
$ac = fopen("metinbelgesi.txt", "r");
$oku = fgets($ac, 999); // 2.si kaç satır okuyacağı
echo $oku;
$oku = fgetss($ac, 999, "<b>"); // bu şekilde okur (<b>)
echo $oku."<br>";

//fgetcsv

//readfile == açıp okuyup yazdırır
echo "2<br>";

readfile("metinbelgesi.txt");


//fpassthru == okuyup yazdırır
echo "<br>3<br>";

$ac = fopen("metinbelgesi.txt", "r");
echo"<br>";
fpassthru($ac);

//file_get_contents == okur
echo "<br>4<br>";

echo file_get_contents("metinbelgesi.txt");

//file_exists
echo "<br>5<br>";
if (file_exists("mb2.txt")) {
	echo "dosya mevcut\n";

}else {
	echo "dosya mevcut değil \n";
}

//filesize == byte cinsinden
echo "<br>6<br>";

echo filesize("metinbelgesi.txt");

//touch == dosya oluşturma
//unlink == silme
echo "<br>7<br>";

touch("yeni1.txt");

@unlink("mb2.txt");

echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"

?>


<?php
// 2. DERS
echo "<b>2. DERS<br><br><br></b>";

$dizi = array("Orhun","Artvin",18,2380707);
echo $dizi."<br>";
echo $dizi[0];
$dizi[4]="Köse";
echo "<br>".$dizi [4];

$toplam = count($dizi);
echo "<br>........<br>";
for ($i=0; $i < $toplam ; $i++) { 
	echo $dizi[$i]."<br>";
}
echo "<br>........<br>";
foreach ($dizi as $a) {
	echo $a."<br>";
}

echo "........<br>";

$dizi2 = array('okul' =>"METU" ,
               'bölüm' => "CENG",
               'numara' => 2380707 
 );

echo $dizi2['okul']."<br>".$dizi2["numara"];

echo "<br>........<br>";


foreach ($dizi2 as $b => $c) {
	echo $b." : ".$c."<br>";
}
echo "<br>........<br>";

$dizi3 = array(array("orhun","Köse"),
		array("recep","köse"),
		array("metehan","köseğ"));

echo var_dump($dizi3);//dizinin içeriğini gösterme
echo "<br>........<br>";
echo $dizi3[2][1];
echo "<br>........<br>";
for ($i=0; $i < 3; $i++) { 
	for ($ii=0; $ii < 2 ; $ii++) { 
		echo $dizi3[$i][$ii]."<br>";
	}
}


echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>




<?php
// 3. DERS
echo "<b>3. DERS<br><br><br></b>";

$dizi = array("a","c","t","g","b","i","f","A","T","B");
sort($dizi);//alfabetik sıraya dizer (büyük harfler öncelikli)

foreach ($dizi as $x ) {
	echo $x." ";
}
echo "<br>........<br>";
$dizi = array("b"=>3,"c"=> 5, "a"=> 4, "A"=>2);
ksort($dizi);//1. lere göre
foreach ($dizi as $a=>$b ) {
	echo $a." - ".$b."<br>";
}
echo "<br>........<br>";
asort($dizi);//ikincileri küçükten büyüğe. ***(a)rsort ifadesiyle büyükten küçüğe sıralanır
foreach ($dizi as $a=>$b ) {
	echo $a." - ".$b."<br>";
}
echo "<br>........<br>";

$dizi = array('recep', "gamze","metehan","orhun","betül");
shuffle($dizi);// diziyi karar

for ($i=0; $i <2 ; $i++) { 
	echo $dizi[$i]." ";
}
echo "<br>........<br>";

$dizi = array();
echo var_dump($dizi)."<br>";
for ($i=0; $i < 4 ;$i++) { 
	array_push($dizi,$i);//dizi, eklenecek şey
}

echo var_dump($dizi);
echo "<br>".count($dizi);

echo "<br>........<br>";

$dizi = array('a',"b","c","a","d","a","c");

$$dizi = array_count_values($dizi);

foreach ($$dizi as $a=>$b) {
	echo $a." : ".$b."<br>";
}
echo "<br>........<br>";

$dizi = array("domates"=>"6 tl","patates"=>"8 tl", "muz"=> "14 tl");
 extract($dizi);//dizinin elemanlarını değişkene çevirir

 echo $domates."<br>".$muz;

echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"

?>



<?php
// 4. DERS
echo "<b>4. DERS<br><br><br></b>";

/*

if ($_POST){

	$adsoyad = $_POST["adsoyad"];
	$eposta = $_POST["eposta"];
	$mesaj = $_POST["mesaj"];

	$konu= "İLETİŞİM BİLDİRİMİ";
	$kime = "asasuna_00@hotmail.com";
	$içerik= "Gönderen: ".$adsoyad."<br>
			  E-Posta: ".$eposta."<br>
			  Mesaj: ".$mesaj."<br>";

	$gonder=mail($kime, $konu, $içerik);
	if ($gonder){
		echo "İletişim gönderildi.";
	}		  

}




else{
echo '<form action="" method="post">
<h2>İletişim Formu</h2>
<table cellpadding="5" cellspacing="5">
	<tr>
		<td>Ad-Soyad:</td>
		<td><input type="text" name="adsoyad"/></td>
	</tr>
	<tr>
		<td>E-Posta:</td>
		<td><input type="email" name="eposta"/></td>	
	</tr>
	<tr>
		<td>Mesaj:</td>
		<td><textarea rows="3" cols="30" name="mesaj"></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Gönder"/></td>
	</tr>
</table>
</form>';			
}
*/

echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>



<?php
// 5. DERS
echo "<b>5. DERS<br><br><br></b>";

$a =" ";
if (empty($a)){
	echo "a boş";
}
if (empty(trim($a))){  //baştaki ve sondaki boşlukları siler, ** ltrim soldaki, rtrim sağdaki boşlukları siler
	echo "boşalttık";
}

$a= "gfdsgdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsf

sfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfgkşlllllllllllll0";
echo "<br>".$a;
echo "<br>........<br>";
echo nl2br($a);

echo "<br>........<br>";echo "<br>........<br>";

$a="köse";
printf("orhun %s",$a);
																						echo "<br>";
$a="2.1";
printf("sayı: %s",$a);
																						echo "<br>";
printf("sayı: %f",$a);									echo "<br>";
printf("sayı: %.0f",$a);												echo "<br>";
printf("sayı: %.3f",$a);											echo "<br>";

echo "<br>........<br>";

$b="Orhun Köse ";
printf("sayı: %.3f <br> alıcı: %s",$a,$b);								echo "<br>";
printf("sayı: %2\$.3f <br> alıcı: %1\$s",$a,$b);

echo "<br>........<br>";echo "<br>........<br>";

$a="musTafa orhun";
echo strtoupper($a);//hepsi büyük
echo "<br>".strtolower($a);//hepsi küçük
echo "<br>".ucfirst($a);//baş harf büyük
echo "<br>".ucwords($a);//baş harfler büyük

echo "<br>........<br>";echo "<br>........<br>";

$a="Orhun beni 'çok fena' dövdü.";
$b= addslashes($a);
echo $b;																echo "<br>";
echo stripslashes($b);//veri tabanına ekleniyor ama gözükmüyor.







echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>


<?php
// 6. DERS
echo "<b>6. DERS<br><br><br></b>";

//explode, implode

$a="admin@prototurk.com";
echo $a;																echo "<br>";
$parcala=explode("@", $a);//ayır, liste oluştur
echo $parcala[0]." - ".$parcala[1];														echo "<br>";

if ($parcala[1] == "hotmail.com") {
	echo "hotmail";
}elseif ($parcala[1]=="prototurk.com") {
	echo "prototurke gönderiliyor..";
}else{
	echo "geçersiz";
}
$liste = array("a","1","2","s24" );
$a=implode("***", $liste);//birleştir, string oluştur
echo "<br>".$a;

echo "<br>........<br>";

//substr (string, başlangıç, miktar)

$a="senicokseviyorum";
$b= substr($a, 4, 3);
echo $b;
echo"<br>".substr($a, -9,9);

echo "<br>........<br>";

$şifre="12356";
if (strlen($şifre)<=6) {
	echo "şifre en az 6 karakter olmalıdır";
}else{
	echo "şifre geçerli";
}
echo "<br>........<br>";
//strstr == samanlıkta iğne arama
$yorum="ben senin ta aq...";
if (strstr($yorum, "aq")) {
	echo "Küfürlü yorum yasaktır.";
}else{
	echo "Yorum başarıyla eklendi";
}
echo "<br>";
//strpos == samanlıkta iğne arama (daha hızlı, metin değil sayı verir)
echo strpos($yorum, "ta");

echo "<br>........<br>";

//str_replace

$a="Merhaba benim adım mustafa orhun köse, memnun oldum.";
$b1=array("Merhaba","mustafa orhun köse","memnun oldum");
$b2=array("sa","ladin emre","memnunumu açtım");
echo str_replace($b1, $b2, $a);







echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>

<?php
// 7. DERS
echo "<b>7. DERS<br><br><br></b>";

//require : hata olursa sistemin çalışması durur.
//include : hatada sistem çalışmaya devam eder.

require("metinbelgesi.txt");	//dosyayı çağırır ve içindekileri yazar					
echo "<br>";

echo $xy; //diğer dosyada tanımlanan değişken.


echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>

<?php
// 8. DERS
echo "<b>8. DERS<br><br><br></b>";

function fonksiyon($i,$ii=10){
	if (strlen($i)>$ii) {
		$i=substr($i, 0,$ii)."...";
	}return $i;

}
$a="Biz tam 7 cüceyiz, 14 kollu bir deviz.";

echo fonksiyon($a,20); // ikinci değişken belirlenmezse fonksiyondaki sabit değer geçerli olur.



echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>
<?php
// 9. DERS
echo "<b>9. DERS<br><br><br></b>";




















echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>