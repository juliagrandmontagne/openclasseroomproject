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
}     

?>