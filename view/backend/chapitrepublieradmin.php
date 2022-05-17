
<?php $title = 'chapitrepublieradmin' ; ?>
<?php ob_start() ; ?>
    <section class="chapitrepublieradmin">
        <div id="main">
            <?php  foreach ($databdadminchapitre as $donnees) : ?>
                <div class="chaptireadmin">
<div class="buble">

                    <div class="chifreadmin"><?php echo $donnees['chapitrenumber']?>
                </div>
                <div class="titreadmin"><?php echo $donnees['chapitretitre']?>
                </div>
             
</div>
                <div class="textadmin"><?php echo $donnees['resumer']?>
                <?php $identite=$donnees['ID']?>
                <a class="classy" href="index.php?action=affichelechapitre&id=<?php echo "$identite"?>">Editer</a>
            <form action="index.php?action=suprlechapitrepublier" method="post">
                <div class="none"> 
                    <input name="id" type="text" value="<?php echo $donnees['ID']?>">
                    <input name="idchapitre" type="text" value="<?php echo $donnees['chapitrenumber']?>">
                </div>
                <button  type="submit" class="btn-submit">suprimer</button>
            </form>
                </div>
            
        </div>
            <?php endforeach; ?>
        </div>
    </section>

<?php $content = ob_get_clean() ; ?>


<?php require('templateadminagain.php'); ?>
