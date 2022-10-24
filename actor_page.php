<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil acteur</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include_once ('./config/mysql.php');
    include_once ('./includes/functions.php');
    include_once ('./config/user.php');
    ?>

    <!--Tête de page -->
    <?php include_once ('./includes/header.php'); ?>


    <?php
    $actor =get_actor($_GET['id']);
    ?>

        <div class="actor_page_presentation">
            <div class="img-actor">
            <img src='<?php echo $actor['logo']; ?>' />
            </div>
            <h2><?php echo $actor['actor']; ?></h2><br />
            <?php echo $actor['description']; ?><br />
        </div>

    <!-- Commentaires -->
    <?php include_once('comentary/comments.php') ; ?>

    <!-- Pied de page -->

    <? include ('includes/footer.php'); ?>

</body>
</html>
