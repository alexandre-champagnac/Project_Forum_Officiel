<?php	

require('function.php');



	if(isset($_POST["nom"]) && isset($_POST["message"])){

		
		$nom = $_POST["nom"];
		$message = $_POST["message"];

		$addSujet = new addsujet($nom, $message);
		$verif = $addSujet->verif();
		if($verif == 'ok'){
			if($addSujet->insert()){
				header('location: index.php?sujet=' . ($_GET["nom"]));
			}
		}

		else{
			$erreur = $verif;
		}
    }
    

?>

