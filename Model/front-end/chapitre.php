<?php
class mChapitre {
public function lafonction() {
require('Model/front-end/connexion.php');
$reponse = $bdd->query('SELECT * FROM Chapitre');
$reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
}
?>
