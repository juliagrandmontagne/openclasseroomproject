<?php $title = 'connexionutilisateur' ; ?>
<?php ob_start() ; ?>
<section id="main">
    <div class="carré">
        <p class="titreconnection">Bonjour, vous souhaitez vous connecter pour gerez vos recette ?</p>
            <form action="index.php?action=SignIn" method="post" id="connexionutilisateur" >     
                <div id="formulairedeconnection"></div>
                    <input id="nameuser" name="nameuser" placeholder="pseudo">
                    <input id="mp" type="pasword" name="mp" placeholder="mot de passe">
                <button  type="submit" class="btn-submit" name="valider">Envoyer</button>  
                    <p>mot de passe oublier?</p>
                    <p>vous n'etes pas inscrit?</p>           
            </form>    
    </div>
</section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>