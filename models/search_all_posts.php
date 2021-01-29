<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    function search_all_post($bdd){
        $reponse = $bdd->query('');
        $results = $reponse->fetchAll();
        return $results;
    }
?>
</body>
</html>


