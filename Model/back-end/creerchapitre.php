<?php
class modelcreerchapitre 
{
    public function creerchapitre()
    {
      require('Model/front-end/connexion.php');
      $sth = $bdd->prepare('INSERT INTO chapitre (chapitrenumber, chapitretitre , resumer,	chapitretext , brouillon, images) VALUES(?, ?, ?, ?, ?, ?)');
      $sth->execute(array($_POST['numero'], $_POST['name'],$_POST['resume'], $_POST["histoire"],1,"images/neige-illustration.jpg"));   
    
    }
  }     

?>