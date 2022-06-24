<?php

function afficherHomePage()
{
    // il va falloir détecter plus tard si l'utilisateur est connecté ou non
    if (isset($_SESSION['connected']))
        $connecte = $_SESSION['connected'];
        else $connecte = false;
    if ($connecte)
        require_once 'c:/wamp64/www/php/galeriePhoto/view/homepage/template_homepage_connected.php';
    else 
        require_once 'c:/wamp64/www/php/galeriePhoto/views/homepage/template_homepage_not_connected.php';
}
?>