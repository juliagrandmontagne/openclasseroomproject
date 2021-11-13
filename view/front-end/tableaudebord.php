<?php $title = 'tableaudebord' ; ?>
<?php ob_start() ; ?>
<section class="connexion">
<h4 id="messageconnexion">Bonjour Jean forteroche</h4>

<?php  foreach ($databdadminchapitre as $donnees) : ?>
 <?php echo $donnees['chapitre-number']?><?php echo $donnees['chapitre-titre']?>
 <?php $identite=$donnees['ID']?>
<?php echo $donnees['chapitre-text']?><?php echo "$identite"?>
 </div><?php endforeach; ?></div>
<?php  foreach ($databd as $donnees) : ?>
 <?php echo $donnees['chapitre-number']?><?php echo $donnees['chapitre-titre']?>
 <?php $identite=$donnees['ID']?>
<?php echo $donnees['chapitre-text']?><?php echo "$identite"?>
 </div><?php endforeach; ?>
 
 <?php  foreach ($databdmail as $donnees) : ?>
    <?php echo $donnees['user_name']?><?php echo $donnees['user_mail']?><?php echo $donnees['user_firstname']?><?php echo $donnees['user_message']?>
    </div><?php endforeach; ?>
 

</section>

<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>