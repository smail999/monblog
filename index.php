<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 04/05/2017
 * Time: 09:00
 */



require_once 'Model.php';

try {
    $connexion=0;

    $billets = getAllBillets();

    require 'vueAccueil.php';


}
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}
?>

