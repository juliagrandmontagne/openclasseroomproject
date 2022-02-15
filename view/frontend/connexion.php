<?php $title = 'connexion' ; ?>
<?php ob_start() ; ?>
   
<?php 

   // {
        //SELECT * FROM user WHERE login =$_POST['nameuser'] AND mp=$_POST['mp']
        if (isset($_POST['valider']))
        {
        if(!empty($_POST['nameuser']) AND !empty($_POST['mp']) )
      
           {
             
            $nameadmin = $donnees['nameuser'];
           //$nameadmin = $bdd ->query('SELECT login FROM user where login= $pseudosaisie');
            $mpadmin = $donnees['mp'];
           // $mpadmin = $bdd ->query('SELECT mp FROM user where mp=$mpsaisie');
            foreach ($databd as $donnees) :
            $pseudosaisie = htmlspecialchars($donnees['nameuser']);
            $mpsaisie = htmlspecialchars($donnees['mp']);
            endforeach 
                if($pseudosaisie == $nameadmin AND $mpsaisie == $mpadmin) 
                {
                    header('Location: index.php?action=tableaudebord') ;
               }
            }
            else{ echo"mot de passe incorrecte ";}
        }
        else{ echo"veuillez completer tous les champs ";}
    
        ?>
<section class="connexion">
<h3 id="messageconnexion">Vous êtes un utilisateur ? Alors connectez vous.</h3>
<div id="formulaire">
 <form action="" method="post" id="connexionutilisateur" >     
                <div id="titre-commentaire"><legend ></legend></div>
                <input class="nameuser" name="nameuser" placeholder="pseudo" required>
            
                <input id="comment" type="pasword" name="mp" placeholder="mot de passe" required>

                <input class="send" type="submit" id="btn-submit" value="Envoyer" name="valider">
            
            </form>
</div>
 

</section>

<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>