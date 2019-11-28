<?php  

/**
 * 
 */
class Helper {		//fonksiyona sınıf belirtiyo
	
	public static function Load()
	{
		$helperdir= realpath(".")."/app/helper";
		if ($dh = opendir($helperdir)) {
			while($file = readdir($dh)){
				if (is_file($helperdir."/".$file)) {
					require $helperdir."/".$file;		}
	}
}

	}
}

//echo realpath(".");


?>