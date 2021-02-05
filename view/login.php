<html>
<head>
    <title>Login/Register</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6 login-left">
            <h2>Connexion</h2>
            <form action="../connection.php" method="post">
                <div class="form-group">
                <label>Nom d'utilisateur</label>
                <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Mot de passer</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary"> Se connecter</button>
            </form>
        </div>
        <div class="col-md-6 login-right">
            <h2>S'inscrire</h2>
            <form action="../models/registration" method="post">
                <div class="form-group">
                <label>Nom d'utilisateur</label>
                <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Mot de passer</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary"> Inscription</button>
            </form>
        </div>
        </div>
        </div>   
    </div>
</body>
</html>