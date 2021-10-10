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
        <p>Voici les informations que vous avez rempli :</p><br>
        <?php echo $_POST['nom']; ?> <br>
        <?php echo $_POST['adresse']; ?><br>
        <?php echo $_POST['code_postal']; ?><br>
        <?php echo $_POST['date_de_naissance']; ?><br> 
        <?php echo $_POST['adresse_mail']; ?><br>
        <?php echo $_POST['login']; ?><br>
        <?php echo $_POST['mot_de_passe']; ?><br>
    </body>
    <footer>

    </footer>

</html>