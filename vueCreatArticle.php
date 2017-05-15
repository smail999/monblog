<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 09/05/2017
 * Time: 14:54
 */
session_start();
?>

<?php $titre = 'Mon Blog'; ?>

<?php ob_start(); ?>


<html>

<body>

<form method="post" action="addpost.php">
    <label for="title">Votre titre:</label><br/>
    <input type="text" name="title" /><br/>
    <label for="content">Votre contenue:</label><br/>
    <textarea name="content" cols="20" rows="7"></textarea><br/><br/>
    <input type="submit" name="submit" value="Poster" />

</form>

</body>



<?php $content = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>
