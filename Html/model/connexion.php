<?php
function connexion(){

	$db;
	try{
		$db = new PDO('mysql:host=localhost;dbname=authentic design','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}catch(Exception $e){
		die("error : ".$e->getMessage());
	}

	return $db;
}
