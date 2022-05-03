<?php
class modeltableaudebord 
{
        public function connexionbdtableaudebord() {
        require('connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM chapitre WHERE brouillon =0');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
       
        public function connexionbdmail() {
        require('connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM contact');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
        
        public function  suprimerchapitre() 
        {
        require('connexion.php');
        $sth=$bdd->prepare('DELETE FROM chapitre WHERE chapitrenumber =?');
        $sth->execute(array(htmlspecialchars($_POST['idchapitre'])));
        $sth=$bdd->prepare('DELETE FROM commentaire WHERE idchapitre=?');
        $sth->execute(array(htmlspecialchars($_POST['idchapitre'])));
        header('Location:index.php?action=adminchapitre');
        }    
}
?>