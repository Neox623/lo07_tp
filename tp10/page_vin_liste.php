<?php
    include 'fragmentHeader.html';
?>
<body>  
    <div class="container">
       
        <?php
            include 'fragmentMenu.html';
            include 'fragmentJumbotron.html';
            include 'bibliotheque.php';
            include 'fragmentDatabaseConfig.php';
            $requete = "SELECT * FROM vin ";
            $result = $database->query($requete);

            panel_head("Liste des Vins (select*from vin order by id)");
            //on génère le tableau avec l'affichage dynamique des noms des attributs
            //On récupère le nombre de colonnes du tableau
            $nb_colonnes = $result->columnCount();
            echo '<table class="table table-bordered">';
                //on génère l'entête du tableau
                echo '<thead>';
                    echo '<tr class="danger">';
                        //on affiche le label de chaque attribut
                        for ($i=0; $i<$nb_colonnes; $i++){
                            echo '<th>'.$result->getColumnMeta($i)['name'].'</th>';
                        }
                    echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                    //on affiche le contenue de chaque tuple
                    foreach ($result as $ligne){
                        echo '<tr class="success">';
                            for ($i=0; $i<$nb_colonnes; $i++){
                                echo '<td>'.$ligne[$i].'</td>';
                            }
                        echo '</tr>';
                    }
                echo '</tbody>';
            echo '</table>';
            $query="select * from vin  order by cru";
            $statement = $database->query($query);
            include 'fragmentVinResultats.php';
            include 'fragmentFooter.html';
        ?>
