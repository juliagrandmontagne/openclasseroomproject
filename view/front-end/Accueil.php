<?php $title = 'Accueil' ; ?>
<?php ob_start() ; ?>

<section>
			
			<figure><img src="images/typing.jpg" alt="machine a écrire" id="slider"></figure>	
   		</section> 
		   <section id="content">
			   <div id="description"><p>Bonjours et bienvenu sur le site des aventures de Louise.<br>Vous trouverez sur ce sites les dernier chappires de jeanforteroche des aventures de louise ....<br>.</div>
			   <div id="lastchapter"><h3>Le dernier chapitre (9)</h3><p><?php echo $databd2['chapitre-titre']?></p><?php echo $databd2['chapitre-number']?><?php echo $databd2['chapitre-text']?>
			   <!-- <img src="</*?php echo $databd2['images']?>" alt="illustrationchapitre" id="illustrationchapitre"*/> -->
				<li id="suite"><a href="#">lire la suite</a></li></div>
				
		   </section>
		   


<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>