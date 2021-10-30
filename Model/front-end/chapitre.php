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
                $rereponseq->cloreCursor();
               // $sth = $bdd->prepare('INSERT INTO commentaire (comment, nameuser, signaler ,idchapitre) VALUES(?, ?, ?, ?');
               // $sth->execute(array($_POST['comment'], $_POST['nameuser'],0,. $_GET["id"]));
        }

?>