<?php $title = 'chapitres' ; ?>
<?php ob_start() ; ?>

<section class="chapitres">
<?php  foreach ($databd as $donnees) : ?>
 
    
 <div id="chaptirenumber">
 <div id='chapitre-titre'><?php echo $donnees['chapitre-number']?><?php echo $donnees['chapitre-titre']?></div>
 <?php $identite=$donnees['ID']?>
   <?php $_GET['identite']?>
 <div id="chapitre-text"><?php echo $donnees['chapitre-text']?><br><li id="suite"><a id="suite"href="index.php?action=chapitre&.<?php identite?>=  ?">lire la suite</a></li> 
  <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" id="illustrationchapitre"> </div>
 </div><?php endforeach; ?></div>


</section>

<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>
