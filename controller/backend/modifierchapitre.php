<?php
class modelmodifierchap 
{
    public function modifierchapitre()

     {
        require('connexion.php');
        $sth=$bdd->prepare('UPDATE FROM chapitre SET (chapitrenumber, chapitretitre , resumer,	chapitretext , brouillon, images) WHERE id=?');
        $sth->execute(array($_POST['numero']), htmlspecialchars($_POST['titre']),htmlspecialchars($_POST['resume']), htmlspecialchars($_POST["histoire"]),htmlspecialchars($_POST["select"]),"images/", htmlspecialchars($_POST['id'])));
        header('Location:index.php?action=admincommentairesignaler');
        }
  }     

?>