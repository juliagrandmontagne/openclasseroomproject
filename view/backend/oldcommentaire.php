<?php $title = 'admincommentaire' ; ?>
<?php ob_start() ; ?>
<section id="main">
<?php include('sousmenu.php'); ?>
<h4>Bienvenue sur la liste des commentaire déjà validés</h4>
<?php  foreach ($databdadmincommentaireold as $donnees) : ?>
      <div class="commentaire">
            <div class="lecommentaire">
                  <div class="nomuser"><?php echo $donnees['nameuser']?></div><div class="messageuser"><?php echo $donnees['comment']?></div>
                  <form action="index.php?action=lesuprimeradminold" method="post">
                    <input name="id" class="none" type="text" value="<?php echo $donnees['id']?>">
                    <button  type="submit" class="btn-submit" value="suprimer" >suprimer</button>
                  </form>
  
            </div>  
      </div>
   <?php endforeach; ?>
</section>
<?php $content = ob_get_clean() ; ?>
<?php require('templateadminagain.php'); ?>