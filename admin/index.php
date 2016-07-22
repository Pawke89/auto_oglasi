<?php


echo "<pre>Sad si na admin strani<br></pre>";

require_once("konekcija.php");


$kor = "SELECT * FROM `korisnici`";
$korisnici = $conn->query($kor);
$fkor = $korisnici->fetchAll(PDO::FETCH_OBJ);

//echo "<pre>", print_r($fkor), "</pre>";

foreach ($fkor as $k) {
	
	echo $k->username ." - ". $k->name ." - ". $k->email . "<br>";

}
echo "<hr>";
?>