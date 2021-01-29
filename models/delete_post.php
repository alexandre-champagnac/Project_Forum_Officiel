<?php
        function delete($verif){
            $reponse = $verif->prepare('delete from articles where id= ?');
            $reponse->execute(array($_GET['id']));
        }
 
?>

<?php 
session_start();
if (empty($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
$user_id = $_SESSION['user_id']; 

include "connection.php"; 

if(isset($_GET['id'], $user_id)) 
{ 

mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM posts WHERE id=".$_GET['id']); 
mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE users SET posts = posts - 1 WHERE id='$user_id' "); 
header("location: index.php"); 
} 
mysqli_connect();
?> 

