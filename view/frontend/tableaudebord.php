<!DOCTYPE html>
<?php $title = 'tableaudebord' ; ?>
<?php ob_start() ; ?>
<section class="connexion">
<h4 id="messageconnexion">Bonjour Jean forteroche. Que souhaitez vous faire ?</h4>

<nav class="tableaubordmenunavigation">
                     <ul class="tableaubordmenu">
                        <li class="tableaubord"><a class="soustableaubord" href="index.php?action=adminchapitre">Liste chapitres publier</a></li>
                        <li class="tableaubord"><a class="soustableaubord" href="index.php?action=brouillon">Les chapitres en cours</a></li>
                        <li class="tableaubord"><a class="soustableaubord" href="index.php?action=newchapitre">ecrire un nouveaux chapitre</a></li> 
                        <li class="tableaubord"><a class="soustableaubord"href="index.php?action=admincommentaire">commentaires</a></li>
                        <li class="tableaubord"><a class="soustableaubord"href="index.php?action=mailadmin">lire mes email</a></li>
                    </ul>
 

</section>

<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>