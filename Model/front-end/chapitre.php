<?php
class modelchapitre {
public function connexionbdchapitre() {
require('Model/front-end/connexion.php');
$reponse = $bdd->query('SELECT * FROM Chapitre /*WHERE id= ?*/');
$reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
}
?>