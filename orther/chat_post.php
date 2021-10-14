<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=website;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $req = $bdd->prepare('INSERT INTO `chat`(`ID`, `Pseudo`, `chat`) VALUES (\'\', :pseudo, :chat)');
    $req -> execute(array(
        'pseudo' => $_POST['pseudo'],
        'chat' => $_POST['message']
    ))
?>

<?php
// Effectuer ici la requête qui insère le message
// Puis rediriger vers minichat.php comme ceci :
header('Location: chat.php');
?>

