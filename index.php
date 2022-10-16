<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex flex-column min-vh-100">

    <?php session_start(); ?>

    <!--Log DB -->
    <?php include_once ('./config/mysql.php'); ?>

    <?php include_once ('./includes/functions.php'); ?>

    <?php include_once ('./config/user.php'); ?>

    <!-- connexion -->
    <?php include_once('./login.php'); ?>

    <!--Tête de page -->
    <?php include_once ('./includes/header.php'); ?>

    <!--Corps de page-->
    <?php if(isset($loggedUser) && $loggedUser !== false): ?>

    <section class="presentation">
        <div class="titre_presentation"><h1>Bienvenue sur le réseaux banquaire GBAF</h1></div>

        <div class="texte_présentation"><h3>Présentation GBAF</h3></div>
            <p>Le Groupement Banque Assurance Français (GBAF) est une fédération représentant les 6 grands groupes français :<br/>
                ● BNP Paribas<br/>
                ● BPCE<br/>
                ● Crédit Agricole <br/>
                ● Crédit Mutuel-CIC<br/>
                ● Société Générale<br/>
                ● La Banque Postale<br/>
                Même s’il existe une forte concurrence entre ces entités, elles vont toutes travailler
                de la même façon pour gérer près de 80 millions de comptes sur le territoire
                national.<br/>
                Le GBAF est le représentant de la profession bancaire et des assureurs sur tous
                les axes de la réglementation financière française. Sa mission est de promouvoir
                l'activité bancaire à l’échelle nationale. C’est aussi un interlocuteur privilégié des
                pouvoirs publics.<br/>

            </p>

    </section>
    <!-- Présenttion des acteurs -->

    <section class="actors_presentation">
          <h1>Présentation des acteurs</h1>

          <?php
              $sqlQuery = 'SELECT * FROM actors';
              $actorsStatement = $mysqlConnection->prepare($sqlQuery);
              $actorsStatement->execute();
              $actors = $actorsStatement->fetchAll();

              foreach ($actors as $actor) {
          ?>
              <div class="actor_presentation">
                <div class="img-container">
                  <img src='<?php echo $actor['logo'] ; ?>'>
                </div>
                <div class="description">
                  <h2><?php echo $actor['actor']; ?></h2>
                  <p><?php echo substr($actor['description'],1, 150); ?> (...)</p>
                  <button type="submit" class="btn btn-primary"><a href="actor_page.php?id=<?php echo $actor['id_actor']; ?>">En savoir plus</a></button>
                </div>
              </div>
              <?php
              }
              ?>

    </section>

  <?php endif; ?>

  <!-- Formulaire de connexion -->

  <?php if(!isset($loggedUser) || $loggedUser == false): ?>
  <form action="index.php" method="post" class="form-login">
      <?php if(isset($errorMessage)) : ?>
          <div class="alert alert-danger" role="alert">
              <?php echo($errorMessage); ?>
          </div>
      <?php endif; ?>

      <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" aria-describedby="username-help" placeholder="Identifiant">
      </div>
      <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Se connecter</button>
      <button type="submit" class="btn btn-primary"><a href=inscription.php>Créer un compte</a></button>

  </form>
  <?php endif; ?>


    <!-- Pied de page -->

    <?php include_once ('includes/footer.php'); ?>

</body>

</html>
