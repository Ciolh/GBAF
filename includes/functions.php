<?php

function get_user($id){

try
{
	$mysqlConnection = new PDO('mysql:host=localhost;dbname=oc_gbaf;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


    $sqlQuery = 'SELECT * FROM users WHERE id_user= :id_user';

$showUser = $mysqlConnection->prepare($sqlQuery);
$showUser->execute([
    'id_user' => $id
]);

$user = $showUser->fetch();

    return $user;
}




function get_actor($id){

try
{
	$mysqlConnection = new PDO('mysql:host=localhost;dbname=oc_gbaf;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$sqlQuery = 'SELECT * FROM actors where id_actor= :id_actor';
    $actorsStatement = $mysqlConnection->prepare($sqlQuery);
    $actorsStatement->execute([
                'id_actor' => $_GET['id'],
            ]
            );
    $actors = $actorsStatement->fetch();

    return $actors;
        }



function get_logged_user($username, $password){

    try
{
	$mysqlConnection = new PDO('mysql:host=localhost;dbname=oc_gbaf;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

    $sqlQuery = 'SELECT * FROM users where username= :username AND password= :password';
    $actorsStatement = $mysqlConnection->prepare($sqlQuery);
    $actorsStatement->execute([
                'username' => $username,
                'password' => $password
            ]
            );
    $user = $actorsStatement->fetch();

    return $user;


}
