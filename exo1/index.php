<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1</title>
    </head>
    <body>
        //affichage User Agent
        <p><?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
        //affichage adresse IP
        <p><?php echo $_SERVER['REMOTE_ADDR']; ?></p>
        //affichage nom du serveur
        <p><?php echo $_SERVER['SERVER_NAME']; ?></p>
    </body>
</html>