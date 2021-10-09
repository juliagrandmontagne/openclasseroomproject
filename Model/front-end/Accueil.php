<?php
class modelaccueil {
    public function connexionbdaccueil() {
    require('Model/front-end/connexion.php');
    $reponse = $bdd->query('SELECT * FROM Chapitre ORDER BY ID DESC LIMIT 0,1');
    $reponse->execute();
            $data = $reponse->fetchAll();
            return $data;
            $rereponseq->cloreCursor();}
    }


?>