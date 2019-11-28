
http://3mpati.com/Orhun/test.php


<?php
// 1. DERS

echo "<b>1. DERS<br><br><br></b>";
	/*
	açıklama satırı

	<br> === boşluk, 
	echo "..."; === yazı
	
	*/

    // bu da açıklama

    # bu da 

$degişken = "Kadiiir";

 echo "test <br>";

 echo "peki<br>";

 echo "<br>".$degişken." bu sene kesin şampiyon";

 echo "<br>$degişken";

 echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"

?>



<?php
//2. DERS
echo "<b>2. DERS<br><br><br></b>";


echo "Değişken (tanımlayıcı [$]) belirlerken harf, rakam ve '_' kullanılır; değişken harf ile başlamak zorundadır.<br>";
echo "Tanımlayıcılar büyük-küçük harfe duyarlıdır. (** fonksiyon isimleri duyarlı değildir.**)";

echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"




?>



<?php

//3. DERS
echo "<b>3. DERS<br><br><br></b>";

echo "VERİ TİPLERİ <br>";
echo "integer<br>";
echo "float (double)<br>";
echo "string<br>";
echo "boolean : mantıksal ifadeler için kullanılır (true, false).<br>";
echo "array : çok sayıda veri ögesini depolamak için kullanılır. <br>";
echo "object : snıf (class) ögeleri için kullanılır.<br><br>";

	// sırasıyla $a = 1, 1.4, "1", true/false..

$a = 10;
$a2 = (string) $a;
$a3 = (float)  $a2;

echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"

?>




<?php

//4. DERS
echo "<b>4. DERS<br><br><br></b>";

$deneme = "dinamikdeğişkendeğişken"; // bir değişkene değişken değişken ismi atıyoruz
$$deneme = "yolun sonu"; //değişken değişkene değer atıyoruz
echo $dinamikdeğişkendeğişken."  ";
echo $$deneme."<br>";
echo "<br>".$deneme;

//SABİT DEĞİŞKEN (define) :

define ("SABİTDEĞİŞKENİNADI","değişkenin depoladığı öge"); //int, float(double), string, boolean depolayabilir

echo "<br>".SABİTDEĞİŞKENİNADI;

echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"


?>



<?php

//5. DERS
echo "<b>5. DERS<br><br><br></b>";

$a=13;
$b=5;
echo $a+$b."<br>";
echo $a-$b."<br>";
echo $a*$b."<br>";
echo $a/$b."<br>";
echo $a%$b."<br>";

$a1="Orhun ";
$a2="Köse";
echo $a1.$a2;

//a+=b ==== a= a+b

echo "<br>".$a+=$b."<br>";

echo "<br>".++$a." ".--$b;

$x= 5;
$y= $x;
$x= 7; // x 7 OLUR AMA y 5 OLARAK KALIR.
echo "<br>".$y."<br>";

$x= 5;
$y= &$x;
$x= 7; // HEM x HEM DE y 7 OLUR.
echo $y."<br>";

/* == eşittir, === denktir

5=="5" ama 5==="5" değil

*/

/*
! === işlem başarısızsa
&& (AND) === ve
|| (OR) === ya da
*/

/* koşul ? true : false */

$a = 5;
$sonuc = ($a>4 ? "a 4'ten büyüktür" : "a 4'ten küçüktür");
echo $sonuc;

$a ="<br>". @ (10/0);
echo $a;


echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"

?>
 
 <?php
//6. DERS
echo "<b>6. DERS<br><br><br></b>";
 ?>

<form action="Kontrol.php" method="post">
<table cellpading="5" cellspacing="5">
	<tr>
		<td>Ad-Soyad:</td>
		<td><input type="text" name="adsoyad"/></td>
	</tr>
	<tr>
		<td>Yas:</td>
		<td><input type="text" name="yas"/></td>
	</tr>
	<tr>
		<td>Sehir:</td>
		<td><select name ="sehir">
			<option value= "Eskişehir">Eskişehir </option>
			<option value= "Ankara">Ankara </option>
			<option value= "Istanbul">Istanbul </option>
		</select></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value= "Gonder" /></td>
	</tr>
</table>
</form>



<?php
echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"

?>


<?php
//7. DERS
echo "<b>7. DERS<br><br><br></b>";

$a=6;
if ($a<9 && $a>6) {
	echo "İşlem doğro";
}elseif ($a==5) {
	echo "ifade 5'e eşit";
}else {
	echo "bunun bi anlamı yok";
}


switch ($a) {
	case 5;
		echo "<br>ifade 5'e eşittir";
		break;
	
	case 6;
		echo "<br>6";
		break;

	default;
	echo "<br>bunun bi anlamı yiok";
		break;
}

?>

<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>
<?php
//8. DERS
echo "<b>8. DERS<br><br><br></b>";


//http://3mpati.com/Orhun/test.php?sayfa=...
$sayfa = @ $_GET["sayfa"];

if ($sayfa=="hakkimda") {
	echo "<h1>Hakkımda</h1><p>METU CENG</p>";
}elseif ($sayfa=="adim") {
	echo "<h1>Adım</h1><p>Mustafa</p>";
}elseif ($sayfa=="nereliyim") {
	echo "<h1>Nereliyim</h1><p>Artvin</p>";
}else {
	echo "<h1>Hata</h1><p>Bulunamadı..</p>";
}


echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>

<?php
//9. DERS
echo "<b>9. DERS<br><br><br></b>";
$a=1;
$b=0;
while ( $a<= 10) {
	echo $a."<br>";
	$a++;
	
}

/*for (değer1; koşul ; değer ayarı) { 
	# kod bloğu
}*/

for ($i=2; $i <=128 ; $i*=2) { 
	echo $i." ";
	
}

echo "<br>";

$sayi=1;
do {
	echo $sayi."<br>";
	$sayi++;
} while ($sayi<=12);



//while'dan farkı; do fonksiyonu önce yazıldığı için koşul sağlanmasa bile en az 1 kere çalışır.


echo "<b><br><br> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b> <br>"
?>


<?php
//10. DERS

/*
gettype, settype
is_string, is_integer...,  is_numeric
isset, unset
empty
trim
*/

echo "<b>10. DERS<br><br><br></b>";

$q="ben neyim";
echo gettype($q);
$w="55";
settype($w, "integer");
echo "<br>".gettype($w);

if (is_string($w)) {
	echo "<br>bu bir string";

}elseif (is_integer($w)) {
	echo "<br>tam sayı";
}else{
	echo "<br>int || str değil";
}
//is_numeric === float , integer ve stringdeki sayı

if (isset($a)) {
	echo "<br>böyle bir değişken atanmış";
}if (isset($ab)) {
	echo "<br>böyle bir değişken var.";
}
unset($a);
if (isset($a)) {
	echo "<br>böyle bir değişken atanmış";
}else{
	echo "<br>böyle bir değişken yok ya da silinmiş";
}
echo "<br>...........";
$a="";
if (empty($a)) {
	echo "<br>bu değişken boş";
}else echo "<br>bu değişken dolu";

echo "<br>...........<br>";

$y=" mustaaaaa ";
echo $y."orhun köse<br>";
echo trim($y)."orhun köse"; //boşluk siler

?>