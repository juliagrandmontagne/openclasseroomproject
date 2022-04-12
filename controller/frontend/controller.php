<?php

function directionaccueil()
{ 
require('Model/frontend/accueil.php');
$instanceclassedirectionaccueil = new modelaccueil();
$databdaccueil = $instanceclassedirectionaccueil-> connexionbdaccueil() ;
require('view/frontend/accueil.php');
}
function directionchapitre()
   {
require('Model/frontend/chapitre.php');
$instanceclassedirectionchapitre = new modelchapitre();
$databdchapitre = $instanceclassedirectionchapitre ->connexionbdchapitre();
$databdchapitrecommentaire = $instanceclassedirectionchapitre ->connexionbdcommentaire();
require('view/frontend/chapitre.php');
   }

function directionchapitres()
   {
      require('Model/frontend/chapitres.php');
$instanceclassedirectionchapitres = new modelchapitres();
$databdchapitres = $instanceclassedirectionchapitres-> connexionbdchapitres();
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
   $databdcontact = $instanceclassecontact-> connexionbdcontact();
   require('view/frontend/contact.php');
}
function lesignaler()
{
   require('Model/frontend/commentaire.php');
   $instanceclasselesignaler = new modelcommentaire();
   $databdlesignaler = $instanceclasselesignaler->lesignaler();
   require('view/frontend/chapitre.php');
}
function seconnecter()
{
   require('Model/frontend/seconnecteradmin.php');
   $instanceclasseseconnecter = new modelconnectionadmin();
   $databdsdeconnecter = $instanceclasseseconnecter->connexionbdadmin();
   require('view/frontend/connexion.php');
}
?>