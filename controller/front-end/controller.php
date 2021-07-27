<?php
require('Model/front-end/connexion.php');

    function directionaccueil()
    { 
    require('Model/front-end/Accueil.php');
   // $lastchapitres = new modelacceuil();
    //$lastchapitre = $lastchapitres->getdataacceuil($chapitre-text);
    require('view/front-end/Accueil.php');
    }

   // function directionauteur()
    //{
   //     require('view/front-end/Auteur.php');
  //  }

  //   function directionchapitre()
 //    {
  //       require('Model/front-end/chapitre.php');
        
  //       require('view/front-end/Chapitre.php');
  //   }

    function directioncontact()
    {
        require('view/front-end/contact.php');
    }
 
?>
