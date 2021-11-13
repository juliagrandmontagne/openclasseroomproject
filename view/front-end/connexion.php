<?php $title = 'connexion' ; ?>
<?php ob_start() ; ?>
<section class="connexion">
<h3 id="messageconnexion">Vous êtes un utilisateur ? Alors connectez vous.</h3>
<div id="formulaire">
 <form action="index.php?action=tableaudebord" method="post" id="connexionutilisateur" >     
                <div id="titre-commentaire"><legend ></legend></div>
                <input class="nameuser" name="nameuser" placeholder="pseudo" required>
            
                <textarea id="comment" name="mp" placeholder="mot de passe" required></textarea>

                <input class="send" type="submit" id="btn-submit" value="Envoyer" >
            
            </form>
</div>
 

</section>

<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>