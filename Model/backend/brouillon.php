
<?php
class modelbrouillon {
public function connexionbrouillon() {
require('connexion.php');
$reponse = $bdd->prepare('SELECT * FROM chapitre WHERE brouillon =1');
$reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
}
?>