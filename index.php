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
            case 'auteur':
            directionauteur();
            break;
            case 'chapitres':
            directionchapitres();
            break;
            case 'chapitre':
            directionchapitre();
            break;
            case 'contact':
            directioncontact();
            break;
            case 'commentaires':
            directioncommentaires();
            break;
            case 'creerCommentaire':
            commentaire();
            break;
            case 'seconnecter':
            seconnecter();
            break;
            case 'tableaudebord':
            tableaudebord();
            break;
            case 'adminchapitre':
            adminchapitre();
            break;
            case 'mailadmin':
            mailadmin();
            break;
        }
    }
}
else{
    directionaccueil();
}
?>
