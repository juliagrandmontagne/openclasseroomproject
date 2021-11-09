<?php
class modelchapitre {
        
        public function connexionbdchapitre() {
        require('Model/front-end/connexion.php');
        $search='SELECT * FROM Chapitre WHERE id=' . $_GET["id"];
        $reponse = $bdd->query($search);
        $reponse->execute();
                $data = $reponse->fetchAll();
                return $data;
                $rereponseq->cloreCursor();

        }
        public function connexionbdcommentaire() {
        require('Model/front-end/connexion.php');
        $reponse = $bdd->query('SELECT * FROM commentaire WHERE idchapitre=' . $_GET["id"]);
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}


}
?>

