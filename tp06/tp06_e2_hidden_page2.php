<!DOCTYPE html>
<?php
$titre = "tp06_e2_hidden_page2";
if (empty($_GET)) {
    header('location: tp06_e2_hidden_page1.php');
}

$url = "lo07_analyse_superglobales.php?";
foreach ($_GET as $key => $valeur){
    $url = $url.$key."=".$valeur."&";
}
    
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
           <a href="<?php echo $url; ?>"><?php echo $url; ?></a>
      
    </div>

    </body>
</html>
