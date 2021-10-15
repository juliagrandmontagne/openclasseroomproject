<?php $title = 'contact' ; ?>
<?php ob_start() ; ?>
<?php 
//traintement données
    //if(!empty($_post))
//verification des données presente
    //if(
    //isset($_post["user_name"]), ($_post["user_mail"]), ($_post["user_firstname"]), ($_post["user_message"]) && !empty($_post)["user_name"] && !empty($_post)["user_mail"] && !empty($_post["user_firstname"]) && !empty($_post["user_message"])
//)
{   $user_name = htmlspecialchars($_post["user_name"]);
    $user_mail = htmlspecialchars($_post["user_mail"]);
    $user_firstname = htmlspecialchars($_post["user_firstname"]);
    $user_message = htmlspecialchars($_post["user_message"]);
    try  {
        $bdd=new PDO('mysql:host=localhost;dbname=project4;charset=utf8', 'root', 'root') ;
        
        $sth= $bdd->prepare("INSERT INTO contact(user_name, user_mail, 
        user_firstname, user_message)
        VALUES(:user_name, :user_mail, :user_firstname, :user_message, )");

         $sth->bindParam(':user_name',$user_name);
         $sth->bindParam(':user_mail',$user_mail);
         $sth->bindParam(':user_firstname',$user_firstname);
         $sth->bindParam(':user_message',$user_message);
         $sth->execute();
    }
    catch (PDOException $e) {
        echo "Error!: " . $e->getMessage() . "<br/>";
            die();
          }
   
}
//else (echo"le formulaire est incomplet" )

?>

        <div class="form">
            <form  action="" method="post" >
            <fieldset class="info">
                <legend>Nous contacter</legend>
            </fieldset>
            <fieldset>
            <legend class="adresse">
                <span class="info-soustitre">Jean Forteroche</span><br>
                Pour toutes requetes merci de remplir ce formulaire ci dessous<br>
            </legend>
            </fieldset>
                <label for="user_name">Nom</label>
                <input type="text" class="name" name="user_name" placeholder="Nom" required></textarea>
                <label for="user_mail">Nom</label>
                <input type="text" id="mail" name="user_mail" placeholder="Email" required></textarea>
                <label for="user_firstname">Nom</label>
                <input type="text" id="prenom" name="user_firstname" placeholder="Objet" required ></textarea>
                <label for="user_message">Nom</label>
                <input type="text" id="msg" name="user_message" placeholder="Message" required></textarea>

                <button   class="send" type="submit" id="btn-submit" value="Envoyer" >
            
            </form>
        </div>

<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>