<?php $title = 'chapitre' ; ?>
<?php ob_start() ; ?>
<section class="chapitre">
<?php  foreach ($databd as $donnees) : ?>
 

 <div id="chaptirenumber-individuel">
 <div id='chapitre-titre-individuel'><?php echo $donnees['chapitre-number']?><?php echo $donnees['chapitre-titre']?></div>
 
 <div id="chapitre-text-individuel"><div id="texte"><?php echo $donnees['chapitre-text']?></div>
  <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" id="illustrationchapitre-inv"> </div>
 </div></div>
 <div id="commentaire-form">
 <form action="commentaire.php" method="post" >     
                <div id="titre-commentaire"><legend >Espace commentaire</legend></div>
                <textarea class="name-comment" name="user_name" placeholder="pseudo" required></textarea>
            
                <textarea id="msg-comment" name="user_message" placeholder="Message" required></textarea>

                <input class="send" type="submit" id="btn-submit" value="Envoyer" >
            
            </form>
          
            </div>
         <?php endforeach; ?>
         <?php  foreach ($databd3 as $donnees) : ?>
         <div id="commentaire"><div id="lecommentaire"><?php echo $donnees['name-user']?><?php echo $donnees['comment']?></div>
         
   </div>
   <?php endforeach; ?>

</section>
<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>