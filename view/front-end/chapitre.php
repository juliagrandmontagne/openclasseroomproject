<?php $title = 'chapitre' ; ?>
<?php ob_start() ; ?>
<section class="chapitre">
<?php  foreach ($databd as $donnees) : ?>
 

 <div id="chaptirenumber-individuel">
 <div id='chapitre-titre-individuel'><?php echo $donnees['chapitre-number']?><?php echo $donnees['chapitre-titre']?></div>
 
 <div id="chapitre-text-individuel"><div id="texte"><?php echo $donnees['chapitre-text']?></div>
  <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" id="illustrationchapitre-inv"> </div>
 </div></div>
 <?php endforeach; ?>
 <?php  foreach ($databd3 as $donnees3) : ?>
 <div id="commentaire"><div id="lecommentaire"><?php echo $donnees3['name-user']?><?php echo $donnees3['comment']?></div>
   </div>
<?php endforeach; ?>

</section>
<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>