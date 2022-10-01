<?php
try
{
	$mysqlConnection = new PDO('mysql:host=localhost;dbname=oc_gbaf;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<?php

        $sqlQuery = 'UPDATE users SET nom= :nom, prenom= :prenom, username= :username, password= :password, question= :question, reponse= :reponse WHERE id_user= :id_user';
        $insertUsersStatement = $mysqlConnection->prepare($sqlQuery);
        $insertUsersStatement ->execute([
                'id_user' => $_POST['id'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'question' => $_POST['question'],
                'reponse' => $_POST['reponse'],
])
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Vous avez modifier vos informations avec succès !</h1>
<button type="submit" class="btn btn-primary"><a href="../index.php">Retour</a></button>






</body>
</html>