<?php $title = 'chapitre' ; ?>
<?php ob_start() ; ?>

<section>
<?php  foreach ($nbrtwo as $donnees) : ?>
 
<div class="chapitre">
<div id="chaptirenumber"><?php echo $donnees['chaptirenumber']?></div>
<div id='chapitre-titre'><?php echo $donnees['chapitre-titre']?></div>
<div id="chapitre-text"><?php echo $donnees['chapitre-text']?><br><li id="suite"><a href="#">lire la suite</a></li> 
</div><?php endforeach; ?>

 </div>
</section>

<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>
