<?php $title = 'chapitrepublieradmin' ; ?>
<?php ob_start() ; ?>

<section class="chapitrepublieradmin">
 
<?php  foreach ($databdadminchapitre as $donnees) : ?>
<div id="hello"><?php echo $donnees['chapitre-number']?></div>
 
 <?php echo $donnees['chapitre-titre']?>
<?php echo $donnees['chapitre-text']?>

<br>
 <?php endforeach; ?>

</section>

<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>