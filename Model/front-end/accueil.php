<?php
class mAccueil {
    public function lafonctiondeux() {
    require('Model/front-end/connexion.php');
    $reponse = $bdd->query('SELECT * FROM Chapitre');
    $reponse->execute();
            $data = $reponse->fetchAll();
            return $data;
            $rereponseq->cloreCursor();}
    }

?>