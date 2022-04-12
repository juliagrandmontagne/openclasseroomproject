
<?php 
class modelconnectionadmin{
    public function connexionbdadmin() 
    {
        require('connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM user');
        $reponse->execute();
        $data = $reponse->fetchAll();
       return $data;
        $rereponseq->cloreCursor();
    }
       public function deconnexionbdadmin()   
    {
        echo "<script type='text/javascript'>sessionStorage.clear();</script>";
        header('Location:index.php?action=accueil')
        
    }
}
?>