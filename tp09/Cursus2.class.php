<?php
require_once 'Module.class.php';
session_start();

class Cursus2{
	private $listeModules;

	function __construct(){
		if (isset($_SESSION["SESSION_cursus"])) {
            $this->listeModules = $_SESSION["SESSION_cursus"];
        } else {
            $this->listeModules = array();
            $_SESSION["SESSION_cursus"] = array();
        }
		
	}

	function __toString(){
		$resultat = "Les modules qui sont dans ce cursus sont : <br/>";
		$i=0;
		foreach ($this->listeModules as $module) {
			$i++;
			$resultat .= $i.". module (".$module->getSigle().", ".$module->getLabel().", ".$module->getCategorie().", ".$module->getEffectif().")<br/>";
		}
		return $resultat;
	}

	public function addModule($module){
        $this->listeModules[$module->getSigle()] = $module;
        $_SESSION["SESSION_cursus"][$module->getSigle()] = $module;
        echo "addmodule : ".$module;
    }

	public function affiche(){
		echo "<pre>";
        print_r($this);
        echo "</pre>";
	}

}

?>