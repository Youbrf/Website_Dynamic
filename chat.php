<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Chat</title>
    </head>
    <body>
        <?php require 'nav.php' ?>
        <form method="post" action="chat_post.php">
            <label for="pseudo">Pseudo</label><input type="text" name='pseudo' placeholder='Pseudo ..'>
            <label for="message">Message</label><input type="text" name='message' placeholder='écrire votre message ..'>
            <input type="submit" value='Connection'>
        </form>
        <?php
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=website;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            
            $reponse = $bdd->query('SELECT * FROM chat ORDER BY ID desc LIMIT 0,10');

            while ($donnees = $reponse->fetch())
            {
                echo $donnees['ID'].'.  ' .$donnees['Pseudo'].' : ' . $donnees['chat'].'<br>'; 
            }
            $reponse->closeCursor();
        ?>
    </body>
    <footer>

    </footer>

</html>