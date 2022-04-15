<?php
class modelmodifierchap 
{
    public function lemodifier()
     {
        require('connexion.php');
      //  $sth=$bdd->prepare('UPDATE chapitre SET (chapitrenumber, chapitretitre , resumer,	chapitretext , brouillon, images) WHERE id=?');
      //  $sth->execute(array($_POST['numero'], $_POST['titre'],$_POST['resume'], $_POST["histoire"],$_POST["select"],"images/", $_POST['id']));
        header('Location:index.php?action=brouillon');
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