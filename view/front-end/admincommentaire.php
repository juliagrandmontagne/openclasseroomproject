<?php $title = 'admincommentaire' ; ?>
<?php ob_start() ; ?>
<section id="main">

      <nav>
      <ul class="tableaubordmenu">
      <li class="licommentaire" ><a class="tableauxcommentaire" href="index.php?action=admincommentaireold">commentaire déjà valider</a></li>
      <li class="licommentaire" ><a class="tableauxcommentaire" href="index.php?action=admincommentaire">commentaire a valider</a></li>
      <li class="licommentaire" ><a class="tableauxcommentaire" href="index.php?action=admincommentairesignaler">commentaire signaler</a></li>
      </ul>
      </nav>
      <h4>Bienvenue sur la liste des chapitre en attente de validation</h4>
<?php  foreach ($databd as $donnees) : ?>
         <div id="commentaire">
            <div id="lecommentaire">
                  <div id="nomuser"><?php echo $donnees['nameuser']?></div><div id="messageuser"><?php echo $donnees['comment']?>
            </div>
         <input class="send" type="submit" id="btn-submit" value="suprimer">
         <input class="send" type="submit" id="btn-submit" value="valider"></div>
         
   </div>
   <?php endforeach; ?>
</section>
<?php $content = ob_get_clean() ; ?>
<?php include('templateadminagain.php'); ?>