<?php

function listeJourLabel(){
    //On retourne une liste de valeur qui est la liste des jours.
    return array('lundi','mardi','mercredi','jeudi','vendredi');
}

function listeJourIndice(){
    //Les jour vont dse 1 a 31, c'est pour cela qui l'on notre compteur a 1 et que l'on fait i++ (i+1) pour aller jusque 31.
    for($i=1;$i<=31;$i++){
        $listeJourIndice[] = $i;
    }
    //Une fois la boucle finie, le tableau contient les 31 valeur. On peux retourenr les valeur
    return $listeJourIndice;
}

function listeMois(){
    //On retourne une liste de valeur qui est la liste des mois.
    return array('janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre');
}

function listeSeance(){
    
    for($heure = 8;$heure<18;$heure++){
        //on regarde si ce n'est pas la pause du midi
        if($heure != 12 && $heure != 13){
            
           
            for($minute = 0;$minute <= 40;$minute+=20){ //car on va de 20 min en 20min
            if($minute==0){
                    $sufixe = "0";
            }
            else{
                $sufixe="";
            }
            
                $listeSeance[] = $heure."h".$minute.$sufixe; 
            }
        }
    }
    //on retourne une liste contenant l'ensemble des sÃ©ances de 20min possible comprise entre 8h/12h puis 14h/18h 
    return $listeSeance;
    
    
}


?>