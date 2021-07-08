<?php
class connexion
{
    function connexionbdd ()
    { 
        $bdd=new PDO('mysql:host=localhost;dbname=project4;charset=utf8', 'root', 'root') ;
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}
$instancedeclasseconnexion = new connexion();
$bdd =$instancedeclasseconnexion ->connexionbdd ();


function directionaccueil()
{ 
require('Model/front-end/acceuil.php');
$lastchapitres = new modelacceuil();
$lastchapitre = $lastchapitres->getdataacceuil($chapitre-text);
require('view/front-end/Accueil.php');
}

function directionauteur()
{
    require('view/front-end/Auteur.php');
}

function directionchapitre()
{
    require('view/front-end/Chapitre.php');
}

function directioncontact()
{
    require('view/front-end/contact.php');
}
?>
