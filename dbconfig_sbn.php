
<?php
	$DB_HOST = 'sql213.epizy.com';
	$DB_USER = 'epiz_32337068';
	$DB_PASS = 'oeVxSkdNv4fhOzU';
	$DB_NAME = 'epiz_32337068_spk_sabunwajah';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>