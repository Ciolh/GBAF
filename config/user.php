<?php

// Si le cookie est présent
if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = get_user($_COOKIE['LOGGED_USER'] ?? $_SESSION['LOGGED_USER']);
}
?>
