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
            <!-- 
              try{
        //On se connecte à la BDD
        require('Model/front-end/connexion.php');
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO form(name-user, comment, signaler, id-chapitre)
            VALUES(:user_name, :user_message, :signaler, :id-chapitre, )");
        $sth->bindParam(':user_name',$name-user);
        $sth->bindParam(':user_message',$comment);
        $sth->bindParam(':signaler',0);
        $sth->bindParam(':id-chapitre',$_GET["id"]);
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        header("Location:commentaire.php");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>  -->
            </div>

 <div id="commentaire"><div id="lecommentaire"><?php echo $donnees['name-user']?><?php echo $donnees['comment']?></div>
   </div>
<?php endforeach; ?>

</section>
<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>