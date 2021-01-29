<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="./view/style_header.css">
	</head>
    <body>
        <header>

		
			<?php
				if (isset($_SESSION['username'])){ ?>
					<h2><?php echo "Bienvenue sur le forum : " . $_SESSION['username']; ?> </h2>
				 	<a href="deconnexion.php"> <input type="button" value="Deconnexion"></a>;
				<?php
				}
				 else{
			?>
				
			
			

				
			<div class="logo-container">
				<img src="./images/Logo_sans_fond_small.png" alt="NewCyberty Logo">
				<h4 class="logo">Acceuil</h4>
			</div>
			<nav>
				<ul class="navigation-links">
					<li ><a class="navigation-link" href="view/login.php">Se connecter</a></li>
				</ul>
			</nav>

			<?php
			}
			?>
		</header>
    </body>
</html>