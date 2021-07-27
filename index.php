<?php 
require('controller/front-end/controller.php');
if (isset($_GET['action'])) 
{
    {
        switch ($_GET['action'])
        {
            case 'accueil':
            directionaccueil();
            break;
            case 'auteur';
            directionauteur();
            break;
            case 'chapitre':
            directionchapitre();
            break;
            case 'contact';
            directioncontact();
            break;
        }
    }
}
else{directionchapitre();}
?>
