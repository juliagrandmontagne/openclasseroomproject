<?php
class commentaire extends model{
    $reponse = $bdd->query('SELECT * FROM chapitre');
    echo $donnees['titre-last-chapitre']; 
    echo $donnees['chaptirenumber'];
    echo $donnees['chapitre-text'];
    echo $donnees['chapitre-titre'];
}
?>