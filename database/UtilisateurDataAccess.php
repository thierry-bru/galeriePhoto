<?php
require_once 'c:/wamp64/www/php/galeriePhoto/models/Utilisateur.php';
class UtilisateurDataAccess
{
    public static function create($pdo,$utilisateur):bool
    {
        $sql="INSERT INTO UTILISATEUR(`pseudo`,`email`,`motdepasse`)
            VALUES ('$utilisateur->pseudo',
            '$utilisateur->email',
            '$utilisateur->motdepasse')";
        echo "<br>UtilisateurDataAccess::create - sql=$sql";
        try {
            $pdo->exec($sql);
            return true;
        } catch (PDOException $exception) {
            return false;
        }
    }
    public static function checkPassword($pdo,$email,$motdepasse):bool
    {
        return true;
    }
}

?>