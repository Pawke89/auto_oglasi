<?php
	
session_start();

require "konekcija.php";

$poruka = "";

if(isset($_POST['submit'])){

if(empty($_POST['user']) AND empty($_POST['pass'])){

	$poruka .= "- morate uneti sva polja";

}else {

	$db = "SELECT username, password FROM korisnici WHERE username = :username AND password = :password";
	$st = $conn->prepare($db);
	$st->execute(array(

				":username"=>$_POST['user'],
				":password"=>$_POST['pass']

		));
	$count = $st->rowCount();

	if($count > 0){

		$_SESSION['username'] = $_POST['user'];
		header("location:login_uspesan.php");
	}else {
		echo "Greska! Pokusajte ponovo";
	}
}


}
?>



<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
</head>

<body bgcolor="">
	<h1>Login</h1>

	<form action="login.php" method="POST">
		<input type="text" placeholder="Unesi svoj Username" name="user">
		<input type="password" placeholder="Unesi svoju lozinku" name="pass">

		<input type="submit" name="submit" value="Uloguj se">
	</form>

</body>
</html>
