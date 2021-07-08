<?php $title = 'accueil' ; ?>
<?php ob_start() ; ?>

<section>
			
			<figure><img src="images/typing.jpg" alt="machine a écrire" id="slider"></figure>	
   		</section> 
		   <section id="content">
			   <div id="description"><p>Bonjours et bienvenu sur le site des aventures de Louise.<br>Vous trouverez sur ce sites les dernier chappires de jeanforteroche des aventures de louise ....<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			   <div id="lastchapter"><h3>Le dernier chapitre (9)</h3><p><?php echo $lastchapitres[chapitre-text]?></p>
				<li id="suite"><a href="#">lire la suite</a></li></div>
				
		   </section>
		   


<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>