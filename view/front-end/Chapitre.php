<?php $title = 'chapitre' ; ?>
<?php ob_start() ; ?>

<section>
<?php while ($donnees = $reponse->fetch()) { ?>
 
<div class="chapitre">
<div id="chaptirenumber"><?php echo $donnees['chaptirenumber']?></div><div id='chapitre-titre' ><h3><?php echo $donnees['titre-last-chapitre']?></h3></div>
<div id="chapitre-text">
<p><?php echo $donnees['chapitre-text']?></p>
<br><li id="suite"><a href="#">lire la suite</a></li> <?php } ?>
</div>
 </div>
</section>

<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>
