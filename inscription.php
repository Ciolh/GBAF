<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class = "inscription">
        <form method="post" action="users.php">
            <div>
                <label for="fullname"> Prénom :</label>
                <imput type="text" name='fullname'>
            </div>
            <div>
                <label for="name"> Nom :</label>
                <imput type="text" name='name'>
            </div>
            <div>
                <label for="username"> Identifiant :</label>
                <imput type="text" name='username'>
            </div>
            <div>
                <label for="pass"> Mot de Passe :</label>
                <imput type="pass" name='pass'>
            </div>
            <div>
                <label for="secret_question"> Question secrète :</label>
                <imput type="text" name='secret_question'>
            </div>
            <div>
                <label for="secret_answer"> Réponse secrète :</label>
                <imput type="text" name='secret_answer'>
            </div>
            <button type="submit">Envoyer</button>
        </form>
</div>

<!-- Pied de page -->
 
<? include ('includes/footer.php'); ?>


</body>
</html>