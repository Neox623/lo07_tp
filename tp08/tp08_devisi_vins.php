<?php
//$titre = "tp08_devisi_vins.php";

function panel_head($titre){
    
    echo ('<div class="panel panel-primary">');
    echo ('<div class="panel-heading">');       
    echo  $titre;    
    echo    '</div>';
    echo    '</div>';
    
    
}
$dsn = 'mysql:dbname=bourelre;host=localhost;charset=utf8';
$username = "root";
$password = "";
        



?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TP08</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet"/>
        <link href="my_css.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <div class="container">
            
           
            <?php
            panel_head("Connexion à ma base sur dev-isi");
            try{
                
                $database = new PDO($dsn, $username, $password);
                $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo '<ul>';
                
                echo '<li>dsn ='.$dsn.'</li>';
                echo '<li>username = '.$username.'</li>' ;
                echo '<li>password = '.$password .'</li>';
                echo '</ul>';
                panel_head("Insertion d'un tuple : insert into vin values (3001, 'Champagne de Troyes', 1976, 11.45)");
                try{
                    
                    $requete = "insert into vin values (3001, 'Champagne de Troyes', 1976, 11.45)";
                    $result = $database->exec($requete);
                    echo ('Nombre de tuples ajoutés = '.$result);
                    
                    } 
                catch (Exception $ex) {
                    
                    echo ('Nombre de tuples ajoutés = 0');
                }
                
             $requete2 = "select * from vin where annee = 1976";
            $result2 = $database->query($requete2);
            panel_head("Requête SQL : query = ".$requete2);
            $cpt = 0;
            
            while ($vin = $result2->fetch(PDO :: FETCH_ASSOC)){
                $cpt++;
                echo $cpt.". vin(".implode(", ",$vin).")<br>";
                
            }
            
            
            panel_head("Résultats dans un tableau Bootstrap avec select * from vin where annee = 1976");
            $result2 = $database->query($requete2);
            //on construit le tableau
            echo '<table class="table table-bordered"><tbody>';
            while ($vin = $result2->fetch(PDO :: FETCH_ASSOC)){
                echo '<tr class="success">';
                    
                    foreach ($vin as $value) {
                        echo '<td>'.$value.'</td>';
                    }
                echo '</tr>';
                
            }
            echo '</tbody></table>';
            
            
            
            $requete3 = "select* from vin where annee = 1976";
            $result3 = $database->query($requete3);

            panel_head("Récupération des noms des attributs avec select id,cru from vin where annee = 1976");
            //on génère le tableau avec l'affichage dynamique des noms des attributs
            //On récupère le nombre de colonnes du tableau
            $nb_colonnes = $result3->columnCount();
            echo '<table class="table table-bordered">';
                //on génère l'entête du tableau
                echo '<thead>';
                    echo '<tr class="danger">';
                        //on affiche le label de chaque attribut
                        for ($i=0; $i<$nb_colonnes; $i++){
                            echo '<th>'.$result3->getColumnMeta($i)['name'].'</th>';
                        }
                    echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                    //on affiche le contenue de chaque tuple
                    foreach ($result3 as $ligne){
                        echo '<tr class="success">';
                            for ($i=0; $i<$nb_colonnes; $i++){
                                echo '<td>'.$ligne[$i].'</td>';
                            }
                        echo '</tr>';
                    }
                echo '</tbody>';
            echo '</table>';
            
            
            $requete5 = "select cru, annee from vin where annee=?";
            $annee = 1980;
            $result5 = $database->prepare($requete5);
            $result5->execute([$annee]);
            echo '<table class="table table-bordered">';
                //on génère l'entête du tableau
                echo '<thead>';
                    echo '<tr class="danger">';
                        //on affiche le label de chaque attribut
                        for ($i=0; $i<$nb_colonnes; $i++){
                            echo '<th>'.$result5->getColumnMeta($i)['name'].'</th>';
                        }
                    echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                    //on affiche le contenue de chaque tuple
                    foreach ($result5 as $ligne){
                        echo '<tr class="success">';
                            for ($i=0; $i<$nb_colonnes; $i++){
                                echo '<td>'.$ligne[$i].'</td>';
                            }
                        echo '</tr>';
                    }
                echo '</tbody>';
            echo '</table>';
            
            
            
            
            
            
            $requete6 = "select * from vin where annee =:an and degre =:dg";
            $resultat6 = $database->prepare($requete6);
            $resultat6->execute ( [
                'an' => 1980,
                'dg' => 10.00] 
            );
            echo '<table class="table table-bordered">';
                //on génère l'entête du tableau
                echo '<thead>';
                    echo '<tr class="danger">';
                        //on affiche le label de chaque attribut
                        for ($i=0; $i<$nb_colonnes; $i++){
                            echo '<th>'.$resultat6->getColumnMeta($i)['name'].'</th>';
                        }
                    echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                    //on affiche le contenue de chaque tuple
                    foreach ($resultat6 as $ligne){
                        echo '<tr class="success">';
                            for ($i=0; $i<$nb_colonnes; $i++){
                                echo '<td>'.$ligne[$i].'</td>';
                            }
                        echo '</tr>';
                    }
                echo '</tbody>';
            echo '</table>';
            
            
            
            
            panel_head("Gestion des erreurs");
            try{
                $requete7 = "select * from vinXYZ";
                $result7 = $database->query($requete7);
            }catch (Exception $e) {
                echo $e->getCode().' - '.$e->getMessage();
            }
            
            
            
            try{
                panel_head("Gestion des transactions");
                $database->beginTransaction();
                $requete7 = "insert into vin values (2000, 'Champagne de Troyes', 2019, 11.45)";
                $database->exec($requete7);
                $database->exec($requete7);
                $database->commit();
            } catch (Exception $ex) {
                $database->rollBack();
                echo 'Transaction avec erreur</br>';
                echo $ex->getCode().' - '.$ex->getMessage();
                echo '</br>Fin';
            }
            
            
            
            
            }
            catch (PDOException $ex) {
                echo( $ex->getCode().' - '.$ex->getMessage());
                echo '1232';
            }
            
            
            ?>
            
          

        </div>

    </body>
</html>
