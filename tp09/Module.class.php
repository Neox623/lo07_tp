<?php
require_once 'WebBean.interface.php';
require_once 'Charte.class.php';

class Module{
	//attributs
	private $sigle;
	private $label;
	private $categorie;
	private $effectif;

	//getter
	function getSigle(){
		return $this->sigle;
	}
	function getLabel(){
		return $this->label;
	}
	function getCategorie(){
		return $this->categorie;
	}
	function getEffectif(){
		return $this->effectif;
	}

	//setter
	function setSigle($sigle){
		$this->sigle = $sigle;
	}
	function setLabel($label){
		$this->label = $label;
	}
	function setCategorie($categorie){
		$this->categorie = $categorie;
	}
	function setEffectif($effectif){
		$this->effectif = $effectif;
	}

	function __construct($sigle, $label, $categorie, $effectif){
		$this->setSigle($sigle);
		$this->setLabel($label);
		$this->setCategorie($categorie);
		$this->setEffectif($effectif);
	}

	function __toString(){
		return "Module ($this->sigle, $this->label, $this->categorie, $this->effectif) <br/>";
	}

	public function pageKO(){
		echo Charte::html_head_bootstrap("PageKO");
		echo "<h2>Votre formulaire n'est pas correct </h2>";
		echo Charte::html_foot_bootstrap();
	}

	public function pageOK(){
		echo Charte::html_head_bootstrap("Les WebBean Modules");
		echo "<h2>Votre formulaire est correct</h2>";
		foreach ($_GET as $key => $value) {
			echo "$key => $value <br/>";
		}
	}

	public function pageFoot(){
		echo Charte::html_foot_bootstrap();
	}

    public function sauveBDR($table){
        $resultat = "insert into ".$table." values (";
        $resultat .= "'".$this->sigle."',";
        $resultat .= "'".$this->label."',";
        $resultat .= "'".$this->categorie."',";
        $resultat .= $this->effectif.");";
        return $resultat;
    }

    public function sauveTXT(){
        $resultat = $this->sigle."; ";
		$resultat .= $this->label."; ";
		$resultat .= $this->categorie."; ";
		$resultat .= $this->effectif."; ";
        return $resultat;
    }

    public function sauveXML(){
        return "xml";
    }

    public function createTable($table){
    	return "create table ".$table." (sigle varchar(6) not null, categorie varchar(2) check categorie in ('CS','TM','EC','ME', 'CT'), label varchar(40) not null, effectif integer, primary key (sigle));";
    }
}

?>