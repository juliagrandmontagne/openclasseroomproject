<?php $title = 'admincommentaire' ; ?>
<?php ob_start() ; ?>
<section id="main">

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