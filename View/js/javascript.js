// Constante pour faire appel l'ID Select présent en HTML
const selectCouleur = document.getElementById('selectCouleur');
// Création de la fonction
function couleur()
	{
        // Définir la constante pour créer la balise Option
        dataCouleur.forEach(function(couleur, index){
            const choixCouleur = document.createElement('option');
            choixCouleur.innerHTML = couleur; // Insérer le texte
            choixCouleur.value = dataCode[index] // Insérer la valeur
            selectCouleur.appendChild(choixCouleur) // Définir l'option comme étant l'enfant de Select 
        });
    }
// Appel de la fonction
couleur();



