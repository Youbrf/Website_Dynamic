<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Connection</title>
    </head>
    <body>
        <?php require 'nav.php' ?>
        <form method="post" action="connected.php">
            <label for="login">Login</label><input type="text" name='login' placeholder='GoldenHour'>
            <label for="password">Password</label><input type="password" name='password' placeholder='PassWord21!'>
            <input type="submit" value='Connection'>
        </form>
    </body>
    <footer>

    </footer>

</html>