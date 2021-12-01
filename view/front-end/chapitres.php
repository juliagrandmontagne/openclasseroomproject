<?php $title = 'chapitres' ; ?>
<?php ob_start() ; ?>

<section class="chapitres">
<?php  foreach ($databd as $donnees) : ?>
 
    
 <div id="chaptirenumber">
 <div id='chapitre-titre'><?php echo $donnees['chapitre-number']?><?php echo $donnees['chapitre-titre']?></div>
 <?php $identite=$donnees['ID']?>
 <div id="chapitre-text"><?php echo $donnees['resumer']?><br><li id="suite"><a id="suitelien"href="index.php?action=chapitre&id=<?php echo "$identite"?>">lire la suite</a></li> 
  <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" id="illustrationchapitre"> </div>
 </div><?php endforeach; ?></div>


</section>

<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>
