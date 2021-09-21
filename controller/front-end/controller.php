<?php

function directionaccueil()
{ 
require('Model/front-end/accueil.php');
$instanceclasse2 = new modelaccueil();
$databd2 = $instanceclasse2-> connexionbdaccueil() ;
require('view/front-end/accueil.php');
}
function directionchapitre()
   {
require('Model/front-end/chapitre.php');
$instanceclasse = new modelchapitre();
$databd = $instanceclasse-> connexionbdchapitre();
require('view/front-end/chapitre.php');
   }
function directionchapitres()
   {
require('Model/front-end/chapitres.php');
$instanceclasse = new modelchapitres();
$databd = $instanceclasse-> connexionbdchapitres();
require('view/front-end/chapitres.php');
   }
    function directionauteur()
    { 
        require('view/front-end/auteur.php');
    }
    function directioncontact()
{
    require('view/front-end/contact.php');
}
?>