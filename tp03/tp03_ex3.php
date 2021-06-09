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
        
        
        
          <div class="panel panel-success">
            <div class="panel-heading">Exercice3:validation de la configuration div-isi</div>
            <div class="panel-body">
                <h3>print_r</h3>
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
                    unset($capitalesAfrique[4]);
                ?>
                <pre>
                    <?php print_r ($capitalesAfrique);  ?>
                </pre>
                <h3>foreach</h3>
                <ul class="list-group">
                    <?php
                 foreach( $capitalesAfrique as $key => $valeur ){
                 echo "<li class=\"list-group-item\">$valeur</li>";
                 }
                    ?>
                <h3>Implode</h3>    
                <li class="list-group-item"><?php $separated = implode(";", $capitalesAfrique);
                            echo $separated; // nom,email,telephone
                ?></li>
                
                <h3>Accès au donnée</h3>
                <li class="list-group-item">
                  <?php
                
                echo "nombre d'élement =". count($capitalesAfrique);
                ?>  
                </li>
                <li class="list-group-item">
                    <?php
                    asort($capitalesAfrique);
                    $separated2 = implode(" ; ", $capitalesAfrique);
                    echo "tableau trié = ".$separated2; // nom,email,telephone
                ?>
                    
                </li>
                
                
                
                
                </ul>
                
                

                
                


                

                 
                
        </div>  
        </div>
            
        
    </body>
</html>

