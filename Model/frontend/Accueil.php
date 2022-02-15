<?php
class modelaccueil {
    public function connexionbdaccueil() {
    require('Model/frontend/connexion.php');
    $reponse = $bdd->prepare('SELECT * FROM Chapitre WHERE brouillon =0 ORDER BY ID DESC LIMIT 0,1');
    $reponse->execute();
            $data = $reponse->fetchAll();
            return $data;
            $reponse>cloreCursor();}
    }


?>