<?php

// ================================================================
// -----> LO07-2021 : PHP Object
// ================================================================

interface WebBean {
  public function valide();
  public function pageKO();
  public function pageOK();
  public function sauveTXT();
  public function sauveXML($file);
  public function sauveBDR($table);
  
  //question 11
  public function createTable($table);
}

?>