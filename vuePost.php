<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 09/05/2017
 * Time: 10:56
 */
session_start();
require 'Model.php';
$id = isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : null;

if(is_null($id)){
    header("Location: vueAccueil.php");
}

$billets = getBillets($id);
$commentaires = getCommentaires($id);


?>
<?php $titre = 'Mon Blog'; ?>

<?php ob_start(); ?>



    <article>
        <header>
            <h1 class="titreBillet"><?= $billets['title'] ?></h1>
            <time><?= $billets['id'] ?></time>
        </header>
        <p><?= $billets['content'] ?></p>
    </article>



<?php
if(is_array($commentaires)){
foreach ($commentaires as $commentaire): ?>


    <article>
        <header>
            <h2 class="titreComment"><?= $commentaire['nickname'] ?></h2>
           <p> <?php echo $commentaire['content'] ?></p>
            <time><?= $commentaire['date'] ?></time>
        </header>


    </article>

    <hr />

<?php endforeach;
}
?>

<?php if ($_SESSION['pseudo'] == ""){}else{ ?>

    <body>

      <form method="post" action="addCommentaire.php">

       <label for="content">Votre Commantaire:</label><br/>
       <textarea name="content" cols="20" rows="7"></textarea><br/><br/>
       <input type="submit" name="submit" value="Poster" />

      </form>

    </body>
    <hr />
<?php }  ?>



<?php $content = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>
