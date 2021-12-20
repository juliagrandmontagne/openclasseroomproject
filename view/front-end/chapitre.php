<?php $title = 'chapitre' ; ?>
<?php ob_start() ; ?>
<section id="main">
<?php  foreach ($databd as $donnees) : ?>
 

 <div id="chaptirenumber-individuel">
 <div id='chapitre-titre-individuel'><?php echo $donnees['chapitrenumber']?><?php echo $donnees['chapitre-titre']?></div>
 <div id="chapitre-text-individuel"><div id="texte"><?php echo $donnees['chapitre-text']?></div>
  <img src="<?php echo $donnees['images']?>" alt="illustrationchapitre" id="illustrationchapitre-inv"> </div>
 </div></div>
 <?php endforeach; ?>
 <div id="commentaire-form">


 <form action="index.php?action=creerCommentaire" method="post" id="commentaireform" >     
   <div id="titre-commentaire"><legend >Espace commentaire</legend></div>
      <input class="nameuser" name="nameuser" placeholder="pseudo" required>
      <textarea id="comment" name="comment" placeholder="Message" required></textarea>
       <?php  foreach ($databd3 as $donnees) : ?>
         <input id="none" name="idchapitre" value= "<?php echo $donnees['idchapitre']?>" >
         <?php endforeach; ?>
      <button class="send" type="submit" id="btn-submit" value="Envoyer" > Envoyer </button>    
</form>
</div>
   
<?php  foreach ($databd3 as $donnees) : ?>
         <div id="commentaire">
         <div id="lecommentaire">
         <div id="nomuser"><?php echo $donnees['nameuser']?></div>
         <div id="messageuser"><?php echo $donnees['comment']?></div>
         <form action="index.php?action=lesignaler" method="post">
               <input id="none" type="text" value="1">
               <input id="none" type="text" value="$donnees['ID']">
         <button class="send" type="submit" id="signaler" value="signaler" >signaler</button></div>
      </form>
         
   </div>
   <?php endforeach; ?>

</section>
<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>