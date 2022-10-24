<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="style.css">
</head>


         <!--Tête de page -->
         <?php include_once ('includes/header.php'); ?>

    <!-- Formulaire Ajout Form avec method Post -->
<body>

    <div class= "flex-container">

        <!-- Formulaire d'inscription-->
        <div class= "form-setup">

                <h1>Inscrivez-vous</h1><br />
            <form method="post" action ="includes/post_create_user.php">

                <div class="mb-3">
                    <label for="name" class="form-label"> Nom</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" aria-placeholder="Nom">
                </div>

                <div class="mb-3">
                    <label for="fullname" class="form-label"> Prenom</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" aria-describedby="fullname" aria-placeholder="Prénom">
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Identifiant</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="username-help" placeholder="Identifiant">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label"> Mot de Passe</label>
                    <input type="password" class="form-control" id="password"name="password" aria-descrideby="password-help" placeholder="Mot de passe">
                </div>

                <div class="mb-3">
                    <label for="reponse" class="form-label"> Quel est votre animal préféré ? </label>
                    <input type="text" class="form-control" id="reponse" name="reponse" aria-describedby="reponse-help" placeholder="Reponse secrete">
                </div>
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>
        </div>
    </div>
        <!-- Pied de page -->
        <?php include_once ('includes/footer.php'); ?>

</body>
</html>