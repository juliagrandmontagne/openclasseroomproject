<?php

/*SECTION BACK-END*/ 

function tableaudebord()
{
   require('Model/back-end/tableaudebord.php');
   require('view/back-end/tableaudebord.php');
}
function adminchapitre()
{
   require('Model/back-end/tableaudebord.php');
   $instanceclasseadmin = new modeltableaudebord ();
  $databdadminchapitre = $instanceclasseadmin-> connexionbdtableaudebord();
  // $databdmail =$instanceclasseadmin-> connexionbdmail();
   require('view/back-end/chapitrepublieradmin.php');
}
function mailadmin()
{
   require('Model/back-end/tableaudebord.php');
   $instanceclasseadmin = new modeltableaudebord ();
  //$databdadminchapitre = $instanceclasseadmin-> connexionbdtableaudebord();
   $databdmail =$instanceclasseadmin-> connexionbdmail();
   require('view/back-end/mailadmin.php');
}
function brouillon()
{
   require('Model/back-end/brouillon.php');
   $instanceclasse = new modelbrouillon ();
  //$databdadminchapitre = $instanceclasseadmin-> connexionbdtableaudebord();
   $databd =$instanceclasse-> connexionbrouillon();
   require('view/back-end/brouillon.php');
}
function admincommentaire()
{
   require('Model/back-end/commentaire.php');
   $instanceclasse = new modelcommentaire();
   $databd = $instanceclasse->admincommentaire();
   require('view/back-end/admincommentaire.php');
}
function admincommentaireold()
{
   require('Model/back-end/commentaire.php');
   $instanceclasse = new modelcommentaire();
   $databd = $instanceclasse->admincommentairevalider();
   require('view/back-end/oldcommentaire.php');
}  
function admincommentairesignaler() 
{
   require('Model//back-end/commentaire.php');
   $instanceclasse = new modelcommentaire();
   $databd = $instanceclasse->admincommentairesignaler();
   require('view/back-end/admincommentairesignaler.php');
} 
function newchapitre()
{
   require('view/back-end/creerchapitre.php');
}
?>