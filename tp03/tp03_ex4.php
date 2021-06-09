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
        
        
        
            
                <?php
                $capitalesEurope = array(
                    
                    "France" => "Paris",
                    "Italie" => "Rome",
                    "Belgique" => "Bruxelles",
                    "Espagne" => "Madrid",
                    "Allemagne" => "Berlin",
                    "Portugal"=> "Lisbonne",
                   
                );
                
                    
                ?>
                
            
        <div class="panel panel-default">
            <div class="panel-heading">Exercice 4 : Tableaux associatifs (capitales d'europe</div>
            <div class="panel-body">
                <?php
                echo $capitalesEurope['Allemagne'];
                ?>
            
        

        <?php
        $capitalesEurope['France'] = 'Troyes'; // Nous remplaçons ici la valeur du tableau => paris par troyes
        ?>


        
            
           
                <ul class="list-group">
                    <?php
                    foreach ($capitalesEurope as $key => $value) {
                        echo "<li class=\"list-group-item\">$key: $value</li>";
                    }
                    ?>
                </ul>
            


        <?php
        $capitalesEuropeCle = array_keys($capitalesEurope);
        $capitalesEuropeValeurs = array_values($capitalesEurope);
        ?>

        
            
            
                Les clés :  <?php echo implode(' , ', $capitalesEuropeCle) ?>
                <br>
                Valeurs : <?php echo implode(' , ', $capitalesEuropeValeurs) ?>
            
        
       </div>
        </div> 
    </body>
</html>

