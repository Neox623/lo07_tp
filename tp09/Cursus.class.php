<?php
require_once 'Module.class.php';

class Cursus{
	private $listeModules;

	function __construct(){
		$this->listeModules = array();
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
		echo "addmodule : ".$module;
	}

	public function affiche(){
		echo "<pre>";
        print_r($this);
        echo "</pre>";
	}

}

?>