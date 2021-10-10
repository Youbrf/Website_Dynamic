<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Hello <?php echo $_POST['login']?></title>
    </head>
    <body>
        <?php require 'nav.php' ?>
        <?php
            if ($_POST['login'] ==('Youssef') AND $_POST['password'] ==('Safari')){
                echo '<h1>Bravo '. $_POST['login'].' Vous êtes Connecte sur votre compte</h1>';
            }else{
                echo "<h2>Désoler, mais votre login ou votre mot de passe sont incorrecte. <br> <a href=\"connection.php\">Réessayer</a> </h2>";
            }
        ?>
        
    </body>
    <footer>

    </footer>

</html>