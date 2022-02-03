<?php
class modelcreerchapitre 
{
    public function creerchapitre()
    {
      require('Model/frontend/connexion.php');
      $sth = $bdd->prepare('INSERT INTO chapitre (chapitrenumber, chapitretitre , resumer,	chapitretext , brouillon, images) VALUES(?, ?, ?, ?, ?, ?)');
      $sth->execute(array($_POST['numero'], $_POST['titre'],$_POST['resume'], $_POST["histoire"],$_POST["select"],"0"));   
    
    }
    
  }     

?>