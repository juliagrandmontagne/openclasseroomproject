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
   $instanceclasseadminadminchapitre = new modeltableaudebord ();
  $databdadminchapitre = $instanceclasseadminadminchapitre-> connexionbdtableaudebord();
  // $databdmail =$instanceclasseadmin-> connexionbdmail();
  require('view/back-end/chapitrepublieradmin.php');
}
function mailadmin()
{
   require('Model/backend/tableaudebord.php');
   $instanceclassemailadmin = new modeltableaudebord ();
  //$databdadminchapitre = $instanceclasseadmin-> connexionbdtableaudebord();
   $databdmail =$instanceclassemailadmin-> connexionbdmail();
   require('view/backend/mailadmin.php');
}
function brouillon()
{
   require('Model/backend/brouillon.php');
   $instanceclassebrouillon = new modelbrouillon ();
  //$databdadminchapitre = $instanceclasseadmin-> connexionbdtableaudebord();
   $databd =$instanceclassebrouillon-> connexionbrouillon();
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
   $instanceclassecreerchapitre = new modelcreerchapitre();
   $databd =$instanceclassecreerchapitre-> creerchapitre();
   require('view/backend/creerchapitre.php');
}

?>