<?php

require_once("konekcija.php");

$err = "";

if(isset($_POST['submit'])){

	if(!empty($_POST['username'])){
		$qUser = "SELECT * FROM `korisnici` WHERE `username` = :username";
		$korisnici = $conn->prepare($qUser);
		$korisnici->execute(array(
			":username" => $_POST['username']
			));

		if($korisnici->rowCount()){

			$err .= "- Username vec postoji. Probajte sa drugim. Hvala!<br>";
		} else{
			$username = $_POST['username'];
		}
	}else {
		$err .= "- Morate popuniti Username polje <br>";
	}

	
	if(!empty($_POST['password'])){

	}else {
		$err .= "- Morate popuniti Password polje <br>";
	}

	if(!empty($_POST['repassword'])){

	}else{
		$err .= "- Morate popuniti RePassword polje <br>";
	}

	if(!empty($_POST['password']) AND !empty($_POST['repassword'])){

		if($_POST['password'] == $_POST['repassword']){
			$password = $_POST['password'];
		}else {
			$err .= "- Greska! Password nije isti. Pokusajte ponovo<br>";
		}
	}
	

	if(!empty($_POST['name'])){
		$name = $_POST['name']; 
	}else{
		$err .= "- Morate popuniti Name polje <br>";
	}

	if(!empty($_POST['email'])){
		$qEmail = "SELECT * FROM `korisnici` WHERE `email` = :email";
		$korisnici = $conn->prepare($qEmail);
		$korisnici->execute(array(
			":email" => $_POST['email']
			));
		if($korisnici->rowCount()){
			$err .= "- Email vec postoji. Probajte sa drugim. Hvala!<br>";
		}else{
			$email = $_POST['email'];
		}
	}else{
		$err .= "- Morate popuniti Email polje <br>";
	}



if($err <> ""){
	echo $err;
}else {
	$qk = " INSERT INTO `korisnici`
		SET `username` = :username,
			`password` = :password,
			`name` = :name,
			`email` = :email 
	";
	$k = $conn->prepare($qk);
	$k->execute(array(
		":username" => $username,
		":password" => $password,
		":name" 	=> $name,
		":email"	=> $email
		));

	echo "Uspesno ste se registrovali<hr>";

}
}

?>


<html>
<title>Registar form</title>
<form method="POST" action="registracija.php">
	<table>
		<tr>
			<td>
				Username
			</td>
			<td>
				<input type="text" name="username" />
			</td>	
		</tr>
			<tr>
			<td>
				Password
			</td>
			<td>
				<input type="password" name="password" />
			</td>	
		</tr>
			<tr>
			<td>
				RePassword
			</td>
			<td>
				<input type="password" name="repassword" />
			</td>	
		</tr>
			<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" name="name" />
			</td>	
		</tr>
			<tr>
			<td>
				Email
			</td>
			<td>
				<input type="text" name="email" />
			</td>	
		</tr>
			<tr>
		
			<td>
				<input type="submit" name="submit" value="Registruj se" />
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
