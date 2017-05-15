<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 04/05/2017
 * Time: 09:41
 */
session_start();
require_once 'Model.php';
require_once 'index.php';
$billets = getAllBillets();

?>
<?php $titre = 'Mon Blog'; ?>
<?php if ($connexion== 0){
    $_SESSION['pseudo'] = "";
    $connexion=1;
}
    ?>
<?php ob_start(); ?>
<?php if ($_SESSION['pseudo'] == ""){ ?>
    <a href="vueConnexion.php"> Connexion </a><br/>
    <?php }else{ ?>
    <a href="vueCreatArticle.php"> Ajouter un Article </a><br/>
    <form method="post" action="Deconnexion.php">
        <input type="submit" name="deconnexion" value="Deconnexion" />

    </form>
    <?php } ?>

<!-- ce foreach affiches les articles -->

<?php foreach ($billets as $billet): ?>
    <article>
        <header>
            <?php ?>
            <h1 class="titreBillet"><?=  $billet['title']; ?></h1>
            <time> <?= $billet['date'] ?> </time>
        </header>
        <p class="contentace"><?= (strlen( $billet['content']) > 150) ? substr( $billet['content'],0,150)."...": $billet['content']; ?></p>
    </article>
    <a href="vuePost.php?id=<?php echo $billet['id'];?>">lir la suite</a>

    <hr />
<?php endforeach; ?>


<?php $content = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>