<?php $title = 'brouillon' ; ?>
<?php ob_start() ; ?>
<section class="brouillon">
<li class="retour"><a class="retour" href="index.php?action=tableaudebord">retour</a></li>
<?php  foreach ($databd as $donnees) : ?>
    <div id="chaptirenumber">
 <div id='chapitre-titre'><?php echo $donnees['chapitre-number']?><?php echo $donnees['chapitre-titre']?></div>
 <?php $identite=$donnees['ID']?>
 <div id="chapitre-text"><?php echo $donnees['resumer']?><br><li id="suite"><a id="suite"href="index.php?action=chapitre&id=<?php echo "$identite"?>">editer</a></li> 
  <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" id="illustrationchapitre"> </div>
   <?php endforeach; ?>

</section>
<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>