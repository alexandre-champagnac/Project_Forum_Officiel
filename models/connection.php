    <?php

    $dsn = 'mysql:host=localhost;dbname=forum_base';
    $user = 'root';
    $password = '';
    try {
            $bdd = new PDO($dsn,$user,$password);

    }
    catch(PDOException $e)
    {
            die('erreur : '.$e->getMessage());
    }
    ?>