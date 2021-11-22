<?php $title = 'creerchapitre' ; ?>
<?php ob_start() ; ?>
<section class="brouillon">
<li class="retour"><a class="retour" href="index.php?action=tableaudebord">retour</a></li>
        <div class="formcreer">
            <form action="#" method="POST" enctype="multipart/form-data" >
                <label for="user_name">Nom</label>
                <input type="text" class="name" name="user_name" id="username" required>
                
                <label for="mail">numero chapitre</label>
				<input type="mail" name="user_mail" id="mail" required>
            
                <label for="user_firstname">nom chapitre</label>
				<input type="text" name="user_firstname" id="userfirstname" required>
            	<label for="msg">resumer</label>
                <textarea id="msg" name="user_message" type="text" required></textarea>
				<label for="msg">texte</label>
                <textarea id="msg" name="user_message" type="text" required></textarea>
				
				<button class="send" type="submit" id="btn-submit">Envoyer</button>
            
            </form>
        </div>
</section>
<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>