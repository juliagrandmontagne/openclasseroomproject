<?php $title = 'mailadmin' ; ?>
<?php ob_start() ; ?>

<section class="mailadmin">
<div id="main">
<?php  foreach ($databdmail as $donnees) : ?>
    <div class="maileadmin"> <div><strong>pseudo : </strong> <?php echo $donnees['user_name']?><br>
</div><div><strong> email :</strong>  <?php echo $donnees['user_mail']?><br></div>
<div><strong>prénom : </strong> <?php echo $donnees['user_firstname']?><br></div>
<div><strong>message : </strong> <?php echo $donnees['user_message']?></div>
   </div> <?php endforeach; ?>
   </div>
</section>

<?php $content = ob_get_clean() ; ?>

<?php require('templateadminagain.php'); ?>