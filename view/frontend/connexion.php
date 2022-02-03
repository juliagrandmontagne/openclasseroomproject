<?php $title = 'connexion' ; ?>
<?php ob_start() ; ?>
<?php 
//require('Model/front-end/connexion.php');
   // {
       
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
<?php include('template.php'); ?>