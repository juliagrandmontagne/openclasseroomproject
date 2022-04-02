
<?php $title = 'auteur' ; ?>
<?php ob_start() ; ?>

<section id="main">
        <div class="presentation">
          <figure><img src="images/jeanforteroche.jpg" alt="Jean Forteroche " id="auteurpicture"></figure>
          <div id="authorstory"><p>Qui est Jean Forteroche ? Certains vous diront qu'il n'existe tout simplement pas .Que ce site est fictif, que c'est un simple exercice pour une formation Openclassroom, et que les histoires contenues dans les chapitres sont de simples extraits d'autres oeuvres . Mais ne les écoutez pas ! On sait bien que tout ce qui est sur intenet est vrai et la photo n'est pas du tout prise sur un site libre de droit voyons !...</p></div>
        </div>
    
	</section>

<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>
