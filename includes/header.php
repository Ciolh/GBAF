
<header class="flex-container">

        <div class="image-logo"><img src='images\Logo.png'></div>
        <div class="header-user">
            
            <section class="actors_presentation">
            
            <?php
            try
            {
            $mysqlConnection = new PDO('mysql:host=localhost;dbname=oc_gbaf;charset=utf8', 'root', 'root');
            }
            catch (Exception $e)
            {
            die('Erreur : ' . $e->getMessage());
            }
        ?>

                <?php
        
        $sqlQuery = 'SELECT * FROM users';
        $usersStatement = $mysqlConnection->prepare($sqlQuery);
        $usersStatement->execute();
        $users = $usersStatement->fetchAll();

                    foreach ($users as $user) : ?>

                <?php if (isset($user)) : ?>
                
                    <?php echo $user['prenom'] ; ?>
                    <?php echo $user['nom']; ?>

                <?php endif; ?>
                <?php endforeach ?>
            </section>
        </div>
        
</header>