<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 10/05/2017
 * Time: 10:53
 */

require 'Model.php' ;
//des que l'utilisateur clic sur le bouton submit le addcommentaire se lance
if(isset($_POST['submit'])) {
    // je me connecte a la Bdd
    $bdd = getBdd();
    // je prépare mais variable pour ma requete sql
    $content = $_POST['content'];
    $author = 1;
    $create = date('Y-m-d H:i:s');
    $post_id = 1;
    // je fait une requete sql preparée
    $stmt = $bdd->prepare("INSERT INTO comments (content,author_id,post_id,date) VALUES (:content,:author_id,:post_id,:date)");
    // je mais mais variable dans ma requete
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':author_id', $author);
    $stmt->bindParam(':post_id', $post_id);
    $stmt->bindParam(':date', $create);
    $stmt->execute();


    header("Location: vuePost.php");

}
?>