<?php
class modelchapitre {
function connexionbdchapitre() {
require('Model/front-end/connexion.php');
$reponse = $bdd->query('SELECT * FROM Chapitre WHERE ID $donnees['id']');
$reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
}
?>