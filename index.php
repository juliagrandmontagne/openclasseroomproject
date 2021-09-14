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
            directionchapitres();
            break;
            case 'contact';
            directioncontact();
            break;
            case'chapitre-indv';
            directionchapitre()
        }
    }
}
else{
    directionaccueil();
}
?>
