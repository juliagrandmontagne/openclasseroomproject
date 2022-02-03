<?php $title = 'Accueil' ; ?>
<?php ob_start() ; ?>

<section id="main">
			
			<figure><img src="images/typing.jpg" alt="machine a écrire" id="slider"></figure>	
   		</section> 
		   <section id="content">
			   <div id="description"><p id="descriptionacueil">Bonjours et bienvenu sur le site des aventures de Louise.<br>Vous trouverez sur ce sites les dernier chappires de jeanforteroche des aventures de louise en alaska....<br><br>Vous trouverez aussi la biographie de jean forteroche ainsi que sont contact pour toute sugestions professionelle.<br>Nous esperons que vous aprécierez ce recit..</div>
			   <?php  foreach ($databd2 as $donnees) : ?>
			   <div id="lastchapter"><h3>Le dernier chapitre <?php echo $donnees['chapitretitre']?><?php echo $donnees['chapitrenumber']?></h3><?php echo $donnees['resumer']?>
			   <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" id="illustrationchapitre"> 
			   <?php $identite=$donnees['ID']?>
			   <div id="btn-submit"><a id="suite"href="index.php?action=chapitre&id=<?php echo "$identite"?>">lire la suite</a></li></div></div>
				<?php endforeach; ?>
				
		   </section>
		   


<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>