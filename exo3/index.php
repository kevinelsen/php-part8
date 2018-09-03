<?php
$cookietime = time() + 60 + 60 * 24;
setcookie('login', 'password', $cookietime);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        <form name="login" action="index.php" method="POST" enctype="multipart/form-data">
            <label for="login">login : </label>
            <input type="text" name="login" id="login" />
            <label for="password">Votre Nom : </label>
            <input type="text" name="password" id="password" />
            <input type="submit" name="submit" value="Envoyer" />           
        </form>
    <li><a href="index.php">Clique içi !</a></li>
</body>
</html>