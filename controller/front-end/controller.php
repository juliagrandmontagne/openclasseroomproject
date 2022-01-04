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
$databd3 = $instanceclasse-> connexionbdcommentaire();
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
   require('Model/front-end/contact.php');
   $instanceclassecontact = new modelcontact ();
   $databd4 = $instanceclassecontact-> connexionbdcontact();
   require('view/front-end/contact.php');
}
function lesignaler()
{
   require('Model/front-end/commentaire.php');
   $instanceclasse = new modelcommentaire();
   $databd = $instanceclasse->lesignaler();
   require('view/front-end/chapitre.php');
}

?>