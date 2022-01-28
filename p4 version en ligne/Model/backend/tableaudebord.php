<?php
class modeltableaudebord 
{
        public function connexionbdtableaudebord() {
        require('Model/frontend/connexion.php');
        $reponse = $bdd->query('SELECT * FROM chapitre WHERE brouillon =0');
        $reponse->execute();
                $data = $reponse->fetchAll();
                return $data;
                $rereponseq->cloreCursor();}
       
        public function connexionbdmail() {
        require('Model/frontend/connexion.php');
        $reponse = $bdd->query('SELECT * FROM contact');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
                
                
}
?>