
<?php $title = 'chapitre' ; ?>
<?php ob_start() ; ?>

<section>
	<div class="chapitre">
		
		<div id="chaptirenumber"></div><div id='chapitre-titre' ><h3>Un départ compliqué</h3></div>
		<div id="chapitre-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<br><li id="suite"><a href="#">lire la suite</a></li>	
		</div>
		
	  </div>
</section>
<section>

<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>