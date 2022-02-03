<?php

/*SECTION BACK-END*/ 

function tableaudebord()
{
   require('Model/backend/tableaudebord.php');
   require('view/frontend/tableaudebord.php');
}
function adminchapitre()
{
   require('Model/backend/tableaudebord.php');
   $instanceclasseadmin = new modeltableaudebord ();
  $databdadminchapitre = $instanceclasseadmin-> connexionbdtableaudebord();
  // $databdmail =$instanceclasseadmin-> connexionbdmail();
   require('view/backend/chapitrepublieradmin.php');
}
function mailadmin()
{
   require('Model/backend/tableaudebord.php');
   $instanceclasseadmin = new modeltableaudebord ();
  //$databdadminchapitre = $instanceclasseadmin-> connexionbdtableaudebord();
   $databdmail =$instanceclasseadmin-> connexionbdmail();
   require('view/backend/mailadmin.php');
}
function brouillon()
{
   require('Model/backend/brouillon.php');
   $instanceclasse = new modelbrouillon ();
  //$databdadminchapitre = $instanceclasseadmin-> connexionbdtableaudebord();
   $databd =$instanceclasse-> connexionbrouillon();
   require('view/backend/brouillon.php');
}

function newchapitre()
{
   require('Model/backend/creerchapitre.php');
   require('view/backend/creerchapitre.php');
}
function creerchapitre()
{
   require('Model/backend/creerchapitre.php');
   $instanceclasse = new modelcreerchapitre();
   $databd =$instanceclasse-> creerchapitre();
   require('view/backend/creerchapitre.php');
}

?>