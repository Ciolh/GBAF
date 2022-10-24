<?php include_once ('./config/mysql.php'); ?>

<?php
    $sqlQuery = 'UPDATE users SET password=:password WHERE id_user=:id_user';
    $upDatePassword = $mysqlConnection ->prepare($sqlQuery);
    $upDatePassword ->execute([
          'password' => $_POST['password'],
          'id_user' => $_POST['id_user'],
    ]);
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

<div class="youDid">
    <h3>Vous avez modifié votre mot de passe avec succès !</h3>
    <button type="submit" class="btn btn-primary"><a href="./index.php">Retour</a></button>
</div>

</body>
</html>
