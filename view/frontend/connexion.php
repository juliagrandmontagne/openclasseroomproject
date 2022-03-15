<?php $title = 'connexion' ; ?>
<?php ob_start() ; ?>
   

<section class="connexion">
<h3 id="messageconnexion">Vous êtes un utilisateur ? Alors connectez vous.</h3>
<div id="formulaire">
 <form action="" method="post" id="connexionutilisateur" >     
                <div id="titre-commentaire"><legend ></legend></div>
                <input class="nameuser" name="nameuser" placeholder="pseudo">
            
                <input id="comment" type="pasword" name="mp" placeholder="mot de passe">

                <input class="send" type="submit" id="btn-submit" value="Envoyer" name="valider">
            
            </form>
</div>
<?php 
//<?//php  foreach ($databdseconnecter as $donnees) : ?//>
// $nameadmin = <?php echo $donnees['login']?//>
//$mpadmin =<//?php echo $donnees['mp']?//>//
//<//?php endforeach; ?//>
    $nameadmin = "coucou";
    $mpadmin = "coucou";
    $mpsaisie = $_POST['mp'];
    $pseudosaisie = $_POST['nameuser'];
        if(!empty($_POST['nameuser']) && !empty($_POST['mp']) )  
           {
              if($_POST['nameuser'] == $nameadmin && $_POST['mp']== $mpsaisie) 
              {
              //header('Location:index.php?action=tableaudebord');
              echo"blabla";
              }
            }
          else{ echo"veuillez completer tous les champs ";}
?> 

</section>

<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>