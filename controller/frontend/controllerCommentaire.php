<?php
function commentaire()
{
   require('Model/frontend/commentaire.php');
$instanceclassecommentaire = new modelcommentaire();
$databdcommentaire = $instanceclassecommentaire->creercommentaire();
require('view/frontend/chapitre.php');
  }
function admincommentaire()
{
   require('Model/backend/commentaire.php');
   $instanceclasseadmincommentaire = new modelcommentaire();
   $databdadmincommentaire = $instanceclasseadmincommentaire->admincommentaire();
   require('view/backend/admincommentaire.php');
}
function admincommentaireold()
{
   require('Model/backend/commentaire.php');
   $instanceclasseadmincommentaireold = new modelcommentaire();
   $databdadmincommentaireold = $instanceclasseadmincommentaireold->admincommentairevalider();
   require('view/backend/oldcommentaire.php');
}  
function admincommentairesignaler() 
{
   require('Model//backend/commentaire.php');
   $instanceclasseadmincommentairesignaler = new modelcommentaire();
   $databdadmincommentairesignaler = $instanceclasseadmincommentairesignaler->admincommentairesignaler();
   require('view/backend/admincommentairesignaler.php');
} 
  ?>