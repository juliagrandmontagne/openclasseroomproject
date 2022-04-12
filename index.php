<<?php 
require('controller/frontend/controller.php');
require('controller/frontend/controllerCommentaire.php');
require('controller/backend/controller.php');
if (isset($_GET['action'])) 
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
            creerCommentaire();
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
            case 'brouillon':
            brouillon();
            break;
            case 'admincommentaire':
            admincommentaire();
            break;
            case 'admincommentaireold':
            admincommentaireold();
            break;
            case 'newchapitre':
            newchapitre();
            break;
            case 'admincommentairesignaler':
            admincommentairesignaler();
            break;
            case 'lesignaler':
            lesignaler();
            break;
            case'lesuprimeradminsignaler';
            lesuprimeradminsignaler();
            break;
            case'lesuprimeradmin';
            lesuprimeradmin();
            break;
            case'lesuprimeradminold';
            lesuprimeradminold();
            break;
            case'validationadmins';
            validationadmins();
            break;
            case 'creerchapitre':
            creerchapitre();
            break;
            case 'suprlechapitrepublier';
            suprlechapitrepublier();
            break;
            case'lesuprimerbrouillon';
            lesuprimerbrouillon();
            break;
            case'lemodifier';
            lemodifier();
            break;
            case 'affichelechapitre';
            affichelechapitre();
            break;
            case'validationadmin';
            validationadmin();
            break;
            case'deconnecter';
            deconnecter();
            break;

        }

}
else
{
directionaccueil();
}
?>