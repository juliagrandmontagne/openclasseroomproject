<?php $title = 'contact' ; ?>
<?php ob_start() ; ?>
<section id="main">
        <div class="form">
            <form action="index.php?action=contact" method="POST" enctype="multipart/form-data" >
            <fieldset class="info">
                <legend>Nous contacter</legend>
            </fieldset>
            <fieldset>
            <legend class="adresse">
                <span class="info-soustitre">Jean Forteroche</span><br>
                Pour toute requète merci de remplir le formulaire ci dessous<br>
            </legend>
            </fieldset>
                <label for="user_name">Nom</label>
                <input type="text" class="name" name="user_name" id="username" required>
                
                <label for="mail">E-mail</label>
				<input type="mail" name="user_mail" id="mail" required>
            
                <label for="user_firstname">Prénom</label>
				<input type="text" name="user_firstname" id="userfirstname" required>
            	
				<label for="msg">Message</label>
                <textarea id="msg" name="user_message" type="text" required></textarea>
				
				<button class="send" type="submit" id="btn-submit">Envoyer</button>
            
            </form>
        </div>
</section>
<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>