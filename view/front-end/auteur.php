
<?php $title = 'auteur' ; ?>
<?php ob_start() ; ?>

<section id="main">
        <div class="presentation">
          <figure><img src="images/jeanforteroche.jpg" alt="Jean Forteroche " id="auteurpicture"></figure>
          <div id="authorstory"><p>Qui es Jean Forteroche ? Certain vous dirons qu'il n'existe tout simplement pas .Que ce site est fictif un simple exercice pour une formation openclassroom et que le résumer des chapitre sont de simple extrais d'autre oeuvre mais n'ecoutez pas ces mécréants d'ailleur tout ce qui est sur intenet est vrais et la photos n'est pas du tout prise sur un site libre de droit voyons...</p></div>
        </div>
    
	</section>

<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>
