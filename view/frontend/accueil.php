<?php $title = 'Accueil' ; ?>
<?php ob_start() ; ?>

<section id="main">
			
			<figure><img src="images/typing.jpg" alt="machine a écrire" id="slider"></figure>	
   		</section> 
		   <section id="content">
			   <div id="description"><p id="descriptionacueil">Bonjour et bienvenue sur le site de Jean Forteroche.<br>Vous trouverez sur ce site les derniers chapitres des aventures de Louise en Alaska....<br><br>Vous trouverez aussi la biographie de l'auteur ainsi que son contact pour toute suggestion professionnelle.<br>Nous espérons que vous aprécierez ce récit..</div>
			   <?php  foreach ($databdaccueil as $donnees) : ?>
			   <div id="lastchapter"><h3>Le dernier chapitre : <?php echo $donnees['chapitretitre']?><?php echo $donnees['chapitrenumber']?></h3><?php echo $donnees['resumer']?>
			   <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" id="illustrationchapitre"> 
			   <?php $identite=$donnees['ID']?>
			   <div id="btn-submit"><a id="suite" href="index.php?action=chapitre&id=<?php echo "$identite"?>">lire la suite</a></div></div>
				<?php endforeach; ?>
				
		   </section>
		   


<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>