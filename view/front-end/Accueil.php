<?php $title = 'Accueil' ; ?>
<?php ob_start() ; ?>

<section>
			
			<figure><img src="images/typing.jpg" alt="machine a écrire" id="slider"></figure>	
   		</section> 
		   <section id="content">
			   <div id="description"><p>Bonjours et bienvenu sur le site des aventures de Louise.<br>Vous trouverez sur ce sites les dernier chappires de jeanforteroche des aventures de louise ....<br>.</div>
			   <?php  foreach ($databd2 as $donnees) : ?>
			   <div id="lastchapter"><h3>Le dernier chapitre <?php echo $donnees['chapitre-titre']?><?php echo $donnees['chapitre-number']?></h3><?php echo $donnees['chapitre-text']?>
			   <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" id="illustrationchapitre"> 
				<li id="suite"><a href="#">lire la suite</a></li></div><?php endforeach; ?>
				
		   </section>
		   


<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>