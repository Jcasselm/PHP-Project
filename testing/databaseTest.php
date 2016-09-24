<?php

	try{
		$db = new PDO("mysql:host=127.0.0.1; dbname=musicProfile", "root", "");
		
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->exec("SET NAMES 'utf8'");
		

		
	}catch(Exception $e){
		echo "not working";
	}




?>