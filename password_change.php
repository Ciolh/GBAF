<?php
    include_once ('./config/mysql.php');
    include_once ('./includes/functions.php');
    include_once ('./config/user.php');

    $sqlQuery = 'SELECT * FROM users WHERE username= :username AND reponse =:reponse';
    $reponseCheckQuery = $mysqlConnection ->prepare($sqlQuery);
    $reponseCheckQuery ->execute([
            'username' => $_POST['username'],
            'reponse' => $_POST['reponse'],
    ]);

    $user = $reponseCheckQuery->fetch();
?>

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
  <?php include_once('./includes/header.php'); ?>

  <body>

  <div class="form-setup">

      <?php if($user){ ?>

        <h1>Modifiez votre mot de passe</h1><br />

        <!-- Formulaire -->
        <form method="post" action="udpate_password.php">

                <div class="mb-3">
                    <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $user['id_user'] ?>">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Mot de Passe</label>
                    <input type="password" class="form-control" id="password"name="password" aria-descrideby="password-help" placeholder="Mot de passe" value="">
                </div>

                <button type="submit" class="btn btn-primary">Changer mon mot de passe</button>
            </form>
            </div>
        </div>

      <?php } ?>

  </body>
