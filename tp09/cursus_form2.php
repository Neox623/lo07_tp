<!DOCTYPE html>
<?php
    require ('lo07_biblio_formulaire_bt.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>module_form.html</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="bootstrap.css" rel="stylesheet"/>
        <link href="my_css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Formulaire pour la collecte d'un module</h3>
                </div>
            </div> 
            <?php
                form_begin("tp09_lo07", "get", "cursus_action2.php");
				form_input_text("Sigle", "sigle", "", "LO07");
				form_input_text("Label", "label", "", "Web");
				form_select("Catégorie", "categorie", "", 4, array("CS","TM","EC","ME")); 
				form_input_text("Effectif", "effectif", "", "87");
                form_input_submit("Envoyer");
                form_end();
            ?>
        </div>
    </body>
</html>