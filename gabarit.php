<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 04/05/2017
 * Time: 09:51
 */
?>
<!-- la basse html de tout mais page -->
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title><?= $titre ?></title>   <!-- Élément spécifique -->
</head>
<body>
<div id="global">
    <header>
        <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
        <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
    </header>
    <div id="content">
        <?= $content ?>   <!-- Élément spécifique -->
    </div>
    <footer id="piedBlog">
        Blog réalisé avec PHP, HTML5 et CSS.
    </footer>
</div> <!-- #global -->
</body>
</html>
