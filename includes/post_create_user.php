<?php include_once ('../config/mysql.php'); ?>

<?php
        
        $sqlQuery = 'INSERT INTO users(nom, prenom, username, password, reponse) VALUES (:nom, :prenom, :username, :password, :reponse)';
        $insertUsersStatement = $mysqlConnection->prepare($sqlQuery);
        $insertUsersStatement ->execute([
                'nom' => $_POST['name'],
                'prenom' => $_POST['fullname'],
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'reponse' => $_POST['reponse'],
])
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!--Tête de page -->
    <?php include_once ('./includes/header.php'); ?>

    <div class="youDid">
    <h1>Vous vous êtes enregistré avec succès !</h1>
    <button type="submit" class="btn btn-primary"><a href="./index.php">Retour</a></button>
</div>

</body>
</html>