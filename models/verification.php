	<?php

$username = stripcslashes($_REQUEST['username']);
$password = stripcslashes($_REQUEST['password']);

$reponse = $bdd->query("SELECT * FROM utilisateurs WHERE pseudo='$username' and password='".hash('sha1',$password)."'");
$result = $reponse->fetch();

if($result==true){
	$_SESSION['username'] = $username;
	header("Location: view/accueil.php");
}
else {
	header("Location: ../view/login.php");
}


