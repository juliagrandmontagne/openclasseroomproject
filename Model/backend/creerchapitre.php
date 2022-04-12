<?php
class modelcreerchapitre 
{
    public function creerchapitre()
    {
      require('connexion.php');
      $name = $_FILES['file']['name'];
      $sth = $bdd->prepare('INSERT INTO chapitre (chapitrenumber, chapitretitre , resumer,	chapitretext , brouillon, images) VALUES(?, ?, ?, ?, ?, ?)');
      $sth->execute(array(htmlspecialchars($_POST['numero']), htmlspecialchars($_POST['titre']),htmlspecialchars($_POST['resume']), htmlspecialchars($_POST["histoire"]),htmlspecialchars($_POST["select"]),"images/$name"));  
    }
    
  }     

?>