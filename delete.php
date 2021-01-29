<?php 

$id = $_GET['id'];
require ('models/connection.php');
require('models/delete_post.php');
delete($verif);
require('view/header.php') ;
require('models/search_all_posts.php');
$resultes=search_all_post($bdd);
require('view/list_posts.php');
require('view/footer.php');
