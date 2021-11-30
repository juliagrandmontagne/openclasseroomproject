<?php
class modelcommentaire 
{
    public function creercommentaire()
    {
      require('Model/front-end/connexion.php');
      $sth = $bdd->prepare('INSERT INTO commentaire (comment, nameuser, signaler ,idchapitre) VALUES(?, ?, ?, ?)');
      $sth->execute(array($_POST['comment'], $_POST['nameuser'],0, 2));   
    }
    public function admincommentaire()
    {
      require('Model/front-end/connexion.php');
      $reponse = $bdd->query('SELECT * FROM commentaire ');
      $reponse->execute();
      $data = $reponse->fetchAll();
      return $data;
      $rereponseq->cloreCursor();}

      public function admincommentairevalider()
      {
        require('Model/front-end/connexion.php');
        $reponse = $bdd->query('SELECT * FROM commentaire WHERE valider=1');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
           
  }     

?>
            