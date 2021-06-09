
<!-- ----- debut ControllerProducteur -->
<?php


class ControllerCave {
    // --- page d'acceuil
    public static function caveAccueil() {
        include 'config.php';


        $vue = $root . '/app/view/viewCaveAccueil.php';

        require ($vue);
    }

    // --- Liste des producteurs
    public static function mesProposition() {

        // ----- Construction chemin de la vue
        include 'config.php';

        $vue = $root . '/app/view/documentation/mesProposition.php';


        require ($vue);
    }


}
?>
<!-- ----- fin ControllerProducteur -->


