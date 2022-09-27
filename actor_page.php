<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil acteur</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <!--Tête de page -->

    <?php include ('includes/header.php'); ?>
    
    <!--Corps de page-->

<?php include ('includes/connection.php') ?>
    <section class="actor_1">Acteur</section>
        <div class="presentation_actor_page">Présentation</div>

        <?php
        
            $pdo =  new PDO($connection->password)
        ?>

    <form method="post" action="variables.php">
        <div class="commentary">
            <label for="commentary" class="form-label">Commentaire</label>
            <input type="commentary" class="form-control" id="commentary" name="commentary" aria-describedby="commentary-help">
            <div id="commentary-help" class="form-text">Veuillez laisser votre commentaire ci-dessus</div>

        </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    <!-- Pied de page -->
 
    <? include ('includes/footer.php'); ?>
    
</body>
</html>