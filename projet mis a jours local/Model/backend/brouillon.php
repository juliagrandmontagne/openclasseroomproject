
<?php
class modelbrouillon {
public function connexionbrouillon() {
require('connexion.php');
$reponse = $bdd->prepare('SELECT * FROM chapitre WHERE brouillon =1');
$reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
       
public function lesuprimerbrouillon()
        {
        require('connexion.php');
        $sth=$bdd->prepare('DELETE FROM chapitre WHERE ID=?');
        $sth->execute(array($_POST['ID']));
        header('Location:index.php?action=brouillon');
        }
}
?>