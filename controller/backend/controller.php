<?php

/*SECTION BACK-END*/ 

function tableaudebord()
{
   require('Model/backend/tableaudebord.php');
   require('view/backend/tableaudebord.php');
}
function adminchapitre()
{
   require('Model/backend/tableaudebord.php');
   $instanceclasseadminadminchapitre = new modeltableaudebord ();
  $databdadminchapitre = $instanceclasseadminadminchapitre-> connexionbdtableaudebord();
  require('view/backend/chapitrepublieradmin.php');
}
function mailadmin()
{
   require('Model/backend/tableaudebord.php');
   $instanceclassemailadmin = new modeltableaudebord ();
   $databdmail = $instanceclassemailadmin-> connexionbdmail();
   require('view/backend/mailadmin.php');
}
function brouillon()
{
   require('Model/backend/brouillon.php');
   $instanceclassebrouillon = new modelbrouillon ();
   $databdbrouillon = $instanceclassebrouillon-> connexionbrouillon();
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
   $databd = $instanceclassecreerchapitre-> creerchapitre();
   require('view/backend/creerchapitre.php');
}
function lesuprimerbrouillon ()
{
   require('Model/backend/brouillon.php');
   $instanceclassesuprimerbrouillon = new modelbrouillon();
   $databdbrouillon = $instanceclassesuprimerbrouillon->lesuprimerbrouillon();
   require('view/backend/brouillon.php');
}
function suprlechapitrepublier()
{
   require('Model/backend/tableaudebord.php');
   $instanceclassesupchapitre = new modeltableaudebord ();
   $databdsuprchap = $instanceclassesupchapitre->suprimerchapitre();
   require('view/backend/chapitrepublieradmin.php');
}
function lemodifier()
{
   require('Model/backend/modifierchapitre.php');
   $instanceclassemodchapitre = new modelmodifierchap ();
   $databdmodchap = $instanceclassemodchapitre->lemodifier();
   require('view/backend/modifierchapitre.php');
}
function affichelechapitre()
{
   require('Model/backend/modifierchapitre.php');
   $instanceclassemodchapitre = new modelmodifierchap();
   $databdaffiche =$instanceclassemodchapitre ->affichelechapitre();
   require('view/backend/modifierchapitre.php');
}
?>