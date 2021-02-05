<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'forum_base');

$name = $_POST['username'];
$pass = $_POST['password'];

$s = " select * from utilisateur where pseudo = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"Identifiant déja utilisé ! Pas de chance";
}else{
    $reg= "insert into utilisateur(pseudo, password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo"Inscription réussie !";
    
}

?>