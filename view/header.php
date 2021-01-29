<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../view/style_header.css">
	</head>
    <body>
        <header>

		
			<?php
			session_start();
				if (isset($_SESSION['username'])){ ?>
					<div>
						<h2><?php echo "Bienvenue sur le forum : " . $_SESSION['username']; ?> </h2>
				 		<a href="deconnexion.php" > <input type="button" value="Deconnexion" class="logout"></a>;
				 	</div>
		<div class="nav_head">
			<nav class="barre_nav">
	            <form>
	              <input class="search_button" id="searching" type="search" placeholder="Search" aria-label="Search">
	              <a href="#" class="btn"><i class="fas fa-search"></i></a>
	            </form>
	            <ul class="navigation-links">
	                <li ><a class="navigation-link" href="#">Accueil</a></li>
	                <li ><a class="navigation-link" href="login.php">Login/Register</a></li>
	                <li ><a class="navigation-link" href="mail.php">Contact</a></li>    
	    			<li ><a class="navigation-link" href="view/addPost.php">MP</a></li>

	            </ul>
	        </nav>
	    </div>
				<?php
				}
				 else{
			?>
				
			
			

				
			<div class="logo-container">
				<img src="./images/Logo_sans_fond_small.png" alt="NewCyberty Logo">
				<h4 class="logo">Accueil</h4>
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