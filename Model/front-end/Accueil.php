<?php
class mAccueil {
    public function lafonctiondeux() {
    require('Model/front-end/connexion.php');
    $reponse = $bdd->query('SELECT * FROM Accueil');
    $reponse->execute();
            $data = $reponse->fetchAll();
            return $data;
            $rereponseq->cloreCursor();}
    }

?>