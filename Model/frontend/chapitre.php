<?php
class modelchapitre {
        
        public function connexionbdchapitre() {
        require('connexion.php');
        $search='SELECT * FROM chapitre WHERE id=' . $_GET["id"];
        $reponse = $bdd->prepare($search);
        $reponse->execute();
                $data = $reponse->fetchAll();
                return $data;
                $rereponseq->cloreCursor();

        }
        public function connexionbdcommentaire() {
        require('connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM commentaire WHERE idchapitre=' . $_GET["id"]);
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}


}
?>

