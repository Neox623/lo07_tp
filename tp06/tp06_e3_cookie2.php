<!DOCTYPE html>
<?php
$titre = "tp06_e3_cookie1";
setcookie("nom2", "votre nom2");
setcookie("prenom2", "votre prenom2");
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
      <?php
      

                    

                    echo ("<table class = 'table table-striped table-bordered'>");
                    echo ("<thead>");
                    echo ("<tr><th scope = 'col'>name</th><th scope = 'col'>valeur(s)</th></tr>");
                    echo ("</thead>");

                    echo ("<tbody>");
                    foreach ($_COOKIE as $key => $value) {
                       
                        
                            echo ("<tr><td>$key</td><td>$value</td</tr>"); 
                        
                    }
                    echo ("</tbody>");
                    echo ("</table>");
                
            
            ?>
      
    </div>

    </body>
</html>
