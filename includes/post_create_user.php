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

<?php $mysqlConnection = new PDO('mysql:host=localhost;dbname=oc_gbaf;charset=utf8', 'root', 'root');

$sqlquery = 'INSERT INTO users(nom, prenom, username, password, reponse) VALUES (:nom, :prenom, :username, :password, :reponse)';
$insertUsersStatement = $mysqlConnection->prepare($sqlQuery);
$insertUsersStatement ->execute([
        'nom' => $name,
        'prenom' => $prenom,
        'username' => $username,
        'password' => $password,
        'reponse' => $reponse,
])

?>