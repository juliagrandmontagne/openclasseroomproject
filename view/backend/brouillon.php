<?php $title = 'brouillon' ; ?>
<?php ob_start() ; ?>
<section class="brouillon">

<?php  foreach ($databdbrouillon as $donnees) : ?>

  <div id="main">
   
            <div class="chaptireadmin"><div class="chifreadmin"><?php echo $donnees['chapitrenumber']?></div></div>
            <div class="titreadmin"><?php echo $donnees['chapitretitre']?></div>
            <div class="textadmin"><?php echo $donnees['resumer']?>
                <?php $identite=$donnees['ID']?>
                <a class="btn" href="index.php?action=affichelechapitre&id=<?php echo "$identite"?>">Editer</a>
                <form action="index.php?action=lesuprimerbrouillon" method="POST" enctype="multipart/form-data">
                  <input name="id" class="none" type="text" value="<?php echo $donnees['ID']?>">
                  <button  type="submit" class="btn-submit">suprimer</button>
                </form>
              </div>
            <br>
        </div>
   <?php endforeach; ?>

</section>
<?php $content = ob_get_clean() ; ?>
<?php require('templateadminagain.php'); ?>