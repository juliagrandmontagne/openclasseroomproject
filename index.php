<?php 

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
            case 'contactform':
            contactformulaire();
            break;
            case 'commentaires':
            directioncommentaires();
            break;
            case 'creerCommentaire':
            creerCommentaire();
            break;
            case 'sedeconnecter':
            sedeconnecter();
            break;
            case 'seconnecter':
            seconnecter();
            break;
            case 'tableaudebord':
                if (empty($_SESSION['login'])) {
            tableaudebord();  
            break;}
            else{sedeconnecter();}
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


        }

}
else
{
directionaccueil();
}
?>