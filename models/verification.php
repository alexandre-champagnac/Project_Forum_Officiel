	<?php
$username = stripcslashes($_REQUEST['username']);
$password = stripcslashes($_REQUEST['password']);


$reponse = 
$result = $reponse->fetch();


if($result==true){
	
	$_SESSION['username'] = $username;
	header("Location: view/accueil.php");
}
else {
	header("Location: ../view/login.php");
}


