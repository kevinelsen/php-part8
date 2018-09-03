<!--Page 1 -->
<?php 
//Démarrage de $_session qui permet de transmettre les données du client
session_start();
$_SESSION['fistname'] = 'jean';
$_SESSION['lastname'] = 'luc';
$_SESSION['age'] = '42';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
    <li><a href="index1.php">Clique içi !</a></li>
</body>
</html>