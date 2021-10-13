<?php
function getPosts()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=website;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $req = $db->query('SELECT id, title, content, DATE_FORMAT(create_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY create_date DESC LIMIT 0, 5');

    return $req;
}
