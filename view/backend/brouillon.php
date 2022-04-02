<?php $title = 'brouillon' ; ?>
<?php ob_start() ; ?>
<section class="brouillon">

<?php  foreach ($databdbrouillon as $donnees) : ?>

  <div id="main">
   
                <div id="chaptireadmin"><h3><div id="chifreadmin"><?php echo $donnees['chapitre-number']?></div>
                <div id="titreadmin"><?php echo $donnees['chapitre-titre']?></div></h3>
                <div id="textadmin"><?php echo $donnees['resumer']?>
                <?php $identite=$donnees['ID']?>
                <a id="btn" href="index.php?action=affichelechapitre&id=<?php echo "$identite"?>">Editer</a>
                </from>
                <form action="index.php?action=lesuprimerbrouillon" method="POST" enctype="multipart/form-data">
                <input name="id" id="none" type="text" value="<?php echo $donnees['ID']?>">
                <button class="send" type="submit" id="btn-submit">suprimer</button></div></div>
                </from>
            <br>
            
        </div>
   <?php endforeach; ?>

</section>
<?php $content = ob_get_clean() ; ?>
<?php require('templateadminagain.php'); ?>