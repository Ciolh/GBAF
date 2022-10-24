<?php
    include_once ('./config/mysql.php');
    include_once ('./includes/functions.php');
    include_once ('./config/user.php');
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

  <form action="password_change.php" method="post" class="form-login">

        <div class="mb-3">
            <label for="username" class="form-label">Identifiant</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="username" placeholder="Identifiant">
        </div>

        <h3>Quel est votre animal préféré ?</h3>
        <div class="mb-3">
            <label for="reponse" class="form-label">Votre réponse secrète</label>
            <input type="text" class="form-control" id="reponse" name="reponse">
        </div>
        <button type="submit" class="btn btn-primary">validé</button>

  </form>

</body>
