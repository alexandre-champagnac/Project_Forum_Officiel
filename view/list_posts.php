<!DOCTYPE html>
<! --bouton delete-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <label> 
            <?php 
			if (isset($_SESSION['username'])){
				foreach ($resultes as $result) {
				echo $result['image'].' - '.$result['pseudo'].' <br> '.$result['Date_Heure'].' - '.$result['message'].'<br>';
				echo '<a style="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
				}
			}
			 
			else{
            foreach ($resultes as $result) {
			echo $result['pseudo'].' - '.$result['Date_Heure'].' - '.$result['message'].'<br>';
			} 
			}
            
            ?>
         </label>
    </body>
</html>