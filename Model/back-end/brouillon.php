
<?php
class modelbrouillon {
public function connexionbrouillon() {
require('Model/front-end/connexion.php');
$reponse = $bdd->query('SELECT * FROM chapitre WHERE brouillon =1');
$reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
}
?>