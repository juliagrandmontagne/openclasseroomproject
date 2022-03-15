<?php $title = 'admincommentairesignaler' ; ?>
<?php ob_start() ; ?>
<section id="main">
      <nav>
      <ul class="tableaubordmenu">
      <li class="licommentaire" ><a class="tableauxcommentaire" href="index.php?action=admincommentaireold">commentaire déjà valider</a></li>
      <li class="licommentaire" ><a class="tableauxcommentaire" href="index.php?action=admincommentaire">commentaire a valider</a></li>
      <li class="licommentaire" ><a class="tableauxcommentaire" href="index.php?action=admincommentairesignaler">commentaire signaler</a></li>
      </ul>
      </nav>
      <h4>Bienvenue sur la liste des chapitres signalés</h4>
<?php  foreach ($databdadmincommentairesignaler as $donnees) : ?>
         <div id="commentaire">
            <div id="lecommentaire">
                  <div id="nomuser"><?php echo $donnees['nameuser']?></div><div id="messageuser"><?php echo $donnees['comment']?></div>
            <form action="index.php?action=lesuprimeradminsignaler" method="post">
                  <input name="id" id="none" type="text" value="<?php echo $donnees['id']?>">
                  <button class="send" type="submit" id="btn-submit" value="suprimer" >suprimer</button>
            </form>
                  <form action="index.php?action=validationadmins" method="post">
                  <input name="id" id="none" type="text" value="<?php echo $donnees['id']?>">
                  <button class="send" type="submit" id="btn-admin" value="valider" >valider</button>
            </form>
            </div>
            </div>
   <?php endforeach; ?>
</section>
<?php $content = ob_get_clean() ; ?>
<?php require('templateadminagain.php'); ?>