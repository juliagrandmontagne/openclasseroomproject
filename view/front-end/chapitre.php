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
                <input class="name-comment" name="name_user" placeholder="pseudo" required>
            
                <textarea id="msg-comment" name="comment" placeholder="Message" required></textarea>

                <input class="send" type="submit" id="btn-submit" value="Envoyer" >
            
            </form>
<?php 
//traintement données
//verification des données presente 
$name_user = $_POST["name_user"];
$comment  = $_POST["comment"];

if(
 isset($_post["user_name"],$_post["comment"]) && !empty($_post["user_name"]) && !empty($_post["comment"])
) 
    try  {
        $bdd=new PDO('mysql:host=localhost;dbname=project4;charset=utf8', 'root', 'root') ;
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sth= $bdd->prepare("INSERT INTO ( name_user, comment ,)
 VALUES( :user_name, :comment )");
       
     $sth->bindParam(':name_user',$name_user);
     $sth->bindParam(':comment',$comment);
    // $sth->bindParam(':idchapitre',. $_GET["id"]);
     $sth->execute();
        header("Location:index.php");
    }
    catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
      }
      
// else echo"le formulaire est incomplet" ;

?>

            </div>
         <?php endforeach; ?>
         <?php  foreach ($databd3 as $donnees) : ?>
         <div id="commentaire"><div id="lecommentaire"><?php echo $donnees['name-user']?><?php echo $donnees['comment']?></div>
         
   </div>
   <?php endforeach; ?>

</section>
<?php $content = ob_get_clean() ; ?>
<?php include('template.php'); ?>