<?php $username = "Pseudo" ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Glass Website</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style_profil.css" />
  </head>
  <body>
    <main>
      <section class="glass">
        <div class="dashboard">
          <div class="user">
            <img src="../images/avatar.png" alt="" />
            <h2><?php echo $username?></h2>
            <p>Membre</p>
          </div>
          <div class="links">
            <div class="link">
              <img src="../images/twitch.png" alt="" />
              <h2>Twitch</h2>
            </div>
            <div class="link">
              <img src="../images/steam.png" alt="" />
              <h2>Jeux de parc</h2>
          </div>
          </div>
          <div class="pro">
            <h2>Bienvenue sur votre page ! </h2>
            <img src="../images/controller.png" alt="" />
          </div>
        </div>
        <div class="games">
          <div class="status">
            <h1>Mes parcs favoris :</h1>
            <input type="text" />
          </div>
          <div class="cards">
            <div class="card">
              
              <div class="card-info">
                <h2>Parc 1</h2>
                <p>Ville</p>
                <div class="progress"></div>
              </div>
              <h2 class="percentage">60%</h2>
            </div>
            <div class="card">
              
              <div class="card-info">
                <h2>Parc 2</h2>
                <p>Ville</p>
                <div class="progress"></div>
              </div>
              <h2 class="percentage">60%</h2>
            </div>
            <div class="card">
              
              <div class="card-info">
                <h2>Parc 3</h2>
                <p>Ville</p>
                <div class="progress"></div>
              </div>
              <h2 class="percentage">60%</h2>
            </div>
          </div>
        </div>
      </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
  </body>
</html>
