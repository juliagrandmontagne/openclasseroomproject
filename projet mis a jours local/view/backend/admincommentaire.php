<?php $title = 'admincommentaire' ; ?>
<?php ob_start() ; ?>
<section id="main">
<?php include('sousmenu.php'); ?>
      <h4>Bienvenue sur la liste des chapitres en attente de validation</h4>
<?php  foreach ($databdadmincommentaire as $donnees) : ?>
         <div id="commentaire">
            <div id="lecommentaire">
                  <div id="nomuser"><?php echo $donnees['nameuser']?></div><div id="messageuser"><?php echo $donnees['comment']?>
            </div>
            <form>
            <form action="index.php?action=lesuprimeradmin" method="post"><input name="id" id="none" type="text" value="<?php echo $donnees['id']?>">
                        <button class="send" type="submit" id="btn-submit" value="suprimer" >suprimer</button>
                  </form>
          <input class="send" type="submit" id="btn-submit" value="valider"></div>
         
   </div>
   <?php endforeach; ?>
</section>
<?php $content = ob_get_clean() ; ?>
<?php require('templateadminagain.php'); ?>