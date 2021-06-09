<!DOCTYPE html>
<html>
    <head>
        <title>LO07 - TP05</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <style>
           
        </style>
    </head>
    <body>
       
       
       <div class="container">
            
            <?php 
                if(!empty($_GET)){
            ?>
                <div class="panel panel-danger">
                     <div class="panel-heading">
                         SuperGlobale GET
                     </div>
                 </div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">name</th>
                            <th scope="col">valeur(s)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($_GET as $key => $value){
                                if(is_array($value)){
                                    printf("<tr><td>%s</td><td>%s</td></tr>",$key,implode(", ",$value));
                                }else{
                                    printf("<tr><td>%s</td><td>%s</td></tr>",$key,$value);
                                } 
                            }
                        ?>
                    </tbody>
                </table>
           
            
           
            <?php }?>
           
       </div>  
    </body>
</html>
