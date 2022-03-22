<?php
class modelmodifierchap 
{
    public function modifierchapitre()

     {
        require('connexion.php');
        //require('brouillon.php')
        $sth=$bdd->prepare('UPDATE FROM chapitre SET (chapitrenumber, chapitretitre , resumer,	chapitretext , brouillon, images) WHERE id=?');
        $sth->execute(array($_POST['numero'], $_POST['titre'],$_POST['resume'], $_POST["histoire"],$_POST["select"],"images/", $_POST['id']));
        header('Location:index.php?action=admincommentairesignaler');
        }
  } 
  //public function affichelechapitre() {
  //  require('connexion.php');
  //  $reponse = $bdd->prepare('SELECT * FROM chapitre WHERE id=?');
  //  $reponse->execute();
  //          $data = $reponse->fetchAll();
  //          return $data;
  //          $rereponseq->cloreCursor();}

?>