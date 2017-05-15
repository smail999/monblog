<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 12/05/2017
 * Time: 10:03
 */
session_start();
//des que l'utilisateur clic sur le bouton deconnexion les donné de la session change
if(isset($_POST['deconnexion'])) {
    $_SESSION['pseudo'] = "";
    $_SESSION['id'] = 0;
    header("Location: vueAccueil.php");
}

?>