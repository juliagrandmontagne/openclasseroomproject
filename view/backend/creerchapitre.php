<?php $title = 'creerchapitre' ; ?>
<?php ob_start() ; ?>
<script src="https://cdn.tiny.cloud/1/xzvjm98326mhxxsepc9pzu1hl6661anlsrza944420fp33lb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
                
                <label for="file">Image</label>
                <input type="file" name="file"  >
                
                
                <select name="select" id="select">
                <option value="0">publier</option>
                <option value="1">brouillon</option>
                </select>
 
				<button class="send" type="submit" id="btn-submit">Envoyer</button>
            
            </form>
        </div>  
<?php
if(isset($_FILES['file'])){
  $tmpName = $_FILES['file']['tmp_name'];
  $name = $_FILES['file']['name'];
  $size = $_FILES['file']['size'];
  $error = $_FILES['file']['error'];
}
move_uploaded_file($tmpName, './images/'.$name);
$tabExtension = explode('.', $name);
$extension = strtolower(end($tabExtension));
//$_SESSION['$name'] = $name;
//Tableau des extensions que l'on accepte
$extensions = ['jpg', 'png', 'jpeg', 'gif'];
if(in_array($extension, $extensions)){
    move_uploaded_file($tmpName, './upload/'.$name);
}
else{
    echo "Mauvaise extension";
}
?>
<script>
tinymce.init({
      selector: 'textarea',
      plugins: '    autolink lists  media    table  ',
      toolbar: '   formatpainter   table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
  </section>
<?php $content = ob_get_clean() ; ?>
<?php require('templateadminagain.php'); ?>