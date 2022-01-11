<?php $title = 'creerchapitre' ; ?>
<?php ob_start() ; ?>
<head>
  <script src="https://cdn.tiny.cloud/1/xzvjm98326mhxxsepc9pzu1hl6661anlsrza944420fp33lb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<section class="brouillon">
<script>
tinymce.init({
      selector: 'textarea',
      plugins: '  casechange export formatpainter  autolink lists checklist media mediaembed  permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: '  showcomments casechange checklist  formatpainter  permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
        <div class="formcreer">
            <form action="index.php?action=creerchapitre" method="POST" enctype="multipart/form-data" >
                <label  class="ecrire" for="user_name">Titre du chapitre</label>
                <input  type="text" class="name" name="titre" id="username" required>
                
                <label class="ecrire" for="mail">Numero chapitre</label>
				<input  type="mail" name="numero" id="mail" required>
            
            	<label class="ecrire" for="msg">Résumer</label>
                <textarea id="msg" name="resume" type="text" required></textarea>
                
    
				<label class="ecrire" for="msg">Texte</label>
                <textarea id="texteduchapitre" name="histoire" type="text" required></textarea>
              
                <input type="radio" id="choix" name="drone" value="huey" checked>
                <label id="radioinput" class="ecrire" for="brouillon">brouillon</label>
                
                <input type="radio" id="choix" name="drone" value="dewey">
                <label id="radioinpudpublish" class="ecrire" for="publier">publier</label>
				
 
				<button class="send" type="submit" id="btn-submit">Envoyer</button>
            
            </form>
        </div>
</section>
<?php $content = ob_get_clean() ; ?>
<?php include('templateadminagain.php'); ?>