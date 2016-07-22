<?php

include "konekcija.php"; 

class Auto{
/*
	public $marka;
	public $model;
	public $godiste = 0;
	public $kilometraza = 0;
	public $cena = 0;
*/

	public function postavi_oglas(){

		global $conn;

	$rt = "INSERT INTO auto (marka, model, godiste, kilometraza, cena) VALUES (:marka, :model, :godiste, :kilometraza, :cena);";
	$query = $conn->prepare($rt);
	$result = $query->execute(array(
		":marka"=>$marka,
		":model"=>$model,
		":godiste"=>$godiste,	
		":kilometraza"=>$kilometraza,
		":cena"=>$cena
		));
	$marka = $_POST['marka'];
	$model = $_POST['model'];
	$godiste = $_POST['godiste'];
	$kilometraza = $_POST['kilometraza'];
	$cena = $_POST['cena'];
	}
}



	$nemanja = new Auto;

if(isset($_POST['submit'])){



	$nemanja->postavi_oglas();



}



?>


<html>
<title>Postavi oglas</title>
<form method="POST" action="postavi_oglas.php">
	<table>
		<tr>
			<td>
				Marka
			</td>
			<td>
				<input type="text" name="marka" />
			</td>	
		</tr>
			<tr>
			<td>
				Model 
			</td>
			<td>
				<input type="text" name="model" />
			</td>	
		</tr>
			<tr>
			<td>
				Godina proizvodnje
			</td>
			<td>
				<input type="number" name="godiste" />
			</td>	
		</tr>
			<tr>
			<td>
				Predjena kilometraza
			</td>
			<td>
				<input type="number" name="kilometraza" />
			</td>	
		</tr>
			<tr>
			<td>
				Cena
			</td>
			<td>
				<input type="number" name="cena" />
			</td>	
		</tr>
			<tr>
		
			<td>
				<input type="submit" name="submit" value="Postavi oglas" />
			</td>	
		</tr>
	</table>
</form>
<form  method='post' action="../index.php">
  <br>
  <hr>
  <input type="submit" value="Pocetna strana" style="width: 300px; padding: 10px; box-shaddow: 6px 6px 5px; #999999; -webkit-box-shadow: 6px 6px 5px #999999; 
  -moz-box-shadow: 6px 6px 5px #999999;
   font-weight: bold; background: ##0000FF
Try it Yourself »; color: #000000; cursor: pointer; border-radius: 10px; border: 1px solid #D9D9D9; font-size: 150%;"> </form>
</html>
