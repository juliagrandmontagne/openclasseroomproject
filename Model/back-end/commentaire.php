<?php
class modelcommentaire 
{
    public function admincommentaire()
    {
      require('Model/front-end/connexion.php');
      $reponse = $bdd->query('SELECT * FROM commentaire WHERE valider=0 AND signaler=0');
      $reponse->execute();
      $data = $reponse->fetchAll();
      return $data;
      $rereponseq->cloreCursor();
    }
      public function admincommentairevalider()
      {
        require('Model/front-end/connexion.php');
        $reponse = $bdd->query('SELECT * FROM commentaire WHERE valider=1');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();
      }
        public function admincommentairesignaler()
      {
        require('Model/front-end/connexion.php');
        $reponse = $bdd->query('SELECT * FROM commentaire WHERE signaler=1');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();
      }  
}     

?>