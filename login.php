<?php

$postData = $_POST;

// Si le cookie ou la session sont présentes
if(!empty($_GET["action"]) && $_GET["action"] === "unlog"){
    unset($_COOKIE['LOGGED_USER']);
    setcookie("LOGGED_USER", "", time() -3600);
    session_destroy();
    $loggedUser = false;
}else{

  if (isset($postData)) {
    if (isset($postData['username']) &&  isset($postData['password'])) {

            $loggedUser = get_logged_user(
                    $postData['username'],
                    $postData['password']
            );

           if(!$loggedUser){
                $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                    $postData['username'],
                    $postData['password']
                );
           }

           else{

              /**
               * Cookie
               */

              setcookie(
                  'LOGGED_USER',
                  $loggedUser['id_user'],
                  [
                      'expires' => time() + 365*24*3600,
                      'secure' => true,
                      'httponly' => true,
                  ]
              );

              $_SESSION['LOGGED_USER'] = $loggedUser['id_user'];
            }
        }
    }

  }

?>
