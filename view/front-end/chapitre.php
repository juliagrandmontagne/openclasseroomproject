<?php $title = 'chapitre' ; ?>
<?php ob_start() ; ?>
<section class="chapitre">
<?php  foreach ($databd as $donnees) : ?>
 

 <div id="chaptirenumber-individuel">
 <div id='chapitre-titre-individuel'><?php echo $donnees['chapitre-number']?><?php echo $donnees['chapitre-titre']?></div>
 
 <div id="chapitre-text-individuel"><?php echo $donnees['chapitre-text']?><br>
  <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" id="illustrationchapitre-inv"> </div>
 </div><?php endforeach; ?></div>


</section>
<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>