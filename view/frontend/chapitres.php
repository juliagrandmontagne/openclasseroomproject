<?php $title = 'chapitres' ; ?>
<?php ob_start() ; ?>

<section class="chapitres">
<?php  foreach ($databdchapitres as $donnees) : ?>
 
    
 <div class="chaptirenumber">
 <div class='chapitre-titre'><?php echo $donnees['chapitrenumber']?><?php echo $donnees['chapitretitre']?></div>
 <?php $identite=$donnees['ID']?>
 <div class="chapitre-text"><?php echo $donnees['resumer']?><br><div class="suite"><a class="suitelien" href="index.php?action=chapitre&id=<?php echo "$identite"?>">lire la suite</a></div> 
  <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" class="illustrationchapitre"> </div>
 </div><?php endforeach; ?>


</section>

<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>
