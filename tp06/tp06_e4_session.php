<!DOCTYPE html>
<?php
    session_start();
$titre = "tp06_e3_session";
$_SESSION["nom_prenom"] = "BOUREL Rémi";
$_SESSION["module"] = array("MATH02", "PHYS11","LO07", "TN04","LE03", "GE21")
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
           <a href="lo07_analyse_superglobales.php">Page : lo07_analyse_superglobales.php </a>
      
      
    </div>

    </body>
</html>
