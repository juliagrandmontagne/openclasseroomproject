<?php
class modelchapitres {
public function connexionbdchapitres() {
require('Model/frontend/connexion.php');
$reponse = $bdd->query('SELECT * FROM chapitre WHERE brouillon =0');
$reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
}
?>
