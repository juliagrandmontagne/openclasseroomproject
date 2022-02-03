<?php

function directionaccueil()
{ 
require('Model/frontend/accueil.php');
$instanceclasse2 = new modelaccueil();
$databd2 = $instanceclasse2-> connexionbdaccueil() ;
require('view/frontend/accueil.php');
}
function directionchapitre()
   {
require('Model/frontend/chapitre.php');
$instanceclasse = new modelchapitre();
$databd = $instanceclasse-> connexionbdchapitre();
$databd3 = $instanceclasse-> connexionbdcommentaire();
require('view/frontend/chapitre.php');
   }

function directionchapitres()
   {
require('Model/frontend/chapitres.php');
$instanceclasse = new modelchapitres();
$databd = $instanceclasse-> connexionbdchapitres();
require('view/frontend/chapitres.php');
   }

function directionauteur()
    { 
   require('view/frontend/auteur.php');
    }
function directioncontact()
{
   require('Model/frontend/contact.php');
   $instanceclassecontact = new modelcontact ();
   $databd4 = $instanceclassecontact-> connexionbdcontact();
   require('view/frontend/contact.php');
}
function lesignaler()
{
   require('Model/frontend/commentaire.php');
   $instanceclasse = new modelcommentaire();
   $databd = $instanceclasse->lesignaler();
   require('view/frontend/chapitre.php');
}
function seconnecter()
{
   require('Model/frontend/seconnecteradmin.php');
   $instanceclasse = new modelconnectionadmin();
   $databd = $instanceclasse->connexionbdadmin();
   require('view/frontend/connexion.php');
}
?>