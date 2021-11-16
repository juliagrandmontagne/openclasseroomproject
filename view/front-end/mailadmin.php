<?php $title = 'mailadmin' ; ?>
<?php ob_start() ; ?>

<section class="mailadmin">
 
<?php  foreach ($databdmail as $donnees) : ?>
    <?php echo $donnees['user_name']?><?php echo $donnees['user_mail']?><?php echo $donnees['user_firstname']?><?php echo $donnees['user_message']?>
    </div><?php endforeach; ?>

</section>

<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>