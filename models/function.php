<?php

//connexion a la base de donnée

function bdd(){
     try
        {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $bdd = new PDO('mysql:host=localhost;dbname=forum_base', 'root', '', $pdo_options);
        }
    catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    return $bdd;
}
   
//Fonction de sécurisation des saisies dans les champs nom et message 
  class addSujet{
    
    private $nom;
    private $message;
    private $bdd;
    
    public function __construct($nom,$message) {
        
        $this->nom = htmlspecialchars($nom);
        $this->nom = stripslashes($nom);
        $this->message = htmlspecialchars($message);
        $this->message = stripslashes($message);
        $this->bdd = bdd();
        
    }
    
    //Verification d'une bonne saisie dans les champs
    
    public function verif(){
        
        if(strlen($this->nom) > 5 AND strlen($this->nom) < 60 ){ /*Si le nom du sujet est bon**/
            
            if(strlen($this->nom) > 0){ /*Si on a bien un sujet*/
                
                return 'ok';
            }
            else {/*Si on a pas de contenu*/
                $erreur = 'Veuillez entrer le contenu du sujet';
                return $erreur;
            }
            
        }
        else { /*Si le nom du sujet est mauvais*/
            $erreur = 'Le nom du sujet doit contenir entre 5 et 20 caractères';
            return $erreur;
        }
        
    }
    
    //requete sql pour insérer le message dans la bdd des messages envoyés

    public function insert(){
        
        $requete = $this->bdd->prepare('INSERT INTO sujet(nom, message) VALUES(:nom,:message)');
        $requete->execute(array('nom'=> $this->nom,'message'=>  $this->message));
        
        
        return 1;
    }
    
}
?>
