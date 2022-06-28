
<?php 
class modelconnectionadmin{
    public function connexionbdadmin() {
        require('connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM user');
        $reponse->execute();
        $data = $reponse->fetchAll();
       return $data;
        $rereponseq->cloreCursor();
       
    }
    public function gonnago() {
        require('connexion.php');
        $sth = $bdd->prepare('INSERT INTO user (mp, log) VALUES(?, ?)');
        $sth->execute(array$_POST['mp'], $_POST["nameuser"]);   
       
    }
}
?>