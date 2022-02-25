<?php
class modelcommentaire 
{
    public function creercommentaire()
    {
      require('connexion.php');
      $sth = $bdd->prepare('INSERT INTO commentaire (comment, nameuser, signaler, valider, idchapitre) VALUES(?, ?, ?, ?, ?)');
      $sth->execute(array(htmlspecialchars($_POST['comment']), htmlspecialchars($_POST['nameuser']),0,0, htmlspecialchars($_POST["idchapitre"])));   
      header('Location: index.php?action=chapitres');
    }
    public function lesignaler ()
    {
      require('connexion.php');
     $sth=$bdd->prepare('UPDATE commentaire SET signaler=? WHERE ID=?');
     $sth->execute(array(1,htmlspecialchars($_POST['id'])));
      header('Location: index.php?action=chapitres');
    }
   
  }     

?>
            