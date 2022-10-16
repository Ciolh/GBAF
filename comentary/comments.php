<!-- affichage des commentaires -->
<?php

    $sqlQuery = 'SELECT * FROM post LEFT JOIN users ON post.id_user=users.id_user where post.id_acteur=:id_acteur';
    $comentaryStatement = $mysqlConnection->prepare($sqlQuery);
    $comentaryStatement->execute([
                'id_acteur' => $actor['id_actor'],
            ]
            );
    $comentarys = $comentaryStatement->fetchAll();
?>

    <!-- Formulaire de commentaire-->
        
    <div class="comments_form">
        <h2>Laissez un commentaire</h2><br />
        <form method="post" action ="./comentary/post_create_post.php">

            <div class="mb-3 visually-hidden">
                <input class="form-control" type="hidden" name="id_acteur" value="<?php echo $actor['id_actor']; ?>" />
            </div>

            <div class="mb-3">
                <label for="post" class="form-label">Commentaire</label><br />
                <textarea type="text" class="text" id="post" name="post" aria-describedby="post-help" aria-placeholder="Laissez un commentaire" rows="10" cols="50"></textarea><br />
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>

        </form>
    </div>

<!-- affichage des commentaires -->
    <div class= "comments-title"><h2>Commentaires</h2></div>


        <?php foreach ($comentarys as $comentary) { ?>
        <div class="comments">
            <p><?php echo $comentary['date_add']; ?></p>
            <h3><?php echo $comentary['prenom']; ?></h3>
            <p><?php echo $comentary['post'] ; ?></p>
        </div>
    
<?php } ?>