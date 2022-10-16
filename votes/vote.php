<?php

$sqlQuery = 'SELECT * FROM vote WHERE id_actor=:id_actor AND vote = 1';
$voteQuery = $mysqlConnection->prepare($sqlQuery);
$voteQuery ->execute([
        'id_actor' => $_GET['id'],
]);

$votes_positifs = $voteQuery->rowCount();

$sqlQuery = 'SELECT * FROM vote WHERE id_actor=:id_actor AND vote = 0';
$voteQuery = $mysqlConnection->prepare($sqlQuery);
$voteQuery ->execute([
        'id_actor' => $_GET['id'],
]);

$votes_negatifs = $voteQuery->rowCount();

?>
<div class= "vote-buttons">

<!--Vote like -->
    <form method="post" action ="votes/post_create_vote.php?vote=1">

    <div class="mb-3 visually-hidden">

        <input class="form-control" type="hidden" name="id_acteur" value="<?php echo $actor['id_actor']; ?>" />

    </div>

    <div class="vote-like">
        <button type="submit" class="btn btn-primary">Like <?php echo $votes_positifs; ?></button>
    </div>

    </form>

<!--Vote dislike -->
    <form method="post" action ="votes/post_create_vote.php?vote=0">

    <div class="mb-3 visually-hidden">

        <input class="form-control" type="hidden" name="id_acteur" value="<?php echo $actor['id_actor']; ?>" />

    </div>

    <div class="vote-dislike">
        <button type="submit" class="btn btn-primary">Dislike <?php echo $votes_negatifs; ?></button>
    </div>

    </form>

</div>
