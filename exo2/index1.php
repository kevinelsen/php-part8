<!--Page 2 -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>        
        <?php if(!empty($_SESSION['fistname'])){ ?>
        <p><?= $_SESSION['fistname'] ?></p>  
        <?php } ?>
        <?php if(!empty($_SESSION['lastname'])){ ?>
        <p><?= $_SESSION['lastname'] ?></p>
        <?php } ?>
        <?php if(!empty($_SESSION['age'])){ ?>
        <p><?= $_SESSION['age'] ?></p>
        <?php } ?>
    <li><a href="index.php">Clique içi !</a></li>
</body>
</html>