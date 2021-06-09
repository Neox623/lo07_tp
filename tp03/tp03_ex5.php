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
        $capitalesAfrique = array(
            0=>"Alger",
            1=>"Bamako",
            2=>"Conakry",
            3=>"Cotonou",
            4=>"Freetown",
            5=>"Kampla",
            6=>"Lomé",
            7=>"Nairobi",
            7=>"Yamoussoukro",
            9=>"Maputo"
            );
        function badge_danger($label, $compteur)
        {
            return "
                    <button type=\"button\" class=\"btn btn-danger\">$label <span class=\"badge badge-light\">$compteur</span></button>
                ";
        }
        
        ?>
        
        <div class="panel panel-success">
            <div class="panel-heading">Exo 4 - Bouton</div>
            <div class="panel-body">
                <?php
                echo badge_danger("Web", 6)."<br>";

                foreach ($capitalesAfrique as $key => $valeur) {
                    echo badge_danger($valeur, strlen($valeur));
                }

                ?>
            </div>
        </div>
                
            </div>
        
    </body>
</html>

