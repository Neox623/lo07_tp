<?php
    require ('lo07_biblio_formulaire_bt.php');
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
        <div class="container" style="margin-top: 20px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Exercice3: Constitution d’équipes de joueurs pour le tournoi LO07
                </div>
                <div class="panel-body">
                    
                    <?php
                        //On affiche le formulaire
                        form_begin("lo07", "get", "tp05_tournoi_form2.php");
                        form_select("Combien de joueurs dans l'équipe", "nombre_joueur", "", 4, range(2,5));
                        form_input_submit("Envoyer");
                        form_end();
                    ?>
                    
                </div>
            </div>
       </div>  
    </body>
</html>