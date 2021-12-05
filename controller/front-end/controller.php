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
/*SECTION BACK-END*/ 

function tableaudebord()
{
   require('Model/front-end/tableaudebord.php');
   require('view/front-end/tableaudebord.php');
}
function adminchapitre()
{
   require('Model/front-end/tableaudebord.php');
   $instanceclasseadmin = new modeltableaudebord ();
  $databdadminchapitre = $instanceclasseadmin-> connexionbdtableaudebord();
  // $databdmail =$instanceclasseadmin-> connexionbdmail();
   require('view/front-end/chapitrepublieradmin.php');
}
function mailadmin()
{
   require('Model/front-end/tableaudebord.php');
   $instanceclasseadmin = new modeltableaudebord ();
  //$databdadminchapitre = $instanceclasseadmin-> connexionbdtableaudebord();
   $databdmail =$instanceclasseadmin-> connexionbdmail();
   require('view/front-end/mailadmin.php');
}
function brouillon()
{
   require('Model/front-end/brouillon.php');
   $instanceclasse = new modelbrouillon ();
  //$databdadminchapitre = $instanceclasseadmin-> connexionbdtableaudebord();
   $databd =$instanceclasse-> connexionbrouillon();
   require('view/back/brouillon.php');
}
function admincommentaire()
{
   require('Model/front-end/commentaire.php');
   $instanceclasse = new modelcommentaire();
   $databd = $instanceclasse->admincommentaire();
   require('view/front-end/admincommentaire.php');
}
function admincommentaireold()
{
   require('Model/front-end/commentaire.php');
   $instanceclasse = new modelcommentaire();
   $databd = $instanceclasse->admincommentairevalider();
   require('view/back/oldcommentaire.php');
}  
function admincommentairesignaler() 
{
   require('Model/front-end/commentaire.php');
   $instanceclasse = new modelcommentaire();
   $databd = $instanceclasse->admincommentairesignaler();
   require('view/back/admincommentairesignaler.php');
} 
function newchapitre()
{
   require('view/back/creerchapitre.php');
}
?>