<?php 
class modeldeconnectionadmin{
    public function connexionbdadmin() {
        require('connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM user');
        $reponse->execute();
        $data = $reponse->fetchAll();
       return $data;
        $rereponseq->cloreCursor();
        session_start();
        unset($_SESSION['login']);
     
    }}
?>