<?php $title = 'contact' ; ?>
<?php ob_start() ; ?>
<?php 
//traintement données
if(!empty($_post))
//verification des données presente
if(
    isset($_post["user_name"]), ($_post["user_mail"]), ($_post["user_firstname"]), ($_post["user_message"]) && !empty($_post)["user_name"] && !empty($_post)["user_mail"] && !empty($_post["user_firstname"]) && !empty($_post["user_message"])
)
{   $user_name = htmlspecialchars($_post["user_name"]);
    $user_mail = htmlspecialchars($_post["user_mail"]);
     $user_firstname = htmlspecialchars($_post["user_firstname"]);
    $user_messag = htmlspecialchars($_post["user_message"]);
     $sql = "INSERT INTO contact(user_name, user_mail, user_firstname, user_message
       VALUES(:user_name, :user_mail, :user_firstname, :user_message, )");
      require('Model/front-end/connexion.php');
       $sth= $bdd->prepare($sql);
      $sth->bindValue(':user_name',$user_name, PDO::PARAM_STR);
       $sth->bindValue(':user_mail',$user_mail, PDO::PARAM_STR);
      $sth->bindValue(':user_firstname',$user_firstname,PDO::PARAM_STR);
      $sth->bindValue(':user_message',$user_message,PDO::PARAM_STR);
 
}
else (echo"le formulaire est incomplet" )

?>

        <div class="form">
            <form  method="post" >
            <fieldset class="info">
                <legend>Nous contacter</legend>
            </fieldset>
            <fieldset>
            <legend class="adresse">
                <span class="info-soustitre">Jean Forteroche</span><br>
                Pour toutes requetes merci de remplir ce formulaire ci dessous<br>
            </legend>
            </fieldset>
                
                <textarea class="name" name="user_name" placeholder="Nom" required></textarea>
                
                <textarea id="mail" name="user_mail" placeholder="Email" required></textarea>
            
                <textarea id="prenom" name="user_firstname" placeholder="Objet" required ></textarea>
            
                <textarea id="msg" name="user_message" placeholder="Message" required></textarea>

                <input class="send" type="submit" id="btn-submit" value="Envoyer" >
            
            </form>
        </div>

<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>