<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Connection</title>
    </head>
    <body>
        <?php require 'nav.php' ?>
        <form method='get' action="testsql.php">
            <label for="possesseur">possesseur</label><input type="text" name='possesseur'>
            <label for="prix_max">prix</label><input type="int" name="prix_max">
            <input type="submit" value='rechercher'>
        </form>
        <?php
        
        if(isset($_GET['possesseur'])){
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=jeuxvideo;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }

            $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ?  AND prix <= ? ORDER BY prix');
            $req->execute(array($_GET['possesseur'], $_GET['prix_max']));

            echo '<ul>';
            while ($donnees = $req->fetch())
            {
                echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
            }
            echo '</ul>';

            $req->closeCursor();

            
        }else{
            echo '';
        }
        ?>    
    </body>
    <footer>

    </footer>

</html>