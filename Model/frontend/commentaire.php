<?php
class modelcommentaire 
{
    public function creerCommentaire()
    {
      require('connexion.php');
      $sth = $bdd->prepare('INSERT INTO commentaire (comment, nameuser, signaler, valider, idchapitre) VALUES(?, ?, ?, ?, ?)');
      $sth->execute(array($_POST['comment'], $_POST['nameuser'],0,0, $_POST["idchapitre"]));   
      header('Location: index.php?action=chapitres');
      
    }
    public function lesignaler()
    {
      require('connexion.php');
     $sth=$bdd->prepare('UPDATE commentaire SET signaler=? WHERE ID=?');
     $sth->execute(array(1,htmlspecialchars($_POST['id'])));
      header('Location: index.php?action=chapitres');
    }
   
  }     

?>
            