
<?php $title = 'chapitrepublieradmin' ; ?>
<?php ob_start() ; ?>
    <section class="chapitrepublieradmin">
        <div id="main">
            <?php  foreach ($databdadminchapitre as $donnees) : ?>
                <div id="chaptireadmin">
<div id="buble">
<h3>
                    <p>le chapitre numéro:</p><div id="chifreadmin"><?php echo $donnees['chapitre-number']?>
                </div>
                <div id="titreadmin"><?php echo $donnees['chapitre-titre']?>
                </div>
 </h3>               
</div>
                <div id="textadmin"><?php echo $donnees['resumer']?>
                    <button class="send" type="submit" id="btn-submit">Editer</button>
                    <button class="send" type="submit" id="btn-submit">suprimer</button>
                </div>
            
        </div>
            <?php endforeach; ?>
        </div>
    </section>

<?php $content = ob_get_clean() ; ?>


<?php include('templateadminagain.php'); ?>
