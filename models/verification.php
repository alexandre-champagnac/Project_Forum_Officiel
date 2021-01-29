<?php
session_start();
$username = stripcslashes($_REQUEST['username']);
$password = stripcslashes($_REQUEST['password']);

$reponse = $bdd->query("SELECT * FROM utilisateur WHERE pseudo='$username' and password='".hash('sha1',$password)."'");
$result = $reponse->fetch();

if($result==true){
	$_SESSION['username'] = $username;
	header("Location: index.php");
}
else {
	header("location: view/login.php");
}


