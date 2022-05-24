<?php 
class modeldeconnectionadmin{
    public function connexionbdadmin() {
        require('connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM user');
        $reponse->execute();
        $data = $reponse->fetchAll();
       return $data;
        $rereponseq->cloreCursor();
     
    }
public function deconnection()
{
    require('connexion.php');
    session_start();
    unset($_SESSION['login']);
     
    header('Location:index.php?action=accueil');      

}
}
?>