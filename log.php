<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id= "logo_connexion">
        <figure>
            <img src="images\logo.png" alt="Logo GBAF"/>
            <h1>GBAF</h1>
        </figure>

    <div id="log">
        <form method="post" action="variables.php">
            <p>
                <label for="username">Identifiant :</label>
                <input type="text" name="username" id="username" />
       
                <br />
                <label for="pass">Mot de passe :</label>
                <input type="password" name="pass" id="pass" />
       
            </p>
        </form>

    <!-- Pied de page -->
 
    <? include ('includes/footer.php'); ?>

</body>