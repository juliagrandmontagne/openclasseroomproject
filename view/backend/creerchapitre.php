<?php $title = 'creerchapitre' ; ?>
<?php ob_start() ; ?>
 <script src="https://cdn.tiny.cloud/1/xzvjm98326mhxxsepc9pzu1hl6661anlsrza944420fp33lb/tinymce/5/tinymce.min.js" ></script>
<section class="main">

        <div class="formcreer">
            <form action="index.php?action=creerchapitre" method="POST" enctype="multipart/form-data" >
                <label  class="ecrire" for="titre" >Titre du chapitre</label>
                <input  type="text" class="name" name="titre" id="titre" required>
                
                <label class="ecrire" for="numero">Numero chapitre</label>
				<input  type="mail" name="numero" id="numero" required>
            
            	<label class="ecrire" for="resume">Résumé</label>
                <textarea id="resume" name="resume" type="text" required></textarea>
                
    
				<label class="ecrire" for="histoire">Texte</label>
                <textarea id="histoire" name="histoire" type="text" required></textarea>
                
                <label for="file">Image</label>
                <input type="file" name="file">
                <input id= "none" name="img" value="<?php echo $name ?>">
                
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
$image = basename($_FILES['name'])
$tabExtension = explode('.', $name);
$extension = strtolower(end($tabExtension));
session_start();
$_SESSION["image"]=$name;
//$transfert="<script>document.write(localStorage.getItem($name));</script>";
//echo'<script type='text/javascript'>sessionStorage["35"]</script>'
//session_start();
//$_SESSION['name'] = $name;
//Tableau des extensions que l'on accepte
$extensions = ['jpg', 'png', 'jpeg', 'gif'];
if(in_array($extension, $extensions)){
    move_uploaded_file($tmpName, './upload/'.$name);
}
else{
    echo "Mauvaise extension";
}
?>
 <script type="text/javascript">
tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | code',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
 </script>  
  </section>
<?php $content = ob_get_clean() ; ?>
<?php require('templateadminagain.php'); ?>