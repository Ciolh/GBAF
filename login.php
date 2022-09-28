<?php

// Validation du formulaire
if (isset($_POST['username']) &&  isset($_POST['password'])) {
    foreach ($users as $user) {
        if (
            $user['username'] === $_POST['username'] &&
            $user['password'] === $_POST['password']
        ) {
            $loggedUser = [
                'username' => $user['username'],
                'password' => $user['password']
            ];
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $_POST['username'],
                $_POST['password']
            );
        }
    }
}
?>

<!-- Affichage formulaire si non identifié -->
<?php if(!isset($loggedUser)): ?>
<form action="index.php" method="post">

    <!-- En cas d'erreur -->
    
    <?php if(isset($errorMessage)) : ?>
        <div class="Error" role="alert">
            <?php echo $errorMessage; ?>
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

<!-- Si bien identifié -->

<?php else: ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo $loggedUser['username']; ?> et bienvenue sur le site !
    </div>
<?php endif; ?>