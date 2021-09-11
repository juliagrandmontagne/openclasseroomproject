<?php $title = 'contact' ; ?>
<?php ob_start() ; ?>

        <div class="form">
            <form action="traitement.php" method="post" enctype="multipart/form-data" >
            <fieldset class="info">
                <legend>Nous contacter</legend>
            </fieldset>
            <fieldset>
            <legend class="adresse">
                <span class="info-soustitre">Jean Forteroche</span><br>
                Pour toutes requetes merci de remplir ce formulaire ci dessous<br>
            </legend>
            </fieldset>
                
                <textarea class="name" name="user_name" placeholder="Nom" required></textarea>
                
                <textarea id="mail" name="user_mail" placeholder="Email" required></textarea>
            
                <textarea id="prenom" name="user_firstname" placeholder="Objet" required ></textarea>
            
                <textarea id="msg" name="user_message" placeholder="Message" required></textarea>

                <input class="send" type="submit" id="btn-submit" value="Envoyer" >
            
            </form>
        </div>

<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>