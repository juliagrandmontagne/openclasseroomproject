<?php
class modeltableaudebord 
{
        public function connexionbdtableaudebord() {
        require('Model/front-end/connexion.php');
        $reponse = $bdd->query('SELECT * FROM chapitre');
        $reponse->execute();
                $data = $reponse->fetchAll();
                return $data;
                $rereponseq->cloreCursor();}
        public function connexionbdmail() {
                      require('Model/front-end/connexion.php');
                        $reponse = $bdd->query('SELECT * FROM contact');
                        $reponse->execute();
                        $data = $reponse->fetchAll();
                        return $data;
                       $rereponseq->cloreCursor();}
                
                
}
?>