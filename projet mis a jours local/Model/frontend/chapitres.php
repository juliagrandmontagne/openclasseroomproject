<?php
class modelchapitres {
public function connexionbdchapitres() {
require('connexion.php');
$reponse = $bdd->prepare('SELECT * FROM chapitre WHERE brouillon =0');
$reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
}
?>
