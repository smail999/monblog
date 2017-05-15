<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 10/05/2017
 * Time: 09:05
 */
require 'Model.php' ;
//des que l'utilisateur clic sur le bouton submit le addpost se lance
if(isset($_POST['submit'])) {
    // je me connecte a la Bdd
    $bdd = getBdd();
    // je prépare mais variable pour ma requete sql
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = 1;
    $create = date('Y-m-d H:i:s');
    $category = 1;
    // je fait une requete sql preparée
    $stmt = $bdd->prepare("INSERT INTO posts (author_id,title,content,date,category_id) VALUES (:author_id,:title,:content,:date,:category_id)");
    // je mais mais variable dans ma requete
    $stmt->bindParam(':author_id', $author);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':date', $create);
    $stmt->bindParam('category_id', $category);
    $stmt->execute();


    header("Location: vueAccueil.php");

}
    ?>