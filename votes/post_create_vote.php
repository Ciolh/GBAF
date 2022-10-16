<?php
      session_start();
      include_once ('../config/mysql.php');
      include_once ('../includes/functions.php');
      include_once ('../config/user.php');

      $postData = $_POST;

      $sqlQuery = 'SELECT * FROM vote WHERE id_actor=:id_actor AND id_user=:id_user';
      $voteQuery = $mysqlConnection->prepare($sqlQuery);
      $voteQuery ->execute([
              'id_actor' =>  $_POST['id_acteur'],
              'id_user' => $loggedUser['id_user'],
      ]);

      $userVoteCount = $voteQuery->rowCount();

      if($userVoteCount <= 0){
          $sqlQuery = 'INSERT INTO vote( id_user, id_actor, vote) VALUES ( :id_user, :id_actor, :vote)';
          $insertVoteYesStatement = $mysqlConnection->prepare($sqlQuery);
          $insertVoteYesStatement ->execute([
                  'id_user' => $loggedUser['id_user'],
                  'id_actor' => $_POST['id_acteur'],
                  'vote' => $_GET['vote'],
          ]);
      }

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

  <?php if($userVoteCount > 0){ ?>

    <p>Vous avez déjà voté ! </p>

  <?php } else { ?>

    <h1>Votre vote a bien été enregistré !</h1>

  <?php } ?>

  <button type="submit" class="btn btn-primary"><a href="../actor_page.php?id=<?php echo $_POST['id_acteur']; ?>">Retour</a></button>

</body>
</html>
