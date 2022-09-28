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

<?php include ('includes/login.php') ?>

<?php 
    $sqlquery = 'SELECT * FROM actors';
    $actorsStatement = $mysqlConnection->prepare($sqlQuery);
    $actorsStatement ->execute();
    $actors = $actorsStatement->fetch();

    echo 'logo';
    echo 'actor';
    echo 'description';

?>

    <!-- Pied de page -->
 
    <? include ('includes/footer.php'); ?>
    
</body>
</html>