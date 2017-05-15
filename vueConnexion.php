<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 04/05/2017
 * Time: 09:41
 */

require_once 'Model.php';




?>
<?php $titre = 'Mon Blog'; ?>

<?php ob_start(); ?>

<html>

<body>

<form method="post" action="connexion.php">

    <label for="title">Votre Pseudo:</label><br/>

    <input type="text" name="pseudo" /><br/>

    <label for="content">Votre Mdp:</label><br/>

    <input type="text" name="pass" /><br/>

    <input type="submit" name="Connection" value="Connection" />

</form>

</body>



<?php $content = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>


