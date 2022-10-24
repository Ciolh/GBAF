<header class="flex-container">

        <div class="image-logo">
        <a href="./index.php">
            <img src='./images/logo.png'>
          </a>
        </div>
        <div class="header-user">


              <?php if(isset($loggedUser) && $loggedUser !== false): ?>

                    <h3><?php echo $loggedUser['prenom'] ; ?>

                    <?php echo $loggedUser['nom']; ?></h3>
  
                <?php endif; ?>

                <!-- Si bien identifié -->

                <?php if(isset($loggedUser) && $loggedUser !== false): ?>

                    <button type="submit" class="btn btn-primary"><a href='parametre.php?id=<?php echo $loggedUser['id_user']; ?>'>Paramètres</a></button>
                    <button type="submit" class="btn btn-primary"><a href='./index.php?action=unlog'>Se déconnecter</a></button>

                <?php endif; ?>

        </div>

</header>
