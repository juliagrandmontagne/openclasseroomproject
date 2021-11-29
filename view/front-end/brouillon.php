<?php $title = 'brouillon' ; ?>
<?php ob_start() ; ?>
<section class="brouillon">

<?php  foreach ($databd as $donnees) : ?>

  <div id="main">
   
                <div id="chaptireadmin"><h3><div id="chifreadmin"><?php echo $donnees['chapitre-number']?></div>
                <div id="titreadmin"><?php echo $donnees['chapitre-titre']?></div></h3>
                <div id="textadmin"><?php echo $donnees['resumer']?>
                <button class="send" type="submit" id="btn-submit">Editer</button>
                <button class="send" type="submit" id="btn-submit">suprimer</button></div></div>
                
            <br>
            
        </div>
   <?php endforeach; ?>

</section>
<?php $content = ob_get_clean() ; ?>
<?php include('templateadminagain.php'); ?>