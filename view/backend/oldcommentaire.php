<?php $title = 'admincommentaire' ; ?>
<?php ob_start() ; ?>
<section id="main">
<?php include('sousmenu.php'); ?>
<h4>Bienvenue sur la liste des chapitres déjà validés</h4>
<?php  foreach ($databd as $donnees) : ?>
         <div id="commentaire">
            <div id="lecommentaire">
                  <div id="nomuser"><?php echo $donnees['nameuser']?></div><div id="messageuser"><?php echo $donnees['comment']?>
            </div>
         <input class="send" type="submit" id="btn-submit" value="suprimer">
        </div>
         
   </div>
   <?php endforeach; ?>
</section>
<?php $content = ob_get_clean() ; ?>
<?php require('templateadminagain.php'); ?>