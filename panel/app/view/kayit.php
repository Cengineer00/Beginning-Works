<?php  require 'static/header.php'  ;?>

	<?php if (isset($error)): ?>
		<div class="error">
			<?php echo $error; ?>
		</div>

	<?php endif;  ?>

	<form action="" method="post">
		<?php echo __("Kullanıcı adı"); ?>: <input type="text" name="user_name">
		<button type="submit" name="submit" value="1"><?php echo __("Kayıt ol"); ?></button>
	</form>

<?php  require 'static/footer.php'  ;?>
