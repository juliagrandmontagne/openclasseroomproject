<?php
class modelacceuil
{
public function getdataacceuil ()
    {
    //require('Model/front-end/connexion.php');
    $req= $bdd->prepare('SELECT * FROM Acceuil');
    $req->execute();
    $data = $req-> fetchAll();
    return $data;
    $req->cloreCursor();
    }
}
?>