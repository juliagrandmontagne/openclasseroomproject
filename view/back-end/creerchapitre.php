<?php $title = 'creerchapitre' ; ?>
<?php ob_start() ; ?>

<section class="main">

        <div class="formcreer">
            <form action="index.php?action=creerchapitre" method="POST" enctype="multipart/form-data" >
                <label  class="ecrire" for="titre" >Titre du chapitre</label>
                <input  type="text" class="name" name="titre" id="titre" required>
                
                <label class="ecrire" for="numero">Numero chapitre</label>
				<input  type="mail" name="numero" id="numero" required>
            
            	<label class="ecrire" for="resume">Résumer</label>
                <textarea id="resume" name="resume" type="text" required></textarea>
                
    
				<label class="ecrire" for="histoire">Texte</label>
                <textarea id="histoire" name="histoire" type="text" required></textarea>
              
           
				
 
				<button class="send" type="submit" id="btn-submit">Envoyer</button>
            
            </form>
        </div>
</section>
<?php $content = ob_get_clean() ; ?>
<?php include('templateadminagain.php'); ?>