<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres</title>
    <link rel="stylesheet" href="style.css">
</head>


     <!--Tête de page -->
    <?php include_once('includes/header.php'); ?>

    <!-- Formulaire Ajout Form avec method Post -->
<body>

    <div class= "flex-container">

        <?php include_once('includes/functions.php'); ?>

        <?php $user= get_user($_GET['id']); ?>

        <!-- Formulaire de modification-->
        
        <div class="form-setup">

    <h1>Modifiez vos informations</h1><br />

    <form method="post" action="includes/post_edit_user.php">

            <!-- Champ cachés -->
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_GET['id']; ?>">
            <input type="hidden" class="form-control" id="question" name="question" value="<?php echo $user['question']; ?>">

            <!-- Formulaire -->
            <div class="mb-3">
                <label for="name" class="form-label"> Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nom" aria-placeholder="Nom" value="<?php echo $user['nom'] ?>">
            </div>

            <div class="mb-3">
                <label for="fullname" class="form-label"> Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="prenom" aria-placeholder="Prénom" value="<?php echo $user['prenom'] ?>">
            </div>

            <div class="mb-3">
                <label for="fullname" class="form-label"> Identifiant </label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="username" aria-placeholder="Identifiant" value="<?php echo $user['username'] ?>">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label"> Mot de Passe</label>
                <input type="password" class="form-control" id="password"name="password" aria-descrideby="password-help" placeholder="Mot de passe" value="<?php echo $user['password'] ?>">
            </div>

            <div class="mb-3">
                <label for="reponse" class="form-label"> Quel est votre animal préféré ? </label>
                <input type="text" class="form-control" id="reponse" name="reponse" aria-describedby="reponse-help" placeholder="Reponse secrete" value="<?php echo $user['reponse'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Appliquer les modifications</button>
        </form>
        </div>
    </div>
        <!-- Pied de page -->
        <?php include_once('includes/footer.php'); ?>

</body>
</html>
