
<header>
    
    <ul class="flex-container">
        <li class="flex-item"><img src='images\Logo.png'></li>
        <li class="flex-item">
            
            <section class="actors_presentation">

                <?php $mysqlConnection = new PDO('mysql:host=localhost;dbname=oc_gbaf;charset=utf8', 'root', 'root'); ?>

                <?php
        
                    $sqlQuery = 'SELECT * FROM users';
                    $usersStatement = $mysqlConnection->prepare($sqlQuery);
                    $usersStatement->execute();
                    $users = $usersStatement->fetch();

                    foreach ($users as $user) : ?>

                <?php if (isset($loggedUser)) : ?>
                
                    <img src= <?php echo $user['picture'] ; ?>>
                    <button><?php echo $user['username']; ?></button>

                <?php endif; ?>
                <?php endforeach ?>
            </section>
        </li>
    </ul>
        
</header>