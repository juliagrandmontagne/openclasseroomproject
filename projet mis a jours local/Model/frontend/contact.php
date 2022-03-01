<?php 
class modelcontact {

  public function connexionbdcontact() {
    require('connexion.php');
    $sth = $bdd->prepare('INSERT INTO contact (user_name,user_mail, user_firstname,user_message) VALUES(?, ?, ?, ?)');
    $sth->execute(array(htmlspecialchars($_POST['user_name']), htmlspecialchars($_POST['user_mail']), htmlspecialchars($_POST['user_firstname']), htmlspecialchars($_POST['user_message'])));
	}
    }   
// else echo"le formulaire est incomplet" ;

?>
