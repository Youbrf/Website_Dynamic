<?php 
    session_start();
    if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
    {
        echo '<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <link rel="stylesheet" href="style.css">
                <title>Connection</title>
            </head>
            <body>';
            require 'nav.php';
            echo '
                <h1>Bonjour ' . $_SESSION['pseudo'] .'</h1>
                <form action="deconnexion.php">
                    <input type="submit" name="deconnexion" value="deconnexion">
                </form>
            </body>
            <footer>

            </footer>

        </html>';
    }else{
        echo
        '<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <link rel="stylesheet" href="style.css">
                <title>Connection</title>
            </head>
            <body>';
            require 'nav.php';
                echo '
                <form method="post" action="connected.php">
                    <label for="pseudo">Login</label><input type="text" name="pseudo" placeholder="GoldenHour">
                    <label for="password">Password</label><input type="password" name="password" placeholder="PassWord21!">
                    <input type="submit" value="Connection">
                </form>
            </body>
            <footer>

            </footer>

        </html>';
    }
    
   

    // Suppression des cookies de connexion automatique
   // setcookie('login', '');
   // setcookie('pass_hache', '');
?>
