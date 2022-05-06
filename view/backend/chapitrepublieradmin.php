
<?php $title = 'chapitrepublieradmin' ; ?>
<?php ob_start() ; ?>
    <section class="chapitrepublieradmin">
        <div id="main">
            <?php  foreach ($databdadminchapitre as $donnees) : ?>
                <div id="chaptireadmin">
<div id="buble">
<h3>
                    <div id="chifreadmin"><?php echo $donnees['chapitrenumber']?>
                </div>
                <div id="titreadmin"><?php echo $donnees['chapitretitre']?>
                </div>
 </h3>               
</div>
                <div id="textadmin"><?php echo $donnees['resumer']?>
                <?php $identite=$donnees['ID']?>
                <a id="btn" href="index.php?action=affichelechapitre&id=<?php echo "$identite"?>">Editer</a>
            <form action="index.php?action=suprlechapitrepublier" method="post">
                <input name="id" id="" type="text" value="<?php echo $donnees['ID']?>">
                <input name="idchapitre" id="" type="text" value="<?php echo $donnees['chapitrenumber']?>">
                <button class="send" type="submit" id="btn-submit">suprimer</button></div></div>
            </from>
                    
                </div>
            
        </div>
            <?php endforeach; ?>
        </div>
    </section>

<?php $content = ob_get_clean() ; ?>


<?php require('templateadminagain.php'); ?>
