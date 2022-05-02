<?php $title = 'modifierchapitre' ; ?>
<?php ob_start() ; ?>
<script src="https://cdn.tiny.cloud/1/xzvjm98326mhxxsepc9pzu1hl6661anlsrza944420fp33lb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
                <textarea id="histoire" id="editable" name="histoire" type="text" required><?php echo $donnees['chapitretext']?></textarea>
                
                <label for="file">Image</label>
                <input type="file" name="img">
                <input  name="id" id ="none"value="<?php echo $donnees['ID']?>">
                
                <select name="select" id="select">
                <option value="1">brouillon</option>
                <option value="0">publier</option>
                
                </select>
<?php endforeach; ?>
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
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
 </script>  
  </section>
<?php $content = ob_get_clean() ; ?>
<?php require('templateadminagain.php'); ?>