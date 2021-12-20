<?php
class modelcommentaire 
{
    public function creercommentaire()
    {
      require('Model/front-end/connexion.php');
      $sth = $bdd->prepare('INSERT INTO commentaire (comment, nameuser, signaler, valider, idchapitre) VALUES(?, ?, ?, ?, ?)');
      $sth->execute(array($_POST['comment'], $_POST['nameuser'],0,0, $_POST["idchapitre"]));   
      header('Location: index.php?action=chapitres');
    }
    public function lesignaler ()
    {
      require('Model/front-end/connexion.php');
      $sth = $bdd->prepare('UPDATE commentaire SET signaler='1' WHERE idchapitre= '$_POST["idchapitre"]);
      $sth->execute;   
      header('Location: index.php?action=chapitres');
    }
  }     

?>
            