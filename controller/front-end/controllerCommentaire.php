<?php
function commentaire()
{
require('Model/front-end/commentaire.php');
$instanceclasse = new modelcommentaire();
$databd = $instanceclasse->creercommentaire();
require('view/front-end/chapitre.php');
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
  ?>