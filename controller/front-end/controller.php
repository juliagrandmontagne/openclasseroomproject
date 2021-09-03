<?php

function directionaccueil()
{ 
require('Model/front-end/accueil.php');
$instanceclasse2 = new modelaccueil();
$databd2 = $instanceclasse2-> connexionbdaccueil() ;
require('view/front-end/Accueil.php');
}
function directionchapitre()
   {
require('Model/front-end/chapitre.php');
$instanceclasse = new modelchapitre();
$databd = $instanceclasse-> connexionbdchapitre();
require('view/front-end/Chapitre.php');
   }
    function directionauteur()
    { 
        require('view/front-end/Auteur.php');
    }
    function directioncontact()
{
    require('view/front-end/contact.php');
}
?>