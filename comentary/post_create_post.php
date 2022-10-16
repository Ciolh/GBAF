<?php session_start();
    include_once ('../config/mysql.php');
    include_once ('../includes/functions.php');
    include_once ('../config/user.php');

    $sqlQuery = 'INSERT INTO post( id_user, id_acteur, date_add, post) VALUES ( :id_user, :id_acteur, :date_add, :post)';
    $insertUsersStatement = $mysqlConnection->prepare($sqlQuery);
    $insertUsersStatement ->execute([
            'id_user' => $loggedUser['id_user'],
            'id_acteur' => $_POST['id_acteur'],
            'date_add' => date('d.m.y'),
            'post' => $_POST['post'],
    ]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Votre commentaire a bien été enregistré !</h1>
<button type="submit" class="btn btn-primary"><a href="../actor_page.php?id=<?php echo $_POST['id_acteur']; ?>">Retour</a></button>

</body>
</html>
