
<?php $title = 'chapitre' ; ?>
<?php ob_start() ; ?>

<section>
<?php while ($donnees = $reponse->fetch()) { ?>
				 
	<div class="chapitre">
		
		<div id="chaptirenumber"><?php echo $donnees['chaptirenumber']?></div><div id='chapitre-titre' ><h3>Un départ compliqué</h3></div>
		<div id="chapitre-text">
			<p><?php echo $donnees['chapitre-text']?></p>
			<br><li id="suite"><a href="#">lire la suite</a></li>	<?php } ?>
		</div>
		
	  </div>
</section>
<section>

<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>