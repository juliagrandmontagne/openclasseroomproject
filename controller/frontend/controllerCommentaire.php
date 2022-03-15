<?php
//creation de commentaire
function creerCommentaire()
{
   require('Model/frontend/commentaire.php');
$instanceclassecommentaire = new modelcommentaire();
$databdcommentaire = $instanceclassecommentaire->creerCommentaire();
require('view/frontend/chapitre.php');
  }
  //affichage des commentaire valider
function admincommentaire()
{
   require('Model/backend/commentaire.php');
   $instanceclasseadmincommentaire = new modelcommentaire();
   $databdadmincommentaire = $instanceclasseadmincommentaire->admincommentaire();
   require('view/backend/admincommentaire.php');
}
//affichage des commentaire ni signaler ni valider
function admincommentaireold()
{
   require('Model/backend/commentaire.php');
   $instanceclasseadmincommentaireold = new modelcommentaire();
   $databdadmincommentaireold = $instanceclasseadmincommentaireold->admincommentairevalider();
   require('view/backend/oldcommentaire.php');
}  
//affichage des commentaire signaler
function admincommentairesignaler() 
{
   require('Model/backend/commentaire.php');
   $instanceclasseadmincommentairesignaler = new modelcommentaire();
   $databdadmincommentairesignaler = $instanceclasseadmincommentairesignaler->admincommentairesignaler();
   require('view/backend/admincommentairesignaler.php');
} 
//supression commentaire sur la page valider les commentaire
function lesuprimeradminsignaler()
{
   require('Model/backend/commentaire.php');
   $instanceadmincommentairesuprimers  = new modelcommentaire();
   $databdadmincommentairesuprimers  = $instanceadmincommentairesuprimers->lesuprimeradminsignaler();
   require('view/backend/admincommentairesignaler.php');
} 
//supression commentaire sur la page commentaire en attende de validation
function lesuprimeradmin()
{
   require('Model/backend/commentaire.php');
   $instanceadmincommsuprimer  = new modelcommentaire();
   $databdadmincommentairesuprimer  = $instanceadmincommsuprimer->lesuprimeradmin();
   require('view/backend/admincommentaire.php');
} 
//supression commentaire sur la page commentaire en deja valider
function lesuprimeradminold()
{
   require('Model/backend/commentaire.php');
   $instanceadmincomsuprimero  = new modelcommentaire();
   $databdadmincommentairesuprimero  = $instanceadmincomsuprimero->lesuprimeradminold();
   require('view/backend/oldcommentaire.php');
} 
//validation commentaire sur la page signalisation dees commentaires
 function validationadmins()
 {
   require('Model/backend/commentaire.php');
   $instanceclasseadmincommentairevalider  = new modelcommentaire();
   $databdadmincommentairevalider  = $instanceclasseadmincommentairevalider->validationadmins();
   require('view/backend/admincommentairesignaler.php');
} 
  ?>