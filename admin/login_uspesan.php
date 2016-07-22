<?php

session_start();

echo "Uspesno ste se ulogovali. Dobrodosao ". $_SESSION['username'];

if(isset($_POST['logout'])){

	session_start();
	session_destroy();

	header('location: ../index.php');
}

?>

<html>
	<head>
		<title>Logged in</title>
	</head>	
<body bgcolor="grey">
<form  method='post' action="postavi_oglas.php">
  <br>
  <hr>
  <input type="submit" value="Postavi oglas" style="width: 300px; padding: 10px; box-shaddow: 6px 6px 5px; #999999; -webkit-box-shadow: 6px 6px 5px #999999; 
  -moz-box-shadow: 6px 6px 5px #999999;
   font-weight: bold; background: ##DD6999
Try it Yourself »; color: #477999; cursor: pointer; border-radius: 10px; border: 1px solid #D9D9D9; font-size: 150%;"> </form>
</body>
<html>
	<head>
		<title>Logged in</title>
	</head>	
<body bgcolor="grey">
<form  method='post' action="../index.php">
  <br>
  <hr>
  <input type="submit" value="Odjavi se" style="width: 300px; padding: 10px; box-shaddow: 6px 6px 5px; #999999; -webkit-box-shadow: 6px 6px 5px #999999; 
  -moz-box-shadow: 6px 6px 5px #999999;
   font-weight: bold; background: ##DD6999
Try it Yourself »; color: #477999; cursor: pointer; border-radius: 10px; border: 1px solid #D9D9D9; font-size: 150%;"> </form>
</body>

<?php
/*
	<body>
		<form method="post" value="logout">
			<input type="submit" name="logout" value="log me out">
		</form>
	</body>
</html>
*/
?>