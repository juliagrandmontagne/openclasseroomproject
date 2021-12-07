<?php
function commentaire()
{
require('Model/front-end/commentaire.php');
$instanceclasse = new modelcommentaire();
$databd = $instanceclasse->creercommentaire();
require('view/front-end/chapitre.php');
  }
  function seconnecter()
{
   require('view/front-end/connexion.php');
}
  ?>