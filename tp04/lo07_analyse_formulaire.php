<!DOCTYPE html>
<html>
    <head>
        <title>LO07 - TP04</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <style>
           .container{
                margin-top: 40px;
                margin-bottom: 40px;
                padding-top: 20px;
                background-color: lemonchiffon;
            } 
        </style>
    </head>
    <body>
       <!-- EXERCICE 5 -->
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
                            <th scope="col">valeur (s)</th>
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
           
            <?php 
            
                }elseif(!empty($_POST)){
            ?>
           <div class="panel panel-danger">
                <div class="panel-heading">
                    SuperGlobale POST
                </div>
            </div>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">valeur (s)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($_POST as $key => $value){
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
