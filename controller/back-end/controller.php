<?php

/*SECTION BACK-END*/ 

function tableaudebord()
{
   require('Model/back-end/tableaudebord.php');
   require('view/front-end/tableaudebord.php');
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

function newchapitre()
{
   require('Model/back-end/creerchapitre.php');
   $instanceclasse = new modelchapitre ();
   $databd =$instanceclasse-> creerchapitre();
   require('view/back-end/creerchapitre.php');
}

?>