<?php 
class modelcontact {

  public function connexionbdcontact() {
    require('Model/frontend/connexion.php');
    $sth = $bdd->prepare('INSERT INTO contact (user_name,user_mail, user_firstname,user_message) VALUES(?, ?, ?, ?)');
    $sth->execute(array($_POST['user_name'], $_POST['user_mail'], $_POST['user_firstname'], $_POST['user_message']));
	}
    }   
// else echo"le formulaire est incomplet" ;

?>
