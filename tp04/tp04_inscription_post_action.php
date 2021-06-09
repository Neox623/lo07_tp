<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>tp04</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Traitement en PHP d'un formulaire (méthode POST)
                </div>
                <div class="panel-body">
                    Liste des paramètre reçus
                </div>
            </div>
           <!-- question 5 : Affichage des éléments du formulaire -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">valeur (s)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($_POST["nom"])){
                            $nom = $_POST["nom"];
                            printf("<tr><td>nom</td><td>%s</td></tr>",$nom);
                        }
                        
                        if(isset($_POST["prenom"])){
                            $prenom = $_POST["prenom"];
                            printf("<tr><td>Prénom</td><td>%s</td></tr>",$prenom);
                        }
                        
                        if(isset($_POST["email"])){
                            $email = $_POST["email"];
                            printf("<tr><td>Email</td><td>%s</td></tr>",$email);
                        }
                        
                        if(isset($_POST["date_de_naissance"])){
                            $date_de_naissance = $_POST["date_de_naissance"];
                            printf("<tr><td>Date de naissance</td><td>%s</td></tr>",$date_de_naissance);
                        }
                        
                        if(isset($_POST["genre"])){
                            $genre = $_POST["genre"];
                            printf("<tr><td>Genre</td><td>%s</td></tr>",$genre);
                        }
                        
                        if(isset($_POST["origine"])){
                            $origine = $_POST["origine"];
                            printf("<tr><td>Origine</td><td>%s</td></tr>",$origine);
                        }
                        
                        if(isset($_POST["st07"])){
                            printf("<tr><td>ST07</td><td>oui</td></tr>");
                        }else{
                            printf("<tr><td>ST07</td><td>non</td></tr>");
                        }
                        
                        if(isset($_POST["st09"])){
                            printf("<tr><td>ST09</td><td>oui</td></tr>");
                        }else{
                            printf("<tr><td>ST09</td><td>non</td></tr>");
                        }
                        
                        if(isset($_POST["st10"])){
                            printf("<tr><td>ST10</td><td>oui</td></tr>");
                        }else{
                            printf("<tr><td>ST10</td><td>non</td></tr>");
                        }
                        
                        if(isset($_POST["se"])){
                            printf("<tr><td>SE</td><td>oui</td></tr>");
                        }else{
                            printf("<tr><td>SE</td><td>non</td></tr>");
                        }
                        
                        if(isset($_POST["modules"])){
                            $modules = $_POST["modules"];
                            printf("<tr><td>Module</td><td>%s</td></tr>",implode(', ', $modules));
                        }
                        
                        if(isset($_POST["complement"])){
                            $info_complementaire = $_POST["complement"];
                            printf("<tr><td>Informations complémentaires</td><td>%s</td></tr>",$info_complementaire);
                        }
                    ?>
                </tbody>
            </table>
           
            <div class="panel panel-info">
                <div class="panel-heading">
                    Mes réponses aux questions (méthode POST)
                </div>
                <div class="panel-body">
                    Liste des questions de la section 3.5
                </div>
            </div>
           
           <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Questions</th>
                        <th scope="col">Réponses</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Question 5.1</td>
                        <td>
                            
                        </td>  
                    </tr>
                    <tr>
                        <td>Question 5.2</td>
                        <td>
                            
                        </td>  
                    </tr>
                </tbody>
            </table>
           
           
       </div>
        
        
    </body>
</html>
