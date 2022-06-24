<?php
require_once './controllers/controllers.php';
require_once './database/database.php';
$pdo = pdo_connect();
session_start();
if ((!isset($_REQUEST['command']))
||
($_REQUEST['command']=='homepage'))
{
    afficherHomePage();
}
else
{
    if (($_REQUEST['command']=='login')
    &&
    (UtilisateurDataAccess::checkPassword($pdo,$_POST['email'],$_POST['motdepasse'])))
    {
        $_SESSION['connected']=true;
        afficherHomePage();
    }
}



?>