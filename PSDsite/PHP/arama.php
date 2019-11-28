<?php 

require "class.basicdb.php";

$ara = $_GET["ara"];


$sonuc = $db->from("urunler")
	->like("isim", $ara)
	->all();

$x = count($sonuc);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Gold Kayısı</title>
	<link rel="stylesheet" href="../css/css.css" />
	<link rel="stylesheet" href="../css/kayisi.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/kayısı-removebg-preview.png"/>
</head>
<body>
	
	<!-- HEADER -->
	<header>
		<div class="sınırla">
			<!-- LOGO Kısmı -->			
			<div class="logo">
				<span><a href="http://3mpati.com/Orhun/kay%C4%B1s%C4%B1site/PSDsite/html.php"><img src="../img/LOGO.png" alt="logo" /></a></span>
			</div>
			<div class="arama">
				<form action="" method="get" enctype="multipart/form-data">
					<i class="fa fa-search"></i><input type="text" name="ara" placeholder="Aradığınız ürünü yazınız..." value>
				</form>	
			</div>
			<!-- SEÇENEKLER KISMI -->
			<div class="secenekler">
				<ul>
					<li id="düzeltme"><a href="#">GİRİŞ YAP /</a><a href="#"> ÜYE OL</a><a href="#"><i class="fa fa-user"></i></a>|</li>
					<li><a href="#">SEPETİM</a><a href="#"> <i class="fa fa-shopping-bag"></i></a>|</li>
					<li><a href="#"><i class="fa fa-heart"></i></a></li>
				</ul>	
			</div>
			<div class="sm">
				<a href="#"><i class="fa fa-facebook fa-border" id="face"></i></a>
				<a href="#"><i class="fa fa-twitter fa-border" id="twitter"></i></a>
				<a href="#"><i class="fa fa-instagram fa-border" id="insta"></i></a>
			</div>
		</div>		
			
		
	</header>
	<!-- MENU KISMI -->
	<div class="menu">
		<ul>
			<li><a href="http://3mpati.com/Orhun/kay%C4%B1s%C4%B1site/PSDsite/html.php" id="anasayfa">Anasayfa</a></li>
			<li><a href="#">Hakkımızda</a></li>
			<li><a href="">Kayısı Çeşitleri</a></li>
			<li><a href="#">Kayısı Yan Ürünleri</a><i class="fa fa-angle-down"></i></li>
			<li><a href="kuruyemis.php">Kuruyemiş</a><i class="fa fa-angle-down"></i></li>
			<li><a href="#">Hediyelik Ürünler</a><i class="fa fa-angle-down"></i></li>
			<li><a href="#">Şekerlemeler</a><i class="fa fa-angle-down"></i></li>
		</ul>
	</div>

	<!-- CENTER -->

	<div><?php if ($x>0){ echo $x." sonuç bulundu";}else{echo "sonuç bulunamadı";}?></div>

	<div class="kk">
		<?php $y = 0;
			while ($y< $x) { ?>
				<span>
					<a href=""><img src="../img/id<?=$sonuc[$y]["id"]?>.png" alt="logo"/></a>
					<div> <?=$sonuc[$y]["isim"]?> <br /><?=$sonuc[$y]["fiyat"]?> TL / kg <?php if ($ucretsizkargo[($sonuc[$y]["id"]-1)]["ucretsiz_kargo"]) { ?><span class="kargo">ÜCRETSİZ KARGO</span> <?php } ?></div>
				</span>
		<?php $y++; } ?>	
	</div>



	
	<!-- FOOTER -->
	<div class="footer">
		<span class="bilgi">
				<div><div>Gold Kayısı Market</div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</span>
		<img src="../img/f.1.png" alt="kk" />
		<div class="bilgiler">
			<span class="harita">
				<div class="adres"><div>Adres</div>Doğu Mahallesi İstasyon Caddesi 13/a Akçadağ/Malatya</div>
				<a href="https://www.google.com/maps/place/Do%C4%9Fu,+%C4%B0stasyon+Cd.,+44600+Ak%C3%A7ada%C4%9F%2FMalatya/@38.341364,37.973839,14z/data=!4m5!3m4!1s0x4077d168f9b944a5:0x1d2de79941a832a4!8m2!3d38.3413644!4d37.9738388?hl=tr-TR">
					<img src="../img/harita.png" alt="harita" />
				</a>
			</span>
			<span class="hakkımızda">
				<table>
					<tr><th>Kurumsal</th></tr>
					<tr><td><a href="">Hakkımızda</a></td></tr>
					<tr><td><a href="">Mağazalar</a></td></tr>
					<tr><td><a href="">Diğer Sorular</a></td></tr>
						
					<tr><th> <br />goldkayisimarket.com</th></tr>
					<tr><td><a href="">Mesafeli Satış Sözleşmesi</a></td></tr>
					<tr><td><a href="">Teslimat ve Kargo</a></td></tr>
					<tr><td><a href="">Kullanım Koşulları</a></td></tr>
					<tr><td><a href="">İade, İptal ve Değişim</a></td></tr>
					<tr><td><a href="">Ödeme Seçenekleri</a></td></tr>
					<tr><td><a href="">Kişisel Verilerin Korunması ve</a></td></tr>
					<tr><td><a href="">Gizlilik Politikası</a></td></tr>
					<tr><td><a href="">Güvenlik Politikası</a></td></tr>
					<tr><td><a href="">İletişim</a></td></tr>
				</table>
			</span>
			<span class="son">
				<table>
					<tr><th>Sosyal Medya</th></tr>
					<tr><td><a href=""><i class="fa fa-facebook fa-border" id="facee" ></i>/goldkayisimarket</a></td></tr>
					<tr><td><a href=""><i class="fa fa-twitter fa-border" id="twitterr" ></i>/goldkayisimarket</a></td></tr>
					<tr><td><a href=""><i class="fa fa-instagram fa-border" id="instaa" ></i>/goldkayisimarket</a></td></tr>
				</table>
			</span>
		</div>
		
	</div>


	
</body>
</html>