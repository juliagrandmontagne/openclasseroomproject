<?php
class modelcommentaire 
{
    public function admincommentaire()
    {
      require('connexion.php');
      $reponse = $bdd->prepare('SELECT * FROM commentaire WHERE valider=0 AND signaler=0');
      $reponse->execute();
      $data = $reponse->fetchAll();
      return $data;
      $rereponseq->cloreCursor();
    }
      public function admincommentairevalider()
      {
        require('connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM commentaire WHERE valider=1');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();
      }
        public function admincommentairesignaler()
      {
        require('connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM commentaire WHERE signaler=1');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();
      }  
      public function lesuprimeradminsignaler ()
        {
        require('connexion.php');
        $sth=$bdd->prepare('DELETE FROM commentaire WHERE id=?');
        $sth->execute(array($_POST['id']));
        header('Location:index.php?action=admincommentairesignaler');
        }
        public function lesuprimeradminold ()
        {
        require('connexion.php');
        $sth=$bdd->prepare('DELETE FROM commentaire WHERE id=?');
        $sth->execute(array($_POST['id']));
        header('Location:index.php?action=admincommentaireold');
        }
        public function lesuprimeradmin()
        {
        require('connexion.php');
        $sth=$bdd->prepare('DELETE FROM commentaire WHERE id=?');
        $sth->execute(array($_POST['id']));
        header('Location:index.php?action=admincommentaire');
        }
        public function validationadmins()
        {
        require('connexion.php');
        $sth=$bdd->prepare('UPDATE FROM commentaire SET signaler=?, valider=? WHERE id=?');
        $sth->execute(array(0,1,$_POST['id']));
        header('Location:index.php?action=admincommentairesignaler');
        }
}     
?>