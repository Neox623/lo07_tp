<!DOCTYPE html>
<?php
$titre = "tp06_e2_hidden_page1";
require 'lo07_biblio_formulaire_bt.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo ($titre) ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet"/>
        
    </head>

    <body>

       <div class="container">
       <div class="panel panel-success">
       <div class="panel-heading">
          <h3 class="panel-title"><?php echo $titre; ?></h3>
       </div>
       </div> 
      <?php
      echo '</br>';
      form_begin("lo07", "get", "tp06_e2_hidden_page2.php");
      form_input_hidden('Troyes', 'ville');
      form_input_hidden('3000', 'effectif');
      form_input_submit("UTT");
      form_end();
      echo '</br>';
      form_begin("lo07", "get", "tp06_e2_hidden_page2.php");
      form_input_hidden('Compiegne', 'ville');
      form_input_hidden('3200', 'effectif');
      form_input_submit("UTC");
      form_end();
      echo '</br>';
      form_begin("lo07", "get", "tp06_e2_hidden_page2.php");
      form_input_hidden('Belfort', 'ville');
      form_input_hidden('3100', 'effectif');
      form_input_submit("UTBM");
      form_end();
      ?>
      
    </div>

    </body>
</html>
