<?php
    $dsn = 'mysql:dbname=bourelre;host=localhost;charset=utf8';
    $username = "root";
    $password = "";
?>

<?php
            
            try{
                
                $database = new PDO($dsn, $username, $password);
                $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                
                
                
             
            }
            catch (PDOException $ex) {
                echo( $ex->getCode().' - '.$ex->getMessage());
                echo 'Error';
            }
            
            
            ?>