<!-- affichage des commentaires -->
<?php

    $sqlQuery = 'SELECT * FROM post LEFT JOIN users ON post.id_user=users.id_user where post.id_actor=:id_actor';
    $comentaryStatement = $mysqlConnection->prepare($sqlQuery);
    $comentaryStatement->execute([
                'id_actor' => $actor['id_actor'],
            ]
            );
    $comentarys = $comentaryStatement->fetchAll();


    $sqlQuery = 'SELECT * FROM post WHERE id_actor=:id_actor';
    $commentCountQuery = $mysqlConnection->prepare($sqlQuery);
    $commentCountQuery ->execute([
        'id_actor' => $actor['id_actor'],
]);

    $vote_count = $commentCountQuery->rowCount();

?>

    <!-- affichage des commentaires -->
<div class = "comments">
    <div class= "comments-title"><h2><?php echo $vote_count ; ?> Commentaires</h2>
    
    <!-- Votes -->
    <?php include_once('votes/vote.php') ; ?>
    </div>

    <!-- Formulaire de commentaire-->
        
    <div class="comments_form">
        <h2>Laissez un commentaire</h2><br />
        <form method="post" action ="./comentary/post_create_post.php">

            <div class="mb-3 visually-hidden">
                <input class="form-control" type="hidden" name="id_actor" value="<?php echo $actor['id_actor']; ?>" />
            </div>

            <div class="mb-3">
                <label for="post" class="form-label">Commentaire</label><br />
                <textarea type="text" class="text-post" id="post" name="post" aria-describedby="post-help" aria-placeholder="Laissez un commentaire" rows="10" cols="40"></textarea><br />
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>

        </form>
    </div>

        <?php foreach ($comentarys as $comentary) { ?>
        <div class="comment">
            <h3><?php echo $comentary['prenom']; ?></h3>
            <p><?php echo $comentary['date_add']; ?></p>
            <p><?php echo $comentary['post'] ; ?></p>
    </div>
<?php } ?>

</div>