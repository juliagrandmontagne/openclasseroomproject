<?php $title = 'creerchapitre' ; ?>
<?php ob_start() ; ?>
<head>
  <script src="https://cdn.tiny.cloud/1/xzvjm98326mhxxsepc9pzu1hl6661anlsrza944420fp33lb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<section class="brouillon">

        <div class="formcreer">
            <form action="#" method="POST" enctype="multipart/form-data" >
                <label id="ecrire" for="user_name">Titre du chapitre</label>
                <input type="text" class="name" name="user_name" id="username" required>
                
                <label id="ecrire" for="mail">Numero chapitre</label>
				<input type="mail" name="user_mail" id="mail" required>
            
                <label  id="ecrire" for="user_firstname">Nom chapitre</label>
				<input type="text" name="user_firstname" id="userfirstname" required>
            	<label id="ecrire" for="msg">Résumer</label>
                <textarea id="msg" name="user_message" type="text" required></textarea>
                <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
				<label id="ecrire" for="msg">Texte</label>
                <textarea id="texteduchapitre" name="user_message" type="text" required></textarea>
				
				<button class="send" type="submit" id="btn-submit">Envoyer</button>
            
            </form>
        </div>
</section>
<?php $content = ob_get_clean() ; ?>
<?php include('templateadminagain.php'); ?>