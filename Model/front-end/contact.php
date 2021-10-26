<?php 
class modelcontact {
//traintement données
//verification des données presente
$user_name = $_POST["user_name"];
    $user_mail = $_POST["user_mail"];
    $user_firstname = $_POST["user_firstname"];
    $user_message = $_POST["user_message"];
  //  $sth= $bdd->prepare("INSERT INTO contact( user_name, user_mail, user_firstname, user_message)
 //VALUES( :user_name, :user_mail, :user_firstname, :user_message )");
 $sth = $bdd->prepare('INSERT INTO contact (user_name,user_mail, user_firstname,user_message) VALUES(?, ?, ?, ?)');
 $sth->execute(array($_POST['user_name'], $_POST['user_mail'], $_POST['user_firstname'], $_POST['user_message']));


 
if(
    isset($_post["user_name"],$_post["user_mail"],$_post["user_firstname"],$_post["user_message"])
    && !empty($_post["user_name"]) && !empty($_post["user_mail"]) && !empty($_post["user_firstname"]) && !empty($_post["user_message"])
  )
	
  public function connexionbdcontact() {
    require('Model/front-end/connexion.php');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       
     $sth->bindParam(':user_name',$user_name);
     $sth->bindParam(':user_mail',$user_mail);
     $sth->bindParam(':user_firstname',$user_firstname);
     $sth->bindParam(':user_message',$user_message);
     $sth->execute();
		header("Location:index.php");
	}
    }   
// else echo"le formulaire est incomplet" ;

?>
