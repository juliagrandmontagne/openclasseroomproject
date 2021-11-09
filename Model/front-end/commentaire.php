//<?php
class modelccommentaire {

public function creercommentaire()
                {
                  require('Model/front-end/connexion.php');
                 $sth = $bdd->prepare('INSERT INTO commentaire (comment, nameuser, signaler ,idchapitre) VALUES(?, ?, ?, ?'));
               $sth->execute(array($_POST['comment'], $_POST['nameuser'],0, 1));   
               
                }
          }
            ?>
            