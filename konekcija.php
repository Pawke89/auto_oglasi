<?php

try {

	$conn = new PDO('mysql: host=localhost; dbname=auto_oglasi', 'root', '');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//echo "Konektovao se na bazu 'auto_oglasi'";
		
} catch (PDOException $e) {

	echo $e->getMessage();
	die();
	
}
/*

*/
?>
