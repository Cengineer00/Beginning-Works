<?php


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


?>