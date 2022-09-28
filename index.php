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
    
    <!--Tête de page -->
    <?php include_once ('includes/header.php'); ?>
    
    <!--Log DB -->
    <?php

        try
        {
            $db = new PDO('mysql:host=localhost;dbname=oc_gbaf;charset=utf8', 'root', 'root');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    ?>

    <!-- connexion -->

    <?php include_once('login.php'); ?>
    
    <!--Corps de page-->

    <section class="presentation">
        <div class="titre_presentation"><h1>Bienvenu sur le réseaux banquaire GBAF</h1></div>

        <div class="texte_présentation"><h2>Présentation GBAF</h2></div>
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

    <?php $mysqlConnection = new PDO('mysql:host=localhost;dbname=oc_gbaf;charset=utf8', 'root', 'root'); ?>

    <?php
        $sqlQuery = 'SELECT * FROM actors';
        $actorsStatement = $mysqlConnection->prepare($sqlQuery);
        $actorsStatement->execute();
        $actors = $actorsStatement->fetchAll();
    
        foreach ($actors as $actor) {
    ?>
            <img src= <?php echo $actor['logo'] ; ?>>
            <p><?php echo $actor['actor']; ?></p>
            <p><?php echo $actor['description'] ; ?></p>
        
        <?php
        }
        ?>

    </section>
    
    <!-- Pied de page -->
 
    <?php include_once ('includes/footer.php'); ?>
    
</body>

</html>

<!-- Envoyer l'id de l'acteur séléctionner à la page actor_page
     Comment envoyer un parametre d'une page a une autre ?
        1/ Formulaire 
        2/ Directeument dans l'url  
        
    Dans la page actor_php
        1/ Tu récupères l'id renvoyé par la formulaire
        2/ Tu récupères les informations de la base de donnée à partir de l'id (select * from actors where $POST['id'] = actors.id)
        3/ Tu affiches les infos 
        4/ 

-->


