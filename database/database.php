<?php
require_once 'ImageDataAccess.php';
require_once 'PhotoDataAccess.php';
require_once 'UtilisateurDataAccess.php';

function pdo_connect()
{
    $host='localhost';
    $user='root';
    $password='';
    $name='webimage';
    try {
        return PDO("mysql:host=$host:dbname=$name;charset=utf8",$user,$password);
    } 
    catch (PDOException $exception) {
        echo $exception->getMessage();
        die('CONNECTION ECHOUEE');
    }
}
?>