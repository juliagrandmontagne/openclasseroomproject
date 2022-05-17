<?php $title = 'admincommentaire' ; ?>
<?php ob_start() ; ?>
<section id="main">
      <?php include('sousmenu.php'); ?>
            <h4>Bienvenue sur la liste des commentaires en attente de validation</h4>
      <?php  foreach ($databdadmincommentaire as $donnees) : ?>
            <div class="commentaire">
                  <div class="lecommentaire">
                        <div class="nomuser"><?php echo $donnees['nameuser']?></div><div id="messageuser"><?php echo $donnees['comment']?></div>
                  </div>
            
                  <form action="index.php?action=lesuprimeradmin" method="post">
                        <input name="id" class="none" type="text" value="<?php echo $donnees['id']?>">
                        <button  type="submit" class="btn-submit" value="suprimer" >suprimer</button>
                  </form>
                  <form action="index.php?action=validationadmin" method="post">
                   <input name="id" class="none" type="text" value="<?php echo $donnees['id']?>">
                   <button  type="submit" class="btn-submit" value="valider">valider </button>
                  </form>
            </div>
            
   
   <?php endforeach; ?>
</section>
<?php $content = ob_get_clean() ; ?>
<?php require('templateadminagain.php'); ?>