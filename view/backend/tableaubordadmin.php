
<?php
if (empty($_SESSION['login'])) 
        {?>        
<header>
    <section id="menuheader">
        <div id="banniere_menu">
            <h1 id="titre">Billet simple pour l'Alaska de Jean Forteroche</h1>		
                    
            <div id="barre">
                 <nav>
                     <ul>
                        <li class="naviguation"><a href="index.php?action=accueil">Accueil</a></li>
                        <li class="naviguation"><a href="index.php?action=chapitres">Chapitres</a></li>
                        <li class="naviguation"><a href="index.php?action=auteur">Auteur</a></li>
                        <li class="naviguation"><a href="index.php?action=contact">Contact</a></li>
                        <li class="naviguation"><a href="index.php?action=sedeconnecter">Déconnection</a></li>
                    </ul>
                 </nav>
            </div>  
          </div>       	
    </section>					
</header>
<section class="connexion">
<h4 id="messageconnexion">Bonjour Jean forteroche. Que souhaitez vous faire ?</h4>

<nav class="tableaubordmenunavigation">
                     <ul class="tableaubordmenu">
                        <li class="tableaubord"><a class="soustableaubord" href="index.php?action=adminchapitre">Liste chapitres publiés</a></li>
                        <li class="tableaubord"><a class="soustableaubord" href="index.php?action=brouillon">Les chapitres en cours</a></li>
                        <li class="tableaubord"><a class="soustableaubord" href="index.php?action=newchapitre">ecrire un nouveaux chapitre</a></li> 
                        <li class="tableaubord"><a class="soustableaubord" href="index.php?action=admincommentaire">commentaires</a></li>
                        <li class="tableaubord"><a class="soustableaubord" href="index.php?action=mailadmin">lire mes email</a></li>
					</ul>
</nav>


</section>		
<?php }
              else{ echo "<script type='text/javascript'>document.location.replace('index.php?action=accueil');</script>";}
              ?>		
