<?php $title = 'modifierchapitre' ; ?>
<?php ob_start() ; ?>
 <script src="https://cdn.tiny.cloud/1/xzvjm98326mhxxsepc9pzu1hl6661anlsrza944420fp33lb/tinymce/5/tinymce.min.js" ></script>
<section class="main">
<?php  foreach ( $databdaffiche as $donnees) : ?>
        <div class="formcreer">
            <form action="index.php?action=lemodifier" method="POST" enctype="multipart/form-data" >
                <label  class="ecrire" for="titre" >Titre du chapitre</label>
                <input  type="text" class="name" name="titre" id="titre" value="<?php echo $donnees['chapitretitre']?>"required>
                
                <label class="ecrire" for="numero">Numero chapitre</label>
				<input  type="mail" name="numero" id="numero" value="<?php echo $donnees['chapitrenumber']?>" required>
            
            	<label class="ecrire" for="resume">Résumer</label>
                <textarea id="resume" name="resume" type="text"  required><?php echo $donnees['resumer']?></textarea>
				<label class="ecrire" for="histoire">Texte</label>
                <textarea id="histoire" name="histoire" type="text" required><?php echo $donnees['chapitretext']?></textarea>
                
                <label for="file">Image</label>
                <input type="file" name="img">

                
                <select name="select" id="select">
                <option value="0">publier</option>
                <option value="1">brouillon</option>
                </select>
<?php endforeach; ?>
				<button class="send" type="submit" id="btn-submit">Envoyer</button>
            
            </form>
        </div>  

  </section>
<?php $content = ob_get_clean() ; ?>
<?php require('templateadminagain.php'); ?>