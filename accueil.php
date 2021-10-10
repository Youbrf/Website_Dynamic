<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>The Golden Hour</title>
    </head>
    <body>
    <?php require 'nav.php' ?>
 

        <h1>The Golden Hour</h1>
        <h2>Onglerie</h2>
        <?php
            try
            {
                // On se connecte à MySQL
                $bdd = new PDO('mysql:host=localhost;dbname=jeuxvideo;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
                // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
            }

            // Si tout va bien, on peut continuer

            // On récupère tout le contenu de la table jeux_video
            $reponse = $bdd->query('SELECT nom, possesseur FROM jeux_video WHERE possesseur=\'Patrick\' ORDER BY nom');

            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
                <p>
                <?php echo $donnees['nom'].' appartient à '.$donnees['possesseur'].'<br/>'; ?>
            </p>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>


        <?php
        $monfichier = fopen('compteur.txt', 'r+');
        
        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
        $pages_vues += 1; // On augmente de 1 ce nombre de pages vues
        fseek($monfichier, 0); // On remet le curseur au début du fichier
        fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
        
        fclose($monfichier);
        
        echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
        ?>
    </body>
    <footer>

    </footer>

</html>