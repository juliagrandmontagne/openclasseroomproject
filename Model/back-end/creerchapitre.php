<?php
class modelcreerchapitre 
{
    public function creerchapitre()
    {
      require('Model/front-end/connexion.php');
      $sth = $bdd->prepare('INSERT INTO chapitre (chapitrenumber, chapitre-titre , resumer,	chapitre-text , brouillon, images) VALUES(?, ?, ?, ?, ?, ?');
      $sth->execute(array($_POST['numero'], $_POST['name'],$_POST['resume'], $_POST["histoire"],1,"images/neige-illustration.jpg"));   
    
    }
  }     

?>