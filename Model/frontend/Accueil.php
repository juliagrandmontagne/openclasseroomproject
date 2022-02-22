<?php
class modelaccueil {
    public function connexionbdaccueil() {
    require('connexion.php');
    $reponse = $bdd->prepare('SELECT * FROM chapitre WHERE brouillon =0 ORDER BY ID DESC LIMIT 0,1');
    $reponse->execute();
            $data = $reponse->fetchAll();
            return $data;
            $reponse>cloreCursor();}
    }


?>