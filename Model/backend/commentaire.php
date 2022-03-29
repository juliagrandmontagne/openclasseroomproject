<?php
class modelcommentaire 
{
  //affichage des commentaires ni valider ni signaler
    public function admincommentaire()
    {
      require('connexion.php');
      $reponse = $bdd->prepare('SELECT * FROM commentaire WHERE valider=0 AND signaler=0');
      $reponse->execute();
      $data = $reponse->fetchAll();
      return $data;
      $rereponseq->cloreCursor();
    }
    //affichage des commentaires  valider 
      public function admincommentairevalider()
      {
        require('connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM commentaire WHERE valider=1');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();
      }
      //affichage des commentaires signaler
        public function admincommentairesignaler()
      {
        require('connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM commentaire WHERE signaler=1');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();
      }  
      //supression des commentaires signaler
      public function lesuprimeradminsignaler ()
        {
        require('connexion.php');
        $sth=$bdd->prepare('DELETE FROM commentaire WHERE id=?');
        $sth->execute(array(htmlspecialchars($_POST['id'])));
        header('Location:index.php?action=admincommentairesignaler');
        }
         //supression des commentaires valider
        public function lesuprimeradminold ()
        {
        require('connexion.php');
        $sth=$bdd->prepare('DELETE FROM commentaire WHERE id=?');
        $sth->execute(array(htmlspecialchars($_POST['id'])));
        header('Location:index.php?action=admincommentaireold');
        }
      //supression des commentaires ni valider ni signaler
        public function lesuprimeradmin()
        {
        require('connexion.php');
        $sth=$bdd->prepare('DELETE FROM commentaire WHERE id=?');
        $sth->execute(array(htmlspecialchars($_POST['id'])));
        header('Location:index.php?action=admincommentaire');
        }
 //validation des commentaire signaler
        public function validationadmins()
        {
        require('connexion.php');
        $sth=$bdd->prepare('UPDATE commentaire SET valider=?, signaler=? WHERE ID=?');
        $sth->execute(array(1, 0, htmlspecialchars($_POST['id'])));
        header('Location:index.php?action=admincommentairesignaler');
        }
        public function validationadmin()
        {
        require('connexion.php');
        $sth=$bdd->prepare('UPDATE commentaire SET valider=?, signaler=? WHERE ID=?');
        $sth->execute(array(1, 0, htmlspecialchars($_POST['id'])));
        header('Location:index.php?action=admincommentaire');
        }
}     
?>