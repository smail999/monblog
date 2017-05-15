<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 04/05/2017
 * Time: 10:22
 */
$titre = 'Mon Blog'; ?>

<?php ob_start() ?>
    <p>Une erreur est survenue : <?= $msgErreur ?></p>
<?php $content = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>