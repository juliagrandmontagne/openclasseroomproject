<?php $title = 'contact' ; ?>
<?php ob_start() ; ?>
<section id="main">
    <div class="Contact"><div class="Placement"><p class="ContactEcris">Bonjour, vous souhaitez nous contacter joingnez nous a:<br/>cetteadresseestfictive@nepasjoindre.com </p></div></div>
</section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>