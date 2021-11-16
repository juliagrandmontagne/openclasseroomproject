<?php $title = 'tableaudebord' ; ?>
<?php ob_start() ; ?>
<section class="connexion">
<h4 id="messageconnexion">Bonjour Jean forteroche. Que souhaitez vous faire ?</h4>

<nav class="tableaubordmenunavigation">
                     <ul class="tableaubordmenu">
                        <li class="tableaubord"><a class="soustableaubord" href="index.php?action=adminchapitre">liste chapitres pulblié</a></li>
                        <li class="tableaubord"><a class="soustableaubord"href="">ecrire un chapitre</a></li>
                        <li class="tableaubord"><a class="soustableaubord"href="index.php?action=mailadmin">lire mes email</a></li>
                    </ul>
 

</section>

<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>