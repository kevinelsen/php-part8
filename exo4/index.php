<?php
if (isset($_POST['login']) && isset($_POST['password'])) {
    setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, 0, 1);
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/', null, 0, 1);
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice4</title>
    </head>
    <body>
        <?php
        if (isset($_POST['login']) && isset($_POST['password'])) {
            echo 'Id: ' . $_COOKIE['login'];
        }
        ?>
        <p>
            <?php
            if (isset($_POST['login']) && isset($_POST['password'])){
                echo 'password: ' . $_COOKIE['password'];
            } ?>
        </p>
        <form name="login" action="index.php" method="POST">
            <label for="login">login : </label>
            <input type="text" name="login" id="login" />
            <label for="password">Votre Nom : </label>
            <input type="text" name="password" id="password" />
            <input type="submit" name="submit" value="Envoyer" />           
        </form>
        <!--Cookies , le timer , le paramètre true et une mini sécuritée en plus -->
    </body>
</html>
