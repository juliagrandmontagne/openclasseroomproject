
<?php 
class modelconnectionadmin{
    public function connexionbdadmin() {
        require('Model/front-end/connexion.php');
        $reponse = $bdd->query('SELECT * FROM user');
       // $reponse->execute();
        //$data = $reponse->fetchAll();
       // return $data;
       // $rereponseq->cloreCursor();
        //SELECT * FROM user WHERE login =$_POST['nameuser'] AND mp=$_POST['mp']
        if (isset($_POST['valider']))
        {
        if(!empty($_POST['nameuser']) AND !empty($_POST['mp']) )
      
           {
            $nameadmin = "jeanforteroche";
           //$nameadmin = $bdd ->query('SELECT login FROM user where login= $pseudosaisie');
            $mpadmin = "alohomora";
           // $mpadmin = $bdd ->query('SELECT mp FROM user where mp=$mpsaisie');

            $pseudosaisie = htmlspecialchars($_POST['nameuser']);
           $mpsaisie = htmlspecialchars($_POST['mp']);

                if($pseudosaisie == $nameadmin AND $mpsaisie == $mpadmin) 
                {
                    header('Location: index.php?action=tableaudebord') ;
                }
            }
            else{ echo"mot de passe incorrecte ";}
        }
        else{ echo"veuillez completer tous les champs ";}
    }
}
?>