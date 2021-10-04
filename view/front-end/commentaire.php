<?php $title = 'chapitre' ; ?>
<?php ob_start() ; ?>
<p>merci de nous avoir donné votre avis</p>
<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>