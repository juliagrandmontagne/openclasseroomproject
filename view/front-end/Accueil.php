<?php $title = 'Accueil' ; ?>
<?php ob_start() ; ?>

<section>
			
			<figure><img src="images/typing.jpg" alt="machine a écrire" id="slider"></figure>	
   		</section> 
		   <section id="content">
			   <div id="description"><p>Bonjours et bienvenu sur le site des aventures de Louise.<br>Vous trouverez sur ce sites les dernier chappires de jeanforteroche des aventures de louise ....<br>.</div>
			   <?php  foreach ($nbrtwo as $donnees) : ?>
			   <div id="lastchapter"><h3>Le dernier chapitre (9)</h3><p><?php echo $donnees['chapitre-titre']?></p><?php echo $donnees['chaptirenumber']?><?php echo $donnees['chapitre-text']?>
				<li id="suite"><a href="#">lire la suite</a></li></div><?php endforeach; ?>
				
		   </section>
		   


<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>