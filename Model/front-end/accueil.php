<?php
class mAccueil {
    public function lafonctiondeux() {
    require('Model/front-end/connexion.php');
    $reponse = $bdd->query('SELECT * FROM Chapitre /*ORDER BY id DESC LIMIT 0,1*/');
    $reponse->execute();
            $data = $reponse->fetchAll();
            return $data;
            $rereponseq->cloreCursor();}
    }

?>