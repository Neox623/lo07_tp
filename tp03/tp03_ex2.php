<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta <?php /* Code PHP */ ?> charset="utf-8" />
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <nav class="navbar navbar-fixed-top​ navbar-inverse">
            <a class="navbar-brand" href="#">WEB 03</a>
            <ul class="nav navbar-nav">
                <li><a href="tp03_intro_php.php">Exercice 1</a></li>
               
                <li><a href="tp03_ex2.php">Exercice 2</a></li>
                <li><a href="tp03_ex3.php">Exercice 3</a></li>
                <li><a href="tp03_ex4.php">Exercice 4</a></li>
                <li><a href="tp03_ex5.php">Exercice 5</a></li>
               
            </ul>
        </nav>
        
        
        
        
        <div class="panel panel-primary">
            <div class="panel-heading">Exercice2:validation de la configuration div-</div>
            <div class="panel-body">
                
<?php

$Nom = 'Nom = Bourel'; // assigne la valeur TRUE à $foo
$Prenom = 'Prenom = Rémi'; // assigne la valeur TRUE à $foo
$Age = 'Age = 20 ans'; // assigne la valeur TRUE à $foo
$Ingenieur = 'Ingénieur = '.true; // assigne la valeur TRUE à $foo

?>
                <ul class="list-group ">
                    <li class="list-group-item"><?php echo $Nom; ?></li>
                    <li class="list-group-item"><?php echo $Prenom; ?></li>
                    <li class="list-group-item"><?php echo $Age; ?></li>
                    <li class="list-group-item"><?php echo $Ingenieur; ?></li>
                    
                    
                </ul>

</div>
        </div>
          
        
    </body>
</html>

