<?php

function directionaccueil()
{ 
require('Model/front-end/accueil.php');
$instanceclasse2 = new modelaccueil();
$databd2 = $instanceclasse2-> connexionbdaccueil() ;
require('view/front-end/Accueil.php');
}
function directionchapitres()
   {
require('Model/front-end/chapitres.php');
$instanceclasse = new modelchapitres();
$databd = $instanceclasse-> connexionbdchapitres();
require('view/front-end/Chapitres.php');
   }
   function directionchapitre()
   {
require('Model/front-end/chapitre.php');
$instanceclasse3 = new modelchapitre();
$databd3 = $instanceclasse3-> connexionbdchapitre();
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