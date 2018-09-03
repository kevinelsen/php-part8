<?php
if (!empty($_POST['login'])) {
    setcookie($_POST['login'], 'NewCookie', time() + 365 * 24 * 3600, '/', null, 0, 1);
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <form name="login" action="index.php" method="POST">
            <label for="login">login : </label>
            <input type="text" name="login" id="login" />
            <input type="submit" name="submit" value="Envoyer" />           
        </form>
        <p><?php
            if (!empty($_POST['login'])) {
                echo $_COOKIE[$_POST['login']];
            }
            ?></p>
    </body>
</html>
