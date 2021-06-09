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
                    Traitement en PHP d'un formulaire (méthode GET)
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
                        if(isset($_GET["nom"])){
                            $nom = $_GET["nom"];
                            printf("<tr><td>nom</td><td>%s</td></tr>",$nom);
                        }
                        
                        if(isset($_GET["prenom"])){
                            $prenom = $_GET["prenom"];
                            printf("<tr><td>Prénom</td><td>%s</td></tr>",$prenom);
                        }
                        
                        if(isset($_GET["email"])){
                            $email = $_GET["email"];
                            printf("<tr><td>Email</td><td>%s</td></tr>",$email);
                        }
                        
                        if(isset($_GET["date_de_naissance"])){
                            $date_de_naissance = $_GET["date_de_naissance"];
                            printf("<tr><td>Date de naissance</td><td>%s</td></tr>",$date_de_naissance);
                        }
                        
                        if(isset($_GET["genre"])){
                            $genre = $_GET["genre"];
                            printf("<tr><td>Genre</td><td>%s</td></tr>",$genre);
                        }
                        
                        if(isset($_GET["origine"])){
                            $origine = $_GET["origine"];
                            printf("<tr><td>Origine</td><td>%s</td></tr>",$origine);
                        }
                        
                        if(isset($_GET["st07"])){
                            printf("<tr><td>ST07</td><td>oui</td></tr>");
                        }else{
                            printf("<tr><td>ST07</td><td>non</td></tr>");
                        }
                        
                        if(isset($_GET["st09"])){
                            printf("<tr><td>ST09</td><td>oui</td></tr>");
                        }else{
                            printf("<tr><td>ST09</td><td>non</td></tr>");
                        }
                        
                        if(isset($_GET["st10"])){
                            printf("<tr><td>ST10</td><td>oui</td></tr>");
                        }else{
                            printf("<tr><td>ST10</td><td>non</td></tr>");
                        }
                        
                        if(isset($_GET["se"])){
                            printf("<tr><td>SE</td><td>oui</td></tr>");
                        }else{
                            printf("<tr><td>SE</td><td>non</td></tr>");
                        }
                        
                        if(isset($_GET["modules"])){
                            $modules = $_GET["modules"];
                            printf("<tr><td>Module</td><td>%s</td></tr>",implode(', ', $modules));
                        }
                        
                        if(isset($_GET["complement"])){
                            $info_complementaire = $_GET["complement"];
                            printf("<tr><td>Informations complémentaires</td><td>%s</td></tr>",$info_complementaire);
                        }
                    ?>
                </tbody>
            </table>
           
            <div class="panel panel-info">
                <div class="panel-heading">
                    Mes réponses aux questions
                </div>
                <div class="panel-body">
                    Liste des questions de la section 2.7
                </div>
            </div>
           <!-- question 7 : les questions -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Questions</th>
                        <th scope="col">Réponses</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Question 7.1</td>
                        <td>Si les champs textuels, date ou origine, il prennent la valeur par défault donné par le html  <br>
                            
                            Si par contre les bouton radio de sont coché ou si aucun modules n'est sélectionnée, il n'apparraisent pas.
                        </td>  
                    </tr>
                    <tr>
                        <td>Question 7.2</td>
                        <td>
                            Si l'on veut récupérer plusieurs valeurs pour le même attribut name, comme par éxemple modules, 
                            il faut mettre [] après l'atribut name. EX : module[]
                        </td>  
                    </tr>
                    <tr>
                        <td>Question 7.3</td>
                        <td>
                            Pour récupérer la valeur de l'élément ayant pour name="nom", il faut écrire $_GET["nom"]. Il faut faire de même pour chaque élément du formulaire.
                        </td>  
                    </tr>
                    <tr>
                        <td>Question 7.4</td>
                        <td>
                            
                        </td>  
                    </tr>
                    <tr>
                        <td>Question 7.5</td>
                        <td>
                            
                        </td>  
                    </tr>
                </tbody>
            </table>
       </div>
        
        
    </body>
</html>
