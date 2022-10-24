<?php session_start();
    include_once ('../config/mysql.php');
    include_once ('../includes/functions.php');
    include_once ('../config/user.php');

    $postData = $_POST;

    $sqlQuery = 'SELECT * FROM post WHERE id_user= :id_user AND id_actor= :id_actor';
    $postQuery = $mysqlConnection->prepare($sqlQuery);
    $postQuery ->execute([
            'id_user' => $loggedUser['id_user'],
            'id_actor' => $_POST['id_actor']
    ]);

    $userPostCount = $postQuery->rowCount();
    
    if($userPostCount <= 1){
    $sqlQuery = 'INSERT INTO post( id_user, id_actor, date_add, post) VALUES ( :id_user, :id_actor, :date_add, :post)';
    $insertPost = $mysqlConnection->prepare($sqlQuery);
    $insertPost ->execute([
            'id_user' => $loggedUser['id_user'],
            'id_actor' => $_POST['id_actor'],
            'date_add' => date('Y.m.d'),
            'post' => $_POST['post'],
    ]);
    }
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

    <?php if($userPostCount >= 1){ ?>

            <h1>Vous avez déjà commenté cet acteur ! </h1>
            <button type="submit" class="btn btn-primary"><a href="../actor_page.php?id=<?php echo $_POST['id_actor']; ?>">Retour</a></button>

    <?php } else { ?>


            <h1>Votre commentaire a bien été enregistré !</h1>
            <button type="submit" class="btn btn-primary"><a href="../actor_page.php?id=<?php echo $_POST['id_actor']; ?>">Retour</a></button>

    <?php } ?>
</div>
</body>
</html>