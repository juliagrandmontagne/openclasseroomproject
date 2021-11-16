<?php $title = 'mailadmin' ; ?>
<?php ob_start() ; ?>

<section class="mailadmin">
<div id="main">
<li class="retour"><a class="retour" href="index.php?action=tableaudebord">retour</a></li>
<?php  foreach ($databdmail as $donnees) : ?>
    <div id="maileadmin"> <div>pseudo:<?php echo $donnees['user_name']?><br>
</div><div>email:<?php echo $donnees['user_mail']?><br></div>
<div>prénom:<?php echo $donnees['user_firstname']?><br></div>
<div>message:<?php echo $donnees['user_message']?></div>
   </div> <?php endforeach; ?>
   </div>
</section>

<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>