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
   require('view/back-end/chapitrepublieradmin.php');
}
function mailadmin()
{
   require('Model/backend/tableaudebord.php');
   $instanceclasseadmin = new modeltableaudebord ();
   $databdmail =$instanceclasseadmin-> connexionbdmail();
   require('view/backend/mailadmin.php');
}
function brouillon()
{
   require('Model/backend/brouillon.php');
   $instanceclasse = new modelbrouillon ();
   $databd =$instanceclasse-> connexionbrouillon();
   require('view/backend/brouillon.php');
}
//affiche la page
function newchapitre()
{
   require('Model/backend/creerchapitre.php');
   require('view/backend/creerchapitre.php');
}
//realisation en rappord avec la bd
function creerchapitre()
{
   require('Model/backend/creerchapitre.php');
   $instanceclasse = new modelcreerchapitre();
   $databd =$instanceclasse-> creerchapitre();
   require('view/backend/creerchapitre.php');
}

?>