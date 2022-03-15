
<?php $title = 'chapitrepublieradmin' ; ?>
<?php ob_start() ; ?>
    <section class="chapitrepublieradmin">
        <div id="main">
            <?php  foreach ($databdadminchapitre as $donnees) : ?>
                <div id="chaptireadmin">
<div id="buble">
<h3>
                    <div id="chifreadmin"><?php echo $donnees['chapitre-number']?>
                </div>
                <div id="titreadmin"><?php echo $donnees['chapitre-titre']?>
                </div>
 </h3>               
</div>
                <div id="textadmin"><?php echo $donnees['resumer']?>
                <form action="index.php?action=suprlechapitrepublier" method="post">
                    <button class="send" type="submit" id="btn-submit">Editer</button>
                    </form>
                    <form action="index.php?action=suprlechapitrepublier" method="post">
                  <input name="id" id="none" type="text" value="<?php echo $donnees['ID']?>">
                  <button class="send" type="submit" id="btn-submit" value="suprimer" >suprimer</button>
            </form>
                    
                </div>
            
        </div>
            <?php endforeach; ?>
        </div>
    </section>

<?php $content = ob_get_clean() ; ?>


<?php require('templateadminagain.php'); ?>
