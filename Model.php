<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 04/05/2017
 * Time: 09:46
 */
//récupérer tous les 5 dernier article
function getAllBillets()
{

    $bdd = getBdd();

    $billets = $bdd->query('SELECT * FROM posts ORDER  BY Id DESC LIMIT 5');

    return $billets;

}
//récupérer un article via l'id
function getBillets ($idBillet){

    $bdd = getBdd();

    $billet = $bdd->prepare('select id as id, date as date, title as title, content as content from posts where id=?');

    $billet->execute(array($idBillet));

    if ($billet->rowCount() == 1) {

        return $billet->fetch();  // Accès à la première ligne de résultat

    }
    else{
        throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
}
}

//récupérer tous les commentaire d'un article
function getCommentaires($idBillet) {

    $bdd = getBdd();
    $commentaire = $bdd->prepare('SELECT users.nickname , comments.content ,comments.date FROM users INNER JOIN comments ON comments.author_id = users.id WHERE comments.post_id=?');



    $commentaire->execute(array($idBillet));


    if ($commentaire->rowCount() > 0) {

        return $commentaire->fetchAll();

    }
    else{

        return"Aucun commentaire ";

    }
}

//récupérer le nom de d'un utilisateur
function getnickname($idBillet){

    $bdd = getBdd();
    $id = $idBillet ;
    var_dump($id);
    $nickname = $bdd->prepare(' SELECT nickname FROM users, comments WHERE comments.author_id=:id = users.id =:id ');
    $nickname->bindParam(':id', $id);
    $nickname->execute();


        return $nickname->fetch() ;



}
//connexion a la Bdd
function getBdd(){
    $bdd = new PDO('mysql:host=localhost;dbname=blogweb;charset=utf8','blogweb', 'blogweb');
    return $bdd ;
}


?>