<?php
class modelmodifierchap 
{
    public function lemodifier()
     {
        require('connexion.php');
      //  $sth=$bdd->prepare('UPDATE chapitre SET (chapitrenumber, chapitretitre , resumer,	chapitretext , brouillon, images) WHERE id=?');
      //  $sth->execute(array(htmlspecialchars($_POST['numero']), htmlspecialchars($_POST['titre']),htmlspecialchars($_POST['resume']),htmlspecialchars( $_POST["histoire"]),htmlspecialchars($_POST["select"]),"images/", htmlspecialchars($_POST['id'])));
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