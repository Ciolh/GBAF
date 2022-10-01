<?php
try
{
	$mysqlConnection = new PDO('mysql:host=localhost;dbname=oc_gbaf;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
// Validation du formulaire
if (isset($_POST['username']) &&  isset($_POST['password'])) {

    $sqlQuery = 'SELECT * FROM users WHERE username = :username AND password = :password';

$showUser = $mysqlConnection->prepare($sqlQuery);
$userExecute = $showUser->execute([
    'username' => $_POST['username'],
    'password' => $_POST['password'],
]);

$user = $showUser->fetch();

    echo ($user['nom'].'<br />'.$user['prenom']);
}
?>

<!-- Affichage formulaire si non identifié -->
<?php if(!isset($user)): ?>
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
        Bonjour <?php echo $user['nom'].$user['prenom'] ; ?> et bienvenue sur le site !
    </div>
    <button type="submit" class="btn btn-primary"><a href=parametre.php?id=<?php echo $user['id_user']; ?>>Paramètres</a></button>
<?php endif; ?>