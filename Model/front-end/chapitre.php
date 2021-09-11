<?php
class modelchapitre {
function connexionbdchapitre() {
require('Model/front-end/connexion.php');
$reponse = $bdd->query('SELECT * FROM Chapitre WHERE ID =:identite');
$reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
}
?>