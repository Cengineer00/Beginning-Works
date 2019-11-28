
<?php require view("admin/static/header") ?>



 <!--login screen-->
    <div class="login-screen">
        
        <!--login logo-->
        <div class="login-logo">
            <a href="<?=admin_url()?>">
                <img src="<?=admin_asset_url("images/logo.png")?>" alt="">
            </a>
        </div>
        
        	<?php if (isset($error)) {
        		echo error($error);
        	} 
        	?>

        <form action="" method="post">        	
            <ul>
                <li>
                    <label for="username">Kullanıcı adı</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">Şifre</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <button type="submit" name="submit" value="1">Giriş yap</button>         
                </li>
            </ul>
        </form>
    </div>






<?php require view("admin/static/footer") ?>