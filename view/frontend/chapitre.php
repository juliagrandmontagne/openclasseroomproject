<?php $title = 'chapitre' ; ?>
<?php ob_start() ; ?>
<section id="main">
   <?php  foreach ($databdchapitre as $donnees) : ?>
   

   <div id="chaptirenumber-individuel">
      <div id='chapitre-titre-individuel'><?php echo $donnees['chapitrenumber']?><?php echo $donnees['chapitretitre']?></div>
      <div id="chapitre-text-individuel"><div id="texte"><?php echo $donnees['chapitretext']?></div>
   <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" id="illustrationchapitre-inv"> </div>
   </div>
   <?php endforeach; ?>
   <div id="commentaire-form">
   <form action="index.php?action=creerCommentaire" method="post" id="commentaireform" >     
      <div id="titre-commentaire">Espace commentaire</div>
         <input class="nameuser" name="nameuser" placeholder="pseudo" required>
         <textarea id="comment" name="comment" placeholder="Message" required></textarea>
         <?php  foreach ($databdchapitre as $donnees) : ?>
            <input id="none" name="idchapitre" value= "<?php echo $donnees['chapitrenumber']?>" >
            <?php endforeach; ?>
         <button class="send" type="submit" id="btn-submit" value="Envoyer" > Envoyer </button>    
   </form>
   </div>
   <?php  foreach ($databdchapitrecommentaire as $donnees) : ?>
      <div class="commentaire">
         <div class="lecommentaire">
               <div class="nomuser"><?php echo $donnees['nameuser']?></div>
               <div class="messageuser"><?php echo $donnees['comment']?></div>
            <form action="index.php?action=lesignaler" method="post">
               <input class="none" type="text" value="1">
               <input name="id" class="none" type="text" value="<?php echo $donnees['id']?>">
               <button  type="submit" class="signaler" >signaler</button>
            </form>
         </div>
      </div>
   <?php endforeach; ?>
</section>
<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>