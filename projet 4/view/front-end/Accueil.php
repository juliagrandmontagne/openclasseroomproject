
<?php $title = 'accueil' ; ?>
<?php ob_start() ; ?>

<section>
			
			<figure><img src="images/typing.jpg" alt="machine a écrire" id="slider"></figure>	
   		</section> 
		   <section id="content">
			   <div id="description"><p>Bonjours et bienvenu sur le site des aventures de Louise.<br>Vous trouverez sur ce sites les dernier chappires de jeanforteroche des aventures de louise ....<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			   <div id="lastchapter"><h3>Le dernier chapitre (9)</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<li id="suite"><a href="#">lire la suite</a></li></div>
				
		   </section>
		   
	<section id="pied page">
		<footer >	
			<p id=baspage><a href="#" class="piedpage">Nous contacter</a><br><a href="#" class="piedpage">Mentions légales</a> <br><a href="#" class="piedpage">Gestions des Cookies</a> <br> <a href="#" class="piedpage">Attribution des images</a><br></p>
			<div id="resaux">
			<button class="fab fa-instagram-square" id="insta"></button>
			<button class="fab fa-facebook-square" id="facebook"></button>
			<button class="fab fa-twitter-square" id="twitter"></button>
			</div>
			</footer> 
	</section>

<?php *content = ob_get_clean() ; ?>
<?php require('template.php'); ?>