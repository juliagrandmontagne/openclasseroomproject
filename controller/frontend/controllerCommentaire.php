<?php
function commentaire()
{
require('Model/frontend/commentaire.php');
$instanceclasse = new modelcommentaire();
$databd = $instanceclasse->creercommentaire();
require('view/frontend/chapitre.php');
  }
function admincommentaire()
{
   require('Model/backend/commentaire.php');
   $instanceclasse = new modelcommentaire();
   $databd = $instanceclasse->admincommentaire();
   require('view/backend/admincommentaire.php');
}
function admincommentaireold()
{
   require('Model/backend/commentaire.php');
   $instanceclasse = new modelcommentaire();
   $databd = $instanceclasse->admincommentairevalider();
   require('view/backend/oldcommentaire.php');
}  
function admincommentairesignaler() 
{
   require('Model//backend/commentaire.php');
   $instanceclasse = new modelcommentaire();
   $databd = $instanceclasse->admincommentairesignaler();
   require('view/backend/admincommentairesignaler.php');
} 
  ?>