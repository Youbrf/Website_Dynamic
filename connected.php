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
         try
         {
             $bdd = new PDO('mysql:host=localhost;dbname=website;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
         }
         catch(Exception $e)
         {
                 die('Erreur : '.$e->getMessage());
         }
            //  Récupération de l'utilisateur et de son pass hashé
            $req = $bdd->prepare('SELECT * FROM membres WHERE pseudo = :pseudo');
            $req->execute(array(
                'pseudo' => $_POST['pseudo']));
            $resultat = $req->fetch();
            echo $resultat['pwd'];

            // Comparaison du pass envoyé via le formulaire avec la base
            $isPasswordCorrect = password_verify($_POST['password'], $resultat['pwd']);

            if (!$resultat)
            {
                echo ' 1 Mauvais identifiant ou mot de passe !';
            }
            else
            {
                if ($isPasswordCorrect) {
                    session_start();
                    $_SESSION['id'] = $resultat['id'];
                    $_SESSION['pseudo'] = $_POST['pseudo'];
                    echo 'Vous êtes connecté !';
                }
                else {
                    echo 'Mauvais identifiant ou mot de passe !';
                }
            }
        ?>



        //<?php
            
        //    $hash_password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        //    if ($_POST['login'] ==('Youssef') AND $_POST['password'] ==('Safari')){
        //       echo '<h1>Bravo '. $_POST['login'].' Vous êtes Connecte sur votre compte</h1>';
        //   }else{
        //        echo "<h2>Désoler, mais votre login ou votre mot de passe sont incorrecte. <br> <a href=\"connection.php\">Réessayer</a> </h2>";
        //        echo $hash_password;
        //    }
        ?>
        
    </body>
    <footer>

    </footer>

</html>