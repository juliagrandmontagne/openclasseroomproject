<?php $title = 'chapitres' ; ?>
<?php ob_start() ; ?>

<section class="chapitre">
<?php  foreach ($databd as $donnees) : ?>
  
   <?php $identite=$donnees['ID']?>
   <?php $_GET['identite']?>

 <div id="chaptirenumber">
    <div id='chapitre-titre'><?php echo $donnees['chapitre-number']?><?php echo $donnees['chapitre-titre']?></div>
    <div id="chapitre-text"><?php echo $donnees['chapitre-text']?><br><li id="suite"><a id="suite"href="view/front-end/chapitre.php?action=chapitre-indv&id=‘.$donnees['id'].'"method="POST">lire la suite</a></li> 
    
    <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" id="illustrationchapitre"> </div>
 </div><?php endforeach; ?></div>


</section>

<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>
