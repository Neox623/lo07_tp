<?php
    //s'il n'est pas passer par le formulaire 1 OU s'il n'a rien rempli, on le redirige vers le premier formulaire
    require ('lo07_biblio_formulaire_bt.php');
    if(empty($_GET)){
        header('Location: tp05_tournoi_form1.php');
    }

    
    
    //sinon on affiche la page, et on lui demande les informations des joueurs
?>

<!DOCTYPE html>
<html>
    <head>
        <title>LO07 - TP05 - Tournoi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="bootstrap.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container" >
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Exercice3: Constitution d’équipes de joueurs pour le tournoi LO07
                </div>
                <div class="panel-body">
                    
                    <?php
                        //on crÃ©e le formulaire
                        form_begin("lo07", "get", "tp05_tournoi_action.php");
                        //On demande les informations pour chaque joueur
                        for ($indiceJoueurs = 1; $indiceJoueurs <= $_GET["nombre_joueur"]; $indiceJoueurs++) {
                            echo ("<p class='text-primary text-uppercase'>Joueur n° $indiceJoueurs</p>");

                            form_input_text("Nom du joueur ", "nom_".$indiceJoueurs, "", "");
                            form_input_text("Prénom du joueur ", "prenom_".$indiceJoueurs, "", "");
                            form_input_text("Mail du joueur ", "Mail_".$indiceJoueurs, "", "");

                        }
                        form_input_reset("Effacer");
                        form_input_submit("Envoyer");
                        form_end();
                    ?>
                    
                </div>
            </div>
       </div>  
    </body>
</html>