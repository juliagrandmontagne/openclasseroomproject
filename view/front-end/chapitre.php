<?php $title = 'chapitre' ; ?>
<?php ob_start() ; ?>

<section>
<?php  foreach ($databd as $donnees) : ?>
 
 <div class="chapitre">
 <div id="chaptirenumber">
 <div id='chapitre-titre'><?php echo $donnees['chapitre-titre']?><?php echo $donnees['chapitre-number']?></div>
 
 <div id="chapitre-text"><?php echo $donnees['chapitre-text']?><br><li id="suite"><a id="suite"href="#">lire la suite</a></li> 
  <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" id="illustrationchapitre"> </div>
 </div><?php endforeach; ?></div>

 </div>
</section>

<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>
