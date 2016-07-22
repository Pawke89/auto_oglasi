<html>
<title>Oglasi</title>
<head><h3>OGLASI</h3></head>
<body bgcolor = "999333"></body>
</html>



<?php




include "konekcija.php";



class Auto{

	public $marka;
	public $model;
	public $godiste = 0;
	public $kilometraza = 0;
	public $cena = 0;


public function select(){

global $conn;

		$query = $conn->prepare("SELECT * FROM auto");
		$query->execute();
		$result = $query->fetchall();
		//echo "<pre>" ,print_r($result), "<pre>";

		    echo 
    "<table border=''>
    <tr>
    <th>ID</th>
    <th>Marka</th>
    <th>Model</th>
    <th>Godiste</th>
    <th>Predjena Km</th>
    <th>Cena</th>
    <th>Slika</th>
  
    </tr>"
    ;

    foreach($result as $row)
    {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['marka'] . "</td>";
  echo "<td>" . $row['model'] . "</td>";
  echo "<td>" . $row['godiste'] . "</td>";  
  echo "<td>" . $row['kilometraza'] . "</td>";
  echo "<td>" . $row['cena'] . "</td>";
  echo "<td>"  ?>  <a href="login.php"><img src="1.jpg" alt="" border=3 height=100 width=100></img></a> <?php  "</td>";	
}

  echo "</tr>";
  echo "</table>";

}

}




$nemanja = new Auto;

echo $nemanja->select();


