<?php $title = 'contact' ; ?>
<?php ob_start() ; ?>
<?php 
//traintement données
//verification des données presente
//if(
   // isset($_post["user_name"],$_post["user_mail"],$_post["user_firstname"],$_post["user_message"]) && !empty($_post["user_name"]) && !empty($_post["user_mail"]) && !empty($_post["user_firstname"]) && !empty($_post["user_message"])
//)
	$user_name = $_POST["user_name"];
    $user_mail = $_POST["user_mail"];
    $user_firstname = $_POST["user_firstname"];
    $user_message = $_POST["user_message"];
 
 	try  {
    	$bdd=new PDO('mysql:host=localhost;dbname=project4;charset=utf8', 'root', 'root') ;
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 	$sth= $bdd->prepare("INSERT INTO contact(user_name, user_mail, user_firstname, user_message)
 VALUES(:user_name, :user_mail, :user_firstname, :user_message )");
       
     $sth->bindParam(':user_name',$user_name);
     $sth->bindParam(':user_mail',$user_mail);
     $sth->bindParam(':user_firstname',$user_firstname);
     $sth->bindParam(':user_message',$user_message);
     $sth->execute();
		header("Location:index.php");
	}
	catch (PDOException $e) {
	echo "Error!: " . $e->getMessage() . "<br/>";
  	}
// else echo"le formulaire est incomplet" ;

?>

        <div class="form">
            <form action="index.php?action=contact" method="POST" enctype="multipart/form-data" >
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
                <input type="text" class="name" name="user_name" id="user_name" required>
                
                <label for="mail">E-mail</label>
				<input type="mail" name="user_mail" id="mail" required>
            
                <label for="user_firstname">Prénom</label>
				<input type="text" name="user_firstname" id="user_firstname" required>
            	
				<label for="msg">Message</label>
                <textarea id="msg" name="user_message" type="text" required></textarea>
				
				<button class="send" type="submit" id="btn-submit">Envoyer</button>
            
            </form>
        </div>

<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>