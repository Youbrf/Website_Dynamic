<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Formulaire</title>
    </head>
    <body>
    <?php require 'nav.php' ?>
        <h1>Bonjour <?php echo htmlspecialchars($_POST['prenom'])?></h1>
    <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=website;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
        $hash_pwd = password_hash($_POST['mot_de_passe'],PASSWORD_DEFAULT);
        $req = $bdd->prepare('INSERT INTO `membres`(`id`, `nom`, `prenom`, `adresse`, `code_postal`, `date_naissance`, `email`, `pseudo`, `psswd`) 
                                VALUES (\'\',:nom,:prenom,:adresse,:code_postal,:date_naiss,:email,:logi,:psswrd)');
        $req->execute(array(
            'nom'=>$_POST['nom'],
            'prenom'=>$_POST['prenom'],
            'adresse'=>$_POST['adresse'],
            'code_postal'=>$_POST['code_postal'],
            'date_naiss'=>$_POST['date_de_naissance'],
            'email'=>$_POST['adresse_mail'],
            'logi'=>$_POST['pseudo'],
            'psswrd'=>$hash_pwd
        ))

    ?>
    </body>
    <footer>

    </footer>

</html>