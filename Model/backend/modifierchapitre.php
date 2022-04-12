<?php
class modelmodifierchap 
{
    public function lafonction()
     {
      //require('connexion.php');
      //$name = $_FILES['file']['name'];
      //$sth=$bdd->prepare('UPDATE chapitre SET (chapitrenumber, chapitretitre , resumer,	chapitretext , brouillon, images)');
      //$sth->execute(array($_POST['numero'], $_POST['titre'],$_POST['resume'], $_POST["histoire"],$_POST["select"],"images/$name",));
      //header('Location:index.php?action=brouillon');
      //header('Location:index.php?action=admincommentairesignaler');  
      }

  public function affichelechapitre() 
  {
    require('connexion.php');
    $search='SELECT * FROM chapitre WHERE  id=' . $_GET["id"];
    $reponse = $bdd->prepare($search);
    $reponse->execute();
    $data = $reponse->fetchAll();
    return $data;
    $rereponseq->cloreCursor();
  } 
         
} 

?>