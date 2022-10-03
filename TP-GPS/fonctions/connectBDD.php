<?php function Connexion($serveur, $user, $passwd, $bdd)
{
    try {
        return new PDO('mysql:host=' . $serveur . ';dbname=' . $bdd, $user, $passwd);
    } catch (Exception $e) {
        echo $e;
    }
}
