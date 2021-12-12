<?php

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
   require('view/back/chapitrepublieradmin.php');
}
function mailadmin()
{
   require('Model/front-end/tableaudebord.php');
   $instanceclasseadmin = new modeltableaudebord ();
  //$databdadminchapitre = $instanceclasseadmin-> connexionbdtableaudebord();
   $databdmail =$instanceclasseadmin-> connexionbdmail();
   require('view/back/mailadmin.php');
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
   require('view/back/admincommentaire.php');
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