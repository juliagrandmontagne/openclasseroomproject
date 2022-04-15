
<?php 
class modelconnectionadmin{
    public function connexionbdadmin() {
        require('connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM user');
        $reponse->execute();
        $data = $reponse->fetchAll();
       return $data;
        $rereponseq->cloreCursor();
       
    }}
?>