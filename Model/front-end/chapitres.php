<?php
class modelchapitres {
public function connexionbdchapitres() {
require('Model/front-end/connexion.php');
$reponse = $bdd->query('SELECT * FROM chapitre');
$reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
}
?>
