<?php  
//VIEW

//echo "ilk başta görülen yer view'daki index";
require "static/header.php";   
?>


<a href="<?php echo site_url('kayit'); ?>"><?=__("Kayıt ol")?></a>

<button id="uye_getir">Üye bilgilerini listele</button>
<div class="ajax-sonuc"></div>



<?php  require "static/footer.php"   ;?>
	
