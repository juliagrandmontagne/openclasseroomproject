<?php $title = 'chapitrepublieradmin' ; ?>
<?php ob_start() ; ?>
    <section class="chapitrepublieradmin">
        <div id="main">
        
            <?php  foreach ($databdadminchapitre as $donnees) : ?>
                <div id="chaptireadmin"><div id="chifreadmin"><?php echo $donnees['chapitre-number']?></div>
                <div id="titreadmin"><?php echo $donnees['chapitre-titre']?></div>
                <div id="textadmin"><?php echo $donnees['chapitre-text']?>
                <button class="send" type="submit" id="btn-submit">Editer</button></div></div>
                
            <br>
            
        </div>
            <?php endforeach; ?>
        </div>
    </section>

<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>