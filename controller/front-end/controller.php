<?php
//require('Model/front-end/connexion.php');

 //function directionaccueil()
 //{ 
// require('Model/front-end/acceuil.php');
// $instanceclasse2 = new mAccueil();
 //$nbrtwo2 = $instanceclasse2-> lafonctiondeux() ;
// require('view/front-end/Accueil.php');
// }
function directionchapitre()
    {
        require('Model/front-end/chapitre.php');
        $instanceclasse = new mChapitre();
        $nbrtwo = $instanceclasse-> lafonction();
require('view/front-end/Chapitre.php');
    }
   // else
    //{ function directionaccueil()};
?>